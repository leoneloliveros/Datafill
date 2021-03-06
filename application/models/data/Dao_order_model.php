<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_order_model extends CI_Model {

    public function __construct() {
        $this->load->model('data/configdb_model');
        $this->load->model('order_model');
        $this->load->model('data/dao_service_model');
    }

    public function getOrderById($orderId) {
        $dbConnection = new configdb_model();
        $session = $dbConnection->openSession();
        $sql = "SELECT * FROM ot WHERE K_IDORDER = '" . $orderId . "';";
        $order = new order_model;
        $result = $session->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $order->createOrder($row['K_IDORDER'], $row['N_NAME'], $row['D_DATE_CREATION']);
            $order->setLink($row['N_DRIVE']);
        } else {
            $order->createOrder("", "", "");
        }
        return $order;
    }

    //==============RETORNA TODAS LAS ORDENES CON SUS ACTIVIDADES... SI ROLL ES ING SOLO LAS DE EL=============
    public function getAllOrders() {
           
        $dbConnection = new configdb_model();
        $session = $dbConnection->openSession();
        $start = $_GET['start'];
        $length = $_GET['length'];
        $search = $_GET['search'];
        $search = $search["value"];
        $answer = [];

        //Parametrizando el ordenamiento:
        $columns = [ "K_IDORDER", "D_DATE_CREATION", "N_ING_SOL", "D_FORECAST", "D_ASIG_Z", "N_PROYECTO", "n_region", "N_NAME","documentador","N_PRIORIDAD", "N_CLARO_DESCRIPTION", "N_PRIORIDAD","PERCENTAGE","PERCENTAGE"];

        //Algoritmo para obtener la consulta de ordenamiento...
        $orderBy = null;
        //Verificamos si viene ordenamiento.
        $orderSQL = $_GET["order"];
        if ($orderSQL) {
            $col = $columns[$orderSQL[0]["column"]];
            $orderBy["col"] = $col;
            $dir = $orderSQL[0]["dir"];
            $orderBy["dir"] = $dir;
        }

        $orderSQL = "";
        $listOrders = ["D_FORECAST" => "desc"];
        if ($orderBy) {
            $listOrders = [];
            //Se agregan los orders adicionales...
            $flag = true;
            foreach ($listOrders as $key => $val) {
                if ($orderBy["col"] == $key) {
                    $flag = false;
                }
            }
            if ($flag) {
                $listOrders[$orderBy["col"]] = $orderBy["dir"];
            }
        }

        //Armamos la sentencia de ordenamiento.
        $i = 0;
        $max = count($listOrders);
        foreach ($listOrders as $key => $value) {
            $orderSQL .= $key . " " . $value;
            $orderSQL .= ($i < ($max - 1)) ? ", " : " ";
            $i++;
        }
        //Fin algoritmo para hacer la consulta de ordenamieto...
        //Se compruba si se está filtrando...
        $typeSQL = isset($_GET['typeSQL']) ? (($_GET["typeSQL"] == "GDATOS") ? "se.N_PROYECTO LIKE '%GDATOS%'" : "se.N_PROYECTO NOT LIKE '%GDATOS%'") : "se.N_PROYECTO NOT LIKE '%GDATOS%'";

        $whereIngeniero = "";

        if ($_SESSION["role"] == 1 || $_SESSION["role"] == 2 || $_SESSION["role"] == 3) {
            $whereIngeniero = " and u.K_IDUSER = " . $_SESSION['id'];
        }

        $SQL_PERCENTAGE = (strpos($orderSQL, "PERCENTAGE") !== false) ? "(count(CASE WHEN se.N_ESTADO != 'Asignada' THEN se.N_ESTADO END) / count(se.K_IDORDER)) * 100 as percentage," : "";

        if ($search) {
            //Se obtienen los registros por límite de x a 10...
            $sqlIni = "select ot.K_IDORDER, ot.D_ASIG_Z, ot.N_PRIORIDAD, $SQL_PERCENTAGE ot.N_DRIVE, ot.D_DATE_CREATION, se.N_ING_SOL, se.D_FORECAST, se.D_DATE_START_P, se.N_PROYECTO, se.n_region, u.N_NAME, u.N_LASTNAME, se.K_ID_DOCUMENTADOR, ud.N_NAME AS documentador , se.N_CLARO_DESCRIPTION, se.D_CLARO_F 
                  from ot inner join specific_service se
                  on ot.K_IDORDER = se.K_IDORDER  
                  inner join user u 
                  on u.K_IDUSER = se.K_IDUSER 
                  LEFT join user ud 
                  ON ud.K_IDUSER = se.K_ID_DOCUMENTADOR 
                  WHERE " . $typeSQL . $whereIngeniero . " AND (ot.K_IDORDER LIKE '%" . $search . "%' 
                  OR ot.N_PRIORIDAD LIKE '%" . $search . "%'                   
                  OR ot.D_ASIG_Z LIKE '%" . $search . "%'                   
                  OR ot.D_DATE_CREATION LIKE '%" . $search . "%' 
                  OR se.N_ING_SOL LIKE '%" . $search . "%' 
                  OR se.D_FORECAST LIKE '%" . $search . "%' 
                  OR se.D_DATE_START_P LIKE '%" . $search . "%' 
                  OR se.N_PROYECTO LIKE '%" . $search . "%' 
                  OR se.n_region LIKE '%" . $search . "%' 
                  OR u.N_NAME LIKE '%" . $search . "%' 
                  OR u.N_LASTNAME LIKE '%" . $search . "%' 
                  OR ud.N_NAME LIKE '%" . $search . "%'
                  OR se.N_CLARO_DESCRIPTION LIKE '%" . $search . "%') group by ot.K_IDORDER order by " . $orderSQL . " ";

            $sql = $sqlIni . " limit " . $start . ", " . $length . ";";
            // echo $sql;
            //Se hace un conteo de las coincidencias filtradas sin ningún límite.
            $q = $this->db->query($sqlIni)->result();
            $count = count($q);

            if ($session != "false") {
                $result = $session->query($sql);
                if ($result->num_rows > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {

                        //CREAMOS EL OBJETO Y LE AÑADIMOS SUS RESPECTIVAS ACTIVIDADES
                        $order = new order_model;
                        $order->createOrder($row['K_IDORDER'], $row['N_NAME'], $row['D_DATE_CREATION']);
                        $order->setLink($row['N_DRIVE']);
                        $order->setPrioridad($row['N_PRIORIDAD']);
                        $order->setD_ASIG_Z($row['D_ASIG_Z']);

                        $sercicios = $this->dao_service_model->getServiceByIdOrder($row['K_IDORDER']);
                        $order->services = $sercicios;
                        $answer[$i] = $order;
                        $i++;
                    }
                }
            }
        } else {
            //Si no se está filtrando se realiza la consulta normalmnete limitada de x a 10...                    
            $sqlIni = "select ot.K_IDORDER, ot.D_ASIG_Z, ot.N_PRIORIDAD, $SQL_PERCENTAGE ot.N_DRIVE, ot.D_DATE_CREATION, se.N_ING_SOL, se.D_FORECAST, se.D_DATE_START_P, se.N_PROYECTO, se.n_region, u.N_NAME, u.N_LASTNAME, se.K_ID_DOCUMENTADOR ,ud.N_NAME AS documentador , se.N_CLARO_DESCRIPTION, se.D_CLARO_F 
                  from ot 
                  inner join specific_service se
                  on ot.K_IDORDER = se.K_IDORDER 
                  inner join user u 
                  on u.K_IDUSER = se.K_IDUSER 
                  LEFT join user ud
                  ON ud.K_IDUSER = se.K_ID_DOCUMENTADOR 
                  WHERE " . $typeSQL . $whereIngeniero . " group by ot.K_IDORDER";

            $sql = $sqlIni . " order by " . $orderSQL . " limit " . $start . ", " . $length . ";";

            // echo $sql;
            $count = count($this->db->query($sqlIni)->result());
            if ($session != "false") {
                $result = $session->query($sql);
                if ($result->num_rows > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        //CREAMOS EL OBJETO Y LE AÑADIMOS SUS RESPECTIVAS ACTIVIDADES
                        $order = new order_model;
                        $order->createOrder($row['K_IDORDER'], $row['N_NAME'], $row['D_DATE_CREATION']);
                        $order->setLink($row['N_DRIVE']);
                        $order->setPrioridad($row['N_PRIORIDAD']);
                        $order->setD_ASIG_Z($row['D_ASIG_Z']);
                 
                        $sercicios = $this->dao_service_model->getServiceByIdOrder($row['K_IDORDER']);
                        $order->services = $sercicios;
                        $answer[$i] = $order;
                        $i++;
                    }
                }
            }
        }

        return [
            "services" => $answer,
            "count" => $count,
            "query" => $this->db->last_query()
        ];
        // }
    }

    public function insertOrder($order) {
        $dbConnection = new configdb_model();
        $session = $dbConnection->openSession();
        $sql = "INSERT INTO ot (K_IDORDER, N_NAME, D_DATE_CREATION, N_PRIORIDAD, D_ASIG_Z)
            values (" . $order->getId() . ", '" . $order->getName() . "', STR_TO_DATE('" . $order->getCreationDate() . "', '%Y-%m-%d'), '".$order->getPrioridad()."', STR_TO_DATE('" . $order->getD_ASIG_Z() . "', '%Y-%m-%d')) ;";
        if ($session != "false") {
            $result = $session->query($sql);
        }
    }

    public function link($link, $orden) {
        $dbConnection = new configdb_model();
        $session = $dbConnection->openSession();
        $sql = "UPDATE ot SET N_DRIVE = '" . $link . "' WHERE K_IDORDER = " . $orden . ";";
        $session->query($sql);
    }

}


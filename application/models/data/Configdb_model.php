<?php

defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);
session_start();

class Configdb_model extends CI_Model {

    public $dbconn4;

    public function __construct() {

    }

    public function startSession($user) {
        $_SESSION['userName'] = $user->getName();
        $_SESSION['id'] = $user->getId();
        $_SESSION['role'] = $user->getRole();
    }

    
    // /**************************servidor del cliente**************************/
    // public function openSession(){
    //   $user = "adminZTE";
    //   $pass =  "a4b3c2d1";
    //   $db = "datafill_ot";
    //   try {
    //     $connection = new mysqli('zte-coldb.cwtksnwikcx3.us-west-2.rds.amazonaws.com', $user, $pass, $db);
    //     $connection->set_charset("utf8");
    //   } catch (Exception $e ) {
    //      $connection = "false";
    //   }
    //   return $connection;
    // }


    /*     * ******************************localhost  ******************************* */

         public function openSession(){
           $user = "root";
           $pass =  "";
           $db = "datafill_ot";

           try {
             $connection = new mysqli('localhost', $user, $pass, $db);
             $connection->set_charset("utf8");
           } catch (Exception $e ) {
              $connection = "false";
           }
           return $connection;
         }


    public function closeSession($session) {
        $session->close();
    }

    public function destroySession() {
        session_destroy();
    }

}

-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: datafill_ot
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ot`
--

DROP TABLE IF EXISTS `ot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ot` (
  `K_IDORDER` varchar(20) NOT NULL,
  `N_NAME` varchar(50) NOT NULL,
  `D_DATE_CREATION` date NOT NULL,
  `N_DRIVE` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`K_IDORDER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ot`
--

LOCK TABLES `ot` WRITE;
/*!40000 ALTER TABLE `ot` DISABLE KEYS */;
INSERT INTO `ot` VALUES ('43097','','2017-09-25',NULL),('43344','','2017-09-29',NULL),('43540','','2017-10-04',NULL),('43636','','2017-10-06',NULL),('43673','','2017-10-09',NULL),('44113','','2017-10-23',NULL),('44222','','2017-10-26',NULL),('44343','','2017-10-31',NULL),('44368','','2017-11-01',NULL),('44436','','2017-11-01','N-A'),('44522','','2017-11-03',''),('44531','','2017-11-03',NULL),('44774','','2017-11-09',''),('44776','','2017-11-10',NULL),('44797','','2017-11-10',NULL),('44831','','2017-11-10',NULL),('44837','','2017-11-11',NULL),('44847','','2017-11-14',NULL),('44880','','2017-11-14',NULL),('44882','','2017-11-14',NULL),('44883','','2017-11-14','N-A'),('44899','','2017-11-14',NULL),('44951','','2017-11-15',NULL),('44978','','2017-11-15',''),('44989','','2017-11-15',''),('45022','','2017-11-16',NULL),('45036','','2017-11-17',NULL),('45087','','2017-11-17',''),('45088','','2017-11-17',''),('45122','','2017-11-20',''),('45162','','2017-11-21',NULL),('45166','','2017-11-21',NULL),('45167','','2017-11-21',NULL),('45168','','2017-11-21',NULL),('45169','','2017-11-21',NULL),('45170','','2017-11-21',NULL),('45171','','2017-11-21',NULL),('45172','','2017-11-21',NULL),('45173','','2017-11-21',NULL),('45174','','2017-11-21',NULL),('45175','','2017-11-21',NULL),('45176','','2017-11-21',NULL),('45177','','2017-11-21',NULL),('45178','','2017-11-21',NULL),('45179','','2017-11-21',NULL),('45180','','2017-11-21',NULL),('45181','','2017-11-21',NULL),('45182','','2017-11-21',NULL),('45184','','2017-11-21',NULL),('45185','','2017-11-21',NULL),('45186','','2017-11-21',NULL),('45199','','2017-11-22',NULL),('45202','','2017-11-22',NULL),('45233','','2017-11-22',NULL),('45234','','2017-11-22',NULL),('45246','','2017-11-22',NULL),('45279','','2017-11-22',NULL),('45315','','2017-11-23',NULL),('45324','','2017-11-23',''),('45326','','2017-11-23',NULL),('45338','','2017-11-24',NULL),('45374','','2017-11-24',NULL),('45409','','2017-11-27',NULL),('45427','','2017-11-27',''),('45447','','2017-11-27',NULL),('45451','','2017-11-27',NULL),('45453','','2017-11-28',NULL),('45454','','2017-11-28',NULL),('45459','','2017-11-28',NULL),('45484','','2017-11-28',''),('45493','','2017-11-29',''),('45495','','2017-11-29',NULL),('45511','','2017-11-29',NULL),('45513','','2017-11-29',''),('45517','','2017-11-29',NULL),('45522','','2017-11-30',NULL),('45524','','2017-11-30',NULL),('45526','','2017-11-30',NULL),('45528','','2017-11-30',NULL),('45529','','2017-11-30',NULL),('45532','','2017-11-30','N-A'),('45533','','2017-11-30',NULL),('45541','','2017-11-30',NULL),('45542','','2017-11-30',NULL),('45545','','2017-11-30',NULL),('45546','','2017-11-30',NULL),('45547','','2017-11-30',NULL),('45548','','2017-11-30',NULL),('45551','','2017-11-30',NULL),('45552','','2017-11-30','N-A'),('45554','','2017-11-30',''),('45558','','2017-12-01',NULL),('45559','','2017-12-01','N-A'),('45560','','2017-12-01',''),('45561','','2017-12-01',NULL),('45562','','2017-12-01','N-A'),('45563','','2017-12-01',''),('45566','','2017-12-01',NULL),('45570','','2017-12-03',NULL),('45571','','2017-12-03',NULL),('45572','','2017-12-03',NULL),('45573','','2017-12-03','N-A'),('45574','','2017-12-03',''),('45575','','2017-12-03',NULL),('45576','','2017-12-03',NULL),('45577','','2017-12-03','N-A'),('45578','','2017-12-03',''),('45579','','2017-12-03',NULL),('45580','','2017-12-03','N-A'),('45581','','2017-12-03',''),('45582','','2017-12-03',''),('45583','','2017-12-03',NULL),('45584','','2017-12-03','N-A'),('45585','','2017-12-03',''),('45586','','2017-12-03',''),('45587','','2017-12-03',NULL),('45588','','2017-12-03','N-A'),('45589','','2017-12-03',''),('45590','','2017-12-03',''),('45591','','2017-12-03',NULL),('45592','','2017-12-04',NULL),('45593','','2017-12-04',''),('45594','','2017-12-04',NULL),('45598','','2017-12-04','N-A'),('45600','','2017-12-04',''),('45601','','2017-12-04',NULL),('45602','','2017-12-04',''),('45603','','2017-12-04',''),('45605','','2017-12-04',NULL),('45619','','2017-12-04','N-A'),('45635','','2017-12-04',NULL),('45639','','2017-12-04',NULL),('45640','','2017-12-04',NULL),('45642','','2017-12-04',NULL),('45647','','2017-12-04',NULL),('45657','','2017-12-04','N-A'),('45658','','2017-12-04',''),('45660','','2017-12-05',NULL),('45663','','2017-12-05',NULL),('45665','','2017-12-05',NULL),('45667','','2017-12-05',''),('45671','','2017-12-05',NULL),('45672','','2017-12-05',NULL),('45673','','2017-12-05',NULL),('45674','','2017-12-05',NULL),('45675','','2017-12-05',NULL),('45677','','2017-12-05',NULL),('45678','','2017-12-05',NULL),('45679','','2017-12-05',NULL),('45680','','2017-12-05',NULL),('45681','','2017-12-05',NULL),('45682','','2017-12-05',NULL),('45685','','2017-12-05',NULL),('45686','','2017-12-05',NULL),('45687','','2017-12-05','N-A'),('45688','','2017-12-05',''),('45690','','2017-12-05',NULL),('45691','','2017-12-05',NULL),('45692','','2017-12-05',NULL),('45694','','2017-12-05',NULL),('45695','','2017-12-05',''),('45704','','2017-12-05',''),('45710','','2017-12-05',NULL),('45711','','2017-12-05',''),('45713','','2017-12-05',NULL),('45716','','2017-12-05',''),('45717','','2017-12-05',NULL),('45718','','2017-12-06',NULL),('45720','','2017-12-06',NULL),('45721','','2017-12-06','N-A'),('45722','','2017-12-06','N-A'),('45723','','2017-12-06',NULL),('45724','','2017-12-06',''),('45725','','2017-12-06',''),('45726','','2017-12-06',NULL),('45727','','2017-12-06','N-A'),('45729','','2017-12-06','N-A'),('45730','','2017-12-06',NULL),('45731','','2017-12-06',''),('45732','','2017-12-06','N-A'),('45739','','2017-12-06',''),('45741','','2017-12-06',NULL),('45746','','2017-12-06',''),('45747','','2017-12-06',NULL),('45748','','2017-12-06',NULL),('45749','','2017-12-06',''),('45803','','2017-12-06','N-A'),('45804','','2017-12-06',''),('45810','','2017-12-07',NULL),('45811','','2017-12-07',NULL),('45812','','2017-12-07','N-A'),('45813','','2017-12-07',NULL),('45815','','2017-12-07',NULL),('45817','','2017-12-07',NULL),('45820','','2017-12-07',NULL),('45831','','2017-12-07',''),('45833','','2017-12-07',''),('45863','','2017-12-11',''),('45869','','2017-12-11',''),('45870','','2017-12-11',''),('45881','','2017-12-11',NULL),('45888','','2017-12-11',NULL),('45889','','2017-12-11',NULL),('45895','','2017-12-11',NULL),('45904','','2017-12-11',''),('45905','','2017-12-11',''),('45906','','2017-12-11',''),('45907','','2017-12-11',''),('45909','','2017-12-12',NULL),('45913','','2017-12-12',NULL),('45934','','2017-12-12',''),('45936','','2017-12-12',''),('45937','','2017-12-12',NULL),('45941','','2017-12-12','N-A'),('45947','','2017-12-12','N-A'),('45948','','2017-12-12',NULL),('45949','','2017-12-12','N-A'),('45950','','2017-12-12',''),('45953','','2017-12-12',NULL),('45954','','2017-12-12',NULL),('45955','','2017-12-12',NULL),('45956','','2017-12-12',NULL),('45957','','2017-12-12',NULL),('45960','','2017-12-12',NULL),('45964','','2017-12-12',NULL),('45978','','2017-12-12',NULL),('45979','','2017-12-12','N-A'),('45982','','2017-12-12',''),('45984','','2017-12-13',NULL),('45985','','2017-12-13',NULL),('45986','','2017-12-13',NULL),('45987','','2017-12-13',NULL),('45988','','2017-12-13',NULL),('45989','','2017-12-13',NULL),('45991','','2017-12-13',NULL),('45992','','2017-12-13',NULL),('45993','','2017-12-13',NULL),('45994','','2017-12-13',NULL),('45998','','2017-12-13',NULL),('45999','','2017-12-13',NULL),('46000','','2017-12-13',''),('46001','','2017-12-13',NULL),('46002','','2017-12-13',NULL),('46004','','2017-12-13',NULL),('46005','','2017-12-13',NULL),('46006','','2017-12-13',NULL),('46007','','2017-12-13',NULL),('46008','','2017-12-13',NULL),('46009','','2017-12-13',''),('46010','','2017-12-13',NULL),('46011','','2017-12-13',NULL),('46012','','2017-12-13',NULL),('46013','','2017-12-13',NULL),('46014','','2017-12-13',NULL),('46015','','2017-12-13',NULL),('46016','','2017-12-13',''),('46017','','2017-12-13',''),('46018','','2017-12-13',NULL),('46019','','2017-12-13',NULL),('46020','','2017-12-13',NULL),('46021','','2017-12-13',''),('46023','','2017-12-13','N-A'),('46025','','2017-12-13',NULL),('46027','','2017-12-13',NULL),('46028','','2017-12-13',NULL),('46030','','2017-12-13',NULL),('46032','','2017-12-13',NULL),('46033','','2017-12-13',NULL),('46037','','2017-12-13',''),('46046','','2017-12-13','N-A'),('46047','','2017-12-13','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46049','','2017-12-13',NULL),('46050','','2017-12-13',NULL),('46052','','2017-12-14',NULL),('46053','','2017-12-14',NULL),('46054','','2017-12-14',NULL),('46055','','2017-12-14',NULL),('46056','','2017-12-14',NULL),('46057','','2017-12-14',NULL),('46058','','2017-12-14',NULL),('46059','','2017-12-14',NULL),('46061','','2017-12-14',NULL),('46063','','2017-12-14','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46064','','2017-12-14',NULL),('46065','','2017-12-14',NULL),('46066','','2017-12-14',NULL),('46067','','2017-12-14',NULL),('46068','','2017-12-14',NULL),('46069','','2017-12-14',NULL),('46070','','2017-12-14',NULL),('46076','','2017-12-14',NULL),('46077','','2017-12-14',NULL),('46078','','2017-12-14',''),('46079','','2017-12-14',NULL),('46081','','2017-12-14',''),('46082','','2017-12-14',''),('46085','','2017-12-14',NULL),('46086','','2017-12-14',''),('46087','','2017-12-14',NULL),('46088','','2017-12-14',NULL),('46089','','2017-12-14',''),('46092','','2017-12-15',''),('46100','','2017-12-15',NULL),('46104','','2017-12-15',NULL),('46108','','2017-12-15',NULL),('46109','','2017-12-15',''),('46110','','2017-12-15','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46111','','2017-12-15','N-A'),('46112','','2017-12-15',''),('46113','','2017-12-15',''),('46114','','2017-12-15',NULL),('46116','','2017-12-15',NULL),('46117','','2017-12-15',''),('46122','','2017-12-18',NULL),('46125','','2017-12-18','N-A'),('46126','','2017-12-18',NULL),('46127','','2017-12-18',NULL),('46128','','2017-12-18',''),('46131','','2017-12-18','N-A'),('46134','','2017-12-18','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46136','','2017-12-18','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46140','','2017-12-18','N-A'),('46142','','2017-12-18',NULL),('46143','','2017-12-18',NULL),('46147','','2017-12-18',''),('46149','','2017-12-18','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46156','','2017-12-18','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46157','','2017-12-18',NULL),('46158','','2017-12-18','N-A'),('46159','','2017-12-18',''),('46160','','2017-12-18',NULL),('46162','','2017-12-18',NULL),('46165','','2017-12-18',''),('46170','','2017-12-18','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46172','','2017-12-18',''),('46175','','2017-12-18',NULL),('46180','','2017-12-18',NULL),('46181','','2017-12-18',NULL),('46182','','2017-12-18',NULL),('46183','','2017-12-18',NULL),('46184','','2017-12-18',NULL),('46185','','2017-12-18',NULL),('46186','','2017-12-18',NULL),('46188','','2017-12-19','N-A'),('46189','','2017-12-19',''),('46190','','2017-12-19',NULL),('46191','','2017-12-19',NULL),('46193','','2017-12-19','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46194','','2017-12-19','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46195','','2017-12-19','N-A'),('46196','','2017-12-19',''),('46202','','2017-12-19',''),('46204','','2017-12-19',NULL),('46205','','2017-12-19',''),('46206','','2017-12-19',''),('46208','','2017-12-19',NULL),('46209','','2017-12-19',NULL),('46210','','2017-12-19',NULL),('46211','','2017-12-19',NULL),('46212','','2017-12-19',''),('46213','','2017-12-19',NULL),('46214','','2017-12-19','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46215','','2017-12-19',NULL),('46218','','2017-12-19',NULL),('46219','','2017-12-19',NULL),('46220','','2017-12-19',NULL),('46221','','2017-12-19','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46222','','2017-12-19',NULL),('46223','','2017-12-19',NULL),('46224','','2017-12-19','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46225','','2017-12-19',NULL),('46226','','2017-12-19',NULL),('46227','','2017-12-19',''),('46228','','2017-12-19',NULL),('46229','','2017-12-19',NULL),('46230','','2017-12-19',NULL),('46231','','2017-12-19','N-A'),('46232','','2017-12-19',NULL),('46233','','2017-12-19',''),('46235','','2017-12-19',NULL),('46236','','2017-12-19',NULL),('46237','','2017-12-19',NULL),('46238','','2017-12-19',NULL),('46239','','2017-12-19',''),('46240','','2017-12-19',NULL),('46241','','2017-12-19',''),('46242','','2017-12-19',NULL),('46243','','2017-12-19',NULL),('46244','','2017-12-19',NULL),('46246','','2017-12-19',NULL),('46247','','2017-12-19','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46251','','2017-12-20','N-A'),('46252','','2017-12-20',''),('46260','','2017-12-20',NULL),('46264','','2017-12-20',NULL),('46268','','2017-12-20',NULL),('46273','','2017-12-20',NULL),('46304','','2017-12-20',''),('46308','','2017-12-20',NULL),('46319','','2017-12-20',NULL),('46323','','2017-12-20',NULL),('46338','','2017-12-21','N-A'),('46347','','2017-12-21',NULL),('46351','','2017-12-21',NULL),('46355','','2017-12-21',NULL),('46359','','2017-12-21',NULL),('46361','','2017-12-21',NULL),('46363','','2017-12-21',NULL),('46365','','2017-12-21',NULL),('46366','','2017-12-21',NULL),('46367','','2017-12-21',NULL),('46368','','2017-12-21',NULL),('46369','','2017-12-21',NULL),('46370','','2017-12-21',NULL),('46372','','2017-12-21',NULL),('46373','','2017-12-21',NULL),('46374','','2017-12-21',NULL),('46375','','2017-12-21',NULL),('46376','','2017-12-21',NULL),('46377','','2017-12-21',NULL),('46378','','2017-12-21',NULL),('46379','','2017-12-21',NULL),('46380','','2017-12-21','D:Formatos PNSMJ 2015datfil cesar 18-06-2015DATA FILE TIPO-1'),('46383','','2017-12-21',NULL),('46385','','2017-12-21',NULL),('46387','','2017-12-21',NULL),('46388','','2017-12-21',''),('46389','','2017-12-21',''),('46390','','2017-12-21',NULL),('46417','','2017-12-22',NULL),('46423','','2017-12-22',''),('46445','','2017-12-22',''),('46466','','2017-12-26',NULL),('46474','','2017-12-26',''),('46482','','2017-12-26',NULL),('46483','','2017-12-26',NULL),('46484','','2017-12-26',NULL),('46485','','2017-12-26',NULL),('46491','','2017-12-27',''),('46496','','2017-12-27',''),('46503','','2017-12-27','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46508','','2017-12-27',NULL),('46510','','2017-12-27',NULL),('46511','','2017-12-27',''),('46512','','2017-12-27',''),('46517','','2017-12-27',NULL),('46524','','2017-12-27',NULL),('46526','','2017-12-28','N-A'),('46532','','2017-12-28',''),('46538','','2017-12-28',NULL),('46539','','2017-12-28',NULL),('46542','','2017-12-28',NULL),('46543','','2017-12-28',NULL),('46545','','2017-12-28',NULL),('46547','','2017-12-28',NULL),('46549','','2017-12-28',NULL),('46562','','2017-12-29',NULL),('46563','','2017-12-29',NULL),('46568','','2017-12-29',NULL),('46570','','2017-12-29',NULL),('46571','','2017-12-29',NULL),('46572','','2017-12-29',''),('46573','','2017-12-29',''),('46575','','2018-01-02',''),('46577','','2018-01-02','D:Formatos PNSMJ 2015datfil cesar 18-06-2015DATAFILL NEC MAPAS'),('46578','','2018-01-02','D:Formatos PNSMJ 2015datfil cesar 18-06-2015DATAFILL NEC MAPAS'),('46580','','2018-01-02','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46581','','2018-01-02','N-A'),('46582','','2018-01-02','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46584','','2018-01-03','https://190.143.109.17/maximo/ui/?event=loadapp&value=change&uniqueid=47887&uisessionid=4163&csrftoken=lo0gsae2utgtkpf4us1vggu2f1'),('46585','','2018-01-03',''),('46587','','2018-01-03',NULL),('46648','','2018-01-03',NULL),('46650','','2018-01-03','N-A'),('46655','','2018-01-03',''),('46656','','2018-01-03',''),('46676','','2018-01-03',NULL),('46678','','2018-01-03',NULL),('46689','','2018-01-04',''),('46691','','2018-01-04','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte Correos'),('46692','','2018-01-04',NULL),('46694','','2018-01-04',''),('46695','','2018-01-04','N-A'),('46699','','2018-01-05',NULL),('46700','','2018-01-05',NULL),('46701','','2018-01-05',''),('46702','','2018-01-05',NULL),('46709','','2018-01-09','D:Formatos PNSMJ 2015datfil cesar 18-06-2015Soporte CorreosRE  Notificación de asignación de orden de servicio  Orden 46709  Proyecto Gestion Red.msg'),('46756','','2018-01-10',''),('46757','','2018-01-10',''),('46765','','2018-01-10',''),('46766','','2018-01-10',''),('46770','','2018-01-10',NULL),('46771','','2018-01-10',NULL),('46772','','2018-01-10',NULL),('46773','','2018-01-10',NULL),('46774','','2018-01-10',NULL),('46775','','2018-01-10',''),('46776','','2018-01-10',''),('46777','','2018-01-11',NULL),('46778','','2018-01-11',NULL),('46779','','2018-01-11',NULL),('46781','','2018-01-11','D:Formatos PNSMJ 2015datfil cesar 18-06-2015PROYECTO VIABILIDADES-2017'),('46782','','2018-01-11',''),('46786','','2018-01-11','N-A'),('46787','','2018-01-11',NULL),('46788','','2018-01-11',''),('46789','','2018-01-11','N-A'),('46802','','2018-01-11',''),('46803','','2018-01-11',NULL),('46805','','2018-01-11',NULL),('46810','','2018-01-12','D:Formatos PNSMJ 2015datfil cesar 18-06-2015PROYECTO VIABILIDADES-2017'),('46813','','2018-01-12',''),('46816','','2018-01-12',''),('46817','','2018-01-12',NULL),('46818','','2018-01-12',NULL),('46822','','2018-01-12',''),('46825','','2018-01-12',NULL),('46827','','2018-01-15',''),('46830','','2018-01-15',NULL),('46831','','2018-01-15',''),('46836','','2018-01-15',NULL),('46838','','2018-01-15',NULL),('46839','','2018-01-15',NULL),('46840','','2018-01-15',''),('46842','','2018-01-15',''),('46845','','2018-01-15',NULL),('46846','','2018-01-15',NULL),('46847','','2018-01-15',''),('46848','','2018-01-15',NULL),('46849','','2018-01-15',NULL),('46850','','2018-01-15',NULL),('46851','','2018-01-15',NULL),('46852','','2018-01-15',NULL),('46853','','2018-01-15',NULL),('46854','','2018-01-15',NULL),('46855','','2018-01-15',NULL),('46856','','2018-01-15',NULL),('46857','','2018-01-15',NULL),('46858','','2018-01-15',NULL),('46861','','2018-01-15',''),('46865','','2018-01-15',NULL),('46869','','2018-01-16',NULL),('46870','','2018-01-16',NULL),('46871','','2018-01-16',NULL),('46872','','2018-01-16',NULL),('46876','','2018-01-16',NULL),('46878','','2018-01-16',''),('46879','','2018-01-16','N-A'),('46882','','2018-01-16',NULL),('46888','','2018-01-16',NULL),('46889','','2018-01-16',NULL),('46892','','2018-01-16','D:Formatos PNSMJ 2015datfil cesar 18-06-2015PROYECTO VIABILIDADES-2017'),('46896','','2018-01-16',NULL),('46897','','2018-01-16',NULL),('46898','','2018-01-16',NULL),('46899','','2018-01-16','N-A'),('46900','','2018-01-16','N-A'),('46901','','2018-01-16',NULL),('46903','','2018-01-16',NULL),('46906','','2018-01-16','D:Formatos PNSMJ 2015datfil cesar 18-06-2015PROYECTO VIABILIDADES-2017'),('46907','','2018-01-16',NULL),('46910','','2018-01-16',''),('46911','','2018-01-16',NULL),('46912','','2018-01-16',''),('46913','','2018-01-16',NULL),('46915','','2018-01-16','N-A'),('46916','','2018-01-16',''),('46917','','2018-01-16',NULL),('46921','','2018-01-16','N-A'),('46924','','2018-01-17',NULL),('46925','','2018-01-17',NULL),('46927','','2018-01-17','D:Formatos PNSMJ 2015datfil cesar 18-06-2015PROYECTO VIABILIDADES-2017'),('46930','','2018-01-17',NULL),('46931','','2018-01-17',NULL),('46932','','2018-01-17',NULL),('46933','','2018-01-17',NULL),('46934','','2018-01-17',NULL),('46936','','2018-01-17','N-A'),('46937','','2018-01-17',NULL),('46940','','2018-01-17','N-A'),('46945','','2018-01-17',''),('46946','','2018-01-17',NULL),('46950','','2018-01-18',NULL),('46951','','2018-01-18',NULL),('46952','','2018-01-18',NULL),('46954','','2018-01-18',''),('46955','','2018-01-18','N-A'),('46957','','2018-01-18',NULL),('46960','','2018-01-18',''),('46962','','2018-01-18',NULL),('46963','','2018-01-18',NULL),('46964','','2018-01-18',NULL),('46967','','2018-01-18',NULL),('46968','','2018-01-18',NULL),('46969','','2018-01-18',NULL),('46970','','2018-01-18',NULL),('46972','','2018-01-18',NULL),('46973','','2018-01-18',NULL),('46974','','2018-01-18',NULL),('46975','','2018-01-18',NULL),('46976','','2018-01-18',NULL),('46977','','2018-01-18',NULL),('46978','','2018-01-18',NULL),('46981','','2018-01-18','N-A'),('46982','','2018-01-18',NULL),('46983','','2018-01-18',NULL),('46984','','2018-01-18',NULL),('46985','','2018-01-19',NULL),('46986','','2018-01-19',NULL),('46987','','2018-01-19',''),('46988','','2018-01-19','N-A'),('46989','','2018-01-19','N-A'),('46991','','2018-01-19','N-A'),('46992','','2018-01-19',NULL),('46993','','2018-01-19',''),('46994','','2018-01-19','N-A'),('46996','','2018-01-19',''),('46998','','2018-01-19','N-A'),('47010','','2018-01-19',NULL),('47011','','2018-01-19',NULL),('47013','','2018-01-19',NULL),('47015','','2018-01-19',NULL),('47016','','2018-01-19',NULL),('47017','','2018-01-19',NULL),('47021','','2018-01-19',NULL),('47023','','2018-01-19','N-A'),('47024','','2018-01-19',NULL),('47025','','2018-01-19',''),('47030','','2018-01-19',NULL),('47031','','2018-01-19',NULL),('47032','','2018-01-19',''),('47033','','2018-01-19','N-A'),('47034','','2018-01-19',NULL),('47035','','2018-01-19','N-A'),('47037','','2018-01-22',''),('47047','','2018-01-22',NULL),('47048','','2018-01-22',NULL),('47052','','2018-01-22',NULL),('47054','','2018-01-22',NULL),('47055','','2018-01-22',NULL),('47056','','2018-01-22',NULL),('47057','','2018-01-22',NULL),('47058','','2018-01-22',NULL),('47065','','2018-01-22',NULL),('47074','','2018-01-22',NULL),('47087','','2018-01-22',NULL),('47088','','2018-01-22',NULL),('47090','','2018-01-22',NULL),('47091','','2018-01-22',NULL),('47099','','2018-01-22',''),('47112','','2018-01-22',NULL),('47113','','2018-01-22','N-A'),('47118','','2018-01-22','N-A'),('47119','','2018-01-22',''),('47120','','2018-01-22','N-A'),('47122','','2018-01-23',NULL),('47123','','2018-01-23',NULL),('47125','','2018-01-23',NULL),('47127','','2018-01-23',''),('47129','','2018-01-23',NULL),('47130','','2018-01-23',NULL),('47131','','2018-01-23',NULL),('47134','','2018-01-23',NULL),('47136','','2018-01-23',''),('47141','','2018-01-23',''),('47144','','2018-01-23',''),('47148','','2018-01-23',NULL),('47149','','2018-01-23',NULL),('47150','','2018-01-23','N-A'),('47152','','2018-01-23',NULL),('47155','','2018-01-24',NULL),('47159','','2018-01-24',NULL),('47160','','2018-01-24','N-A'),('47162','','2018-01-24',NULL),('47165','','2018-01-24',''),('47183','','2018-01-24',NULL),('47184','','2018-01-24',''),('47185','','2018-01-24',NULL),('47186','','2018-01-24',NULL),('47190','','2018-01-24',NULL),('47194','','2018-01-24',NULL),('47196','','2018-01-24',''),('47197','','2018-01-25',NULL),('47198','','2018-01-25',NULL),('47200','','2018-01-25',NULL),('47201','','2018-01-25',NULL),('47202','','2018-01-25',NULL),('47209','','2018-01-25',''),('47212','','2018-01-25',NULL),('47214','','2018-01-25',''),('47216','','2018-01-25',''),('47217','','2018-01-25',NULL),('47220','','2018-01-25',NULL),('47221','','2018-01-25',NULL),('47240','','2018-01-25',''),('47255','','2018-01-26',NULL),('47256','','2018-01-26',NULL),('47258','','2018-01-26',NULL),('47260','','2018-01-26',NULL),('47261','','2018-01-26',NULL),('47262','','2018-01-26',NULL),('47263','','2018-01-26',NULL),('47264','','2018-01-26',NULL),('47266','','2018-01-26',NULL),('47267','','2018-01-26',NULL),('47268','','2018-01-26',NULL),('47269','','2018-01-26',NULL),('47270','','2018-01-26',NULL),('47271','','2018-01-26',NULL),('47272','','2018-01-26',NULL),('47273','','2018-01-26',NULL),('47277','','2018-01-26',''),('47279','','2018-01-26',NULL),('47280','','2018-01-26',NULL),('47282','','2018-01-26',NULL),('47284','','2018-01-26',NULL),('47286','','2018-01-26',NULL),('47288','','2018-01-26',NULL),('47290','','2018-01-26',''),('47291','','2018-01-26',''),('47293','','2018-01-26',NULL),('47297','','2018-01-26',''),('47300','','2018-01-26',''),('47301','','2018-01-26',NULL),('47304','','2018-01-26','N-A'),('47305','','2018-01-26',''),('47306','','2018-01-26',NULL),('47307','','2018-01-26',NULL),('47308','','2018-01-26',NULL),('47309','','2018-01-26',''),('47310','','2018-01-26',NULL),('47311','','2018-01-26','N-A'),('47312','','2018-01-26',NULL),('47313','','2018-01-26',NULL),('47314','','2018-01-26',''),('47315','','2018-01-26','N-A'),('47316','','2018-01-26',''),('47317','','2018-01-26',''),('47318','','2018-01-26','N-A'),('47319','','2018-01-26',''),('47320','','2018-01-26',NULL),('47321','','2018-01-26',''),('47322','','2018-01-26',NULL),('47323','','2018-01-26',NULL),('47324','','2018-01-26',NULL),('47325','','2018-01-26',NULL),('47327','','2018-01-29',NULL),('47329','','2018-01-29',''),('47334','','2018-01-29',NULL),('47348','','2018-01-29','N-A'),('47349','','2018-01-29',NULL),('47350','','2018-01-29',NULL),('47354','','2018-01-29',NULL),('47357','','2018-01-29',NULL),('47358','','2018-01-29',''),('47367','','2018-01-29',NULL),('47368','','2018-01-29',NULL),('47374','','2018-01-29',NULL),('47375','','2018-01-29',NULL),('47376','','2018-01-29',NULL),('47377','','2018-01-29',NULL),('47379','','2018-01-29',NULL),('47380','','2018-01-29',''),('47381','','2018-01-29',NULL),('47382','','2018-01-29',NULL),('47383','','2018-01-29',NULL),('47384','','2018-01-29',NULL),('47385','','2018-01-29',NULL),('47386','','2018-01-29',NULL),('47387','','2018-01-29',NULL),('47388','','2018-01-29',NULL),('47389','','2018-01-29',NULL),('47392','','2018-01-29',''),('47394','','2018-01-29',''),('47397','','2018-01-29',NULL),('47402','','2018-01-30',NULL),('47403','','2018-01-30',NULL),('47404','','2018-01-30',NULL),('47406','','2018-01-30',NULL),('47421','','2018-01-30',NULL),('47423','','2018-01-30',NULL),('47424','','2018-01-30',NULL),('47425','','2018-01-30',NULL),('47427','','2018-01-30',NULL),('47428','','2018-01-30',NULL),('47429','','2018-01-30',NULL),('47430','','2018-01-30',NULL),('47431','','2018-01-30',NULL),('47432','','2018-01-30',NULL),('47433','','2018-01-30',NULL),('47435','','2018-01-30',NULL),('47436','','2018-01-30',NULL),('47437','','2018-01-30',NULL),('47439','','2018-01-30',NULL),('47440','','2018-01-30',NULL),('47441','','2018-01-30',NULL),('47444','','2018-01-30',NULL),('47445','','2018-01-30',NULL),('47446','','2018-01-30',NULL),('47447','','2018-01-30',NULL),('47448','','2018-01-30',NULL),('47449','','2018-01-30',NULL),('47450','','2018-01-30',NULL),('47451','','2018-01-30',NULL),('47452','','2018-01-30',NULL),('47453','','2018-01-30',NULL),('47454','','2018-01-30',NULL),('47455','','2018-01-30',NULL),('47456','','2018-01-30',NULL),('47457','','2018-01-30',NULL),('47458','','2018-01-30',''),('47459','','2018-01-30',NULL),('47460','','2018-01-30',NULL),('47461','','2018-01-30',NULL),('47462','','2018-01-30',NULL),('47463','','2018-01-30',NULL),('47464','','2018-01-30',NULL),('47465','','2018-01-30',NULL),('47466','','2018-01-30',NULL),('47467','','2018-01-30',NULL),('47468','','2018-01-30',NULL),('47469','','2018-01-30',NULL),('47470','','2018-01-30',NULL),('47471','','2018-01-30',NULL),('47472','','2018-01-30',NULL),('47474','','2018-01-30',''),('47475','','2018-01-30','N-A'),('47477','','2018-01-30',NULL),('47478','','2018-01-30',NULL),('47479','','2018-01-30',NULL),('47480','','2018-01-30',NULL),('47483','','2018-01-30',NULL),('47484','','2018-01-30',NULL),('47485','','2018-01-30',NULL),('47486','','2018-01-30',NULL),('47487','','2018-01-30',NULL),('47488','','2018-01-30',NULL),('47490','','2018-01-30',NULL),('47492','','2018-01-30',NULL),('47493','','2018-01-30',NULL),('47494','','2018-01-30',NULL),('47495','','2018-01-30',NULL),('47496','','2018-01-30',NULL),('47497','','2018-01-30',NULL),('47498','','2018-01-30',NULL),('47499','','2018-01-30',NULL),('47500','','2018-01-30',NULL),('47501','','2018-01-30',NULL),('47502','','2018-01-30',NULL),('47504','','2018-01-30',NULL),('47505','','2018-01-30',NULL),('47506','','2018-01-30',NULL),('47507','','2018-01-30',NULL),('47510','','2018-01-30',NULL),('47511','','2018-01-30',''),('47512','','2018-01-30',NULL),('47513','','2018-01-30',NULL),('47514','','2018-01-30',NULL),('47515','','2018-01-30',NULL),('47516','','2018-01-30',NULL),('47517','','2018-01-30',NULL),('47518','','2018-01-30',NULL),('47519','','2018-01-30',NULL),('47520','','2018-01-30',NULL),('47521','','2018-01-30',NULL),('47522','','2018-01-30',NULL),('47525','','2018-01-31',''),('47527','','2018-01-31',NULL),('47528','','2018-01-31',NULL),('47530','','2018-01-31',NULL),('47531','','2018-01-31',NULL),('47532','','2018-01-31','N-A'),('47533','','2018-01-31',''),('47534','','2018-01-31',NULL),('47537','','2018-01-31',''),('47544','','2018-01-31',NULL),('47545','','2018-01-31',NULL),('47546','','2018-01-31',NULL),('47548','','2018-02-01',NULL),('47551','','2018-02-01',NULL),('47557','','2018-02-01',NULL),('47559','','2018-02-01','N-A'),('47560','','2018-02-01',NULL),('47563','','2018-02-01',NULL),('47565','','2018-02-01',NULL),('47567','','2018-02-01',NULL),('47569','','2018-02-01',''),('47570','','2018-02-01','N-A'),('47571','','2018-02-01',NULL),('47572','','2018-02-01',NULL),('47573','','2018-02-01','N-A'),('47574','','2018-02-01',NULL),('47575','','2018-02-01',''),('47576','','2018-02-01',NULL),('47577','','2018-02-01',NULL),('47578','','2018-02-01',NULL),('47580','','2018-02-01',NULL),('47581','','2018-02-01',NULL),('47582','','2018-02-01',''),('47583','','2018-02-01',''),('47585','','2018-02-01',NULL),('47590','','2018-02-01',NULL),('47591','','2018-02-01',NULL),('47592','','2018-02-01',NULL),('47595','','2018-02-01',NULL),('47596','','2018-02-01',NULL),('47597','','2018-02-02',NULL),('47598','','2018-02-02',NULL),('47600','','2018-02-02',NULL),('47601','','2018-02-02',''),('47603','','2018-02-02',''),('47605','','2018-02-02',NULL),('47608','','2018-02-02',''),('47609','','2018-02-02',''),('47610','','2018-02-02',NULL),('47613','','2018-02-02',NULL),('47616','','2018-02-02',''),('47668','','2018-02-02',NULL),('47670','','2018-02-02',''),('47674','','2018-02-02',NULL),('47675','','2018-02-02',NULL),('47676','','2018-02-02','N-A'),('47677','','2018-02-02',NULL),('47678','','2018-02-02',''),('47679','','2018-02-02','N-A'),('47680','','2018-02-02',''),('47681','','2018-02-02','N-A'),('47682','','2018-02-02',NULL),('47683','','2018-02-02',''),('47684','','2018-02-02',NULL),('47685','','2018-02-02',NULL),('47686','','2018-02-02','N-A'),('47687','','2018-02-05',NULL),('47688','','2018-02-05',NULL),('47689','','2018-02-05',NULL),('47690','','2018-02-05',NULL),('47691','','2018-02-05',NULL),('47692','','2018-02-05',NULL),('47693','','2018-02-05',NULL),('47694','','2018-02-05',NULL),('47698','','2018-02-05',NULL),('47700','','2018-02-05',NULL),('47701','','2018-02-05',NULL),('47702','','2018-02-05',NULL),('47703','','2018-02-05',NULL),('47704','','2018-02-05',NULL),('47705','','2018-02-05',''),('47706','','2018-02-05',NULL),('47707','','2018-02-05',NULL),('47708','','2018-02-05',NULL),('47712','','2018-02-05',NULL),('47713','','2018-02-05',NULL),('47715','','2018-02-05',NULL),('47717','','2018-02-05',NULL),('47719','','2018-02-05',NULL),('47720','','2018-02-05',NULL),('47721','','2018-02-05',''),('47740','','2018-02-05',''),('47777','','2018-02-05',NULL),('47778','','2018-02-06',NULL),('47779','','2018-02-06',NULL),('47782','','2018-02-06',NULL),('47783','','2018-02-06',NULL),('47788','','2018-02-06',NULL),('47791','','2018-02-06',NULL),('47792','','2018-02-06',NULL),('47794','','2018-02-06',NULL),('47795','','2018-02-06',NULL),('47796','','2018-02-06',''),('47801','','2018-02-06',NULL),('47804','','2018-02-06',NULL),('47805','','2018-02-06',NULL),('47806','','2018-02-06',NULL),('47807','','2018-02-06',NULL),('47808','','2018-02-06',NULL),('47809','','2018-02-06',NULL),('47811','','2018-02-06',NULL),('47812','','2018-02-06',NULL),('47813','','2018-02-06',NULL),('47818','','2018-02-06',NULL),('47819','','2018-02-06',NULL),('47824','','2018-02-07',NULL),('47828','','2018-02-07',NULL),('47833','','2018-02-07',NULL),('47834','','2018-02-07',NULL),('47835','','2018-02-07',NULL),('47837','','2018-02-07',NULL),('47838','','2018-02-07',NULL),('47839','','2018-02-07',NULL),('47840','','2018-02-07',NULL),('47841','','2018-02-07',NULL),('47845','','2018-02-07',NULL),('47846','','2018-02-07',NULL),('47847','','2018-02-07',NULL),('47848','','2018-02-07',NULL),('47849','','2018-02-07',NULL),('47859','','2018-02-07',NULL),('47861','','2018-02-07',NULL),('47862','','2018-02-07','N-A'),('47863','','2018-02-07',NULL),('47866','','2018-02-07',NULL),('47867','','2018-02-07',NULL),('47869','','2018-02-08',NULL),('47878','','2018-02-08',''),('47881','','2018-02-08',NULL),('47882','','2018-02-08',NULL),('47885','','2018-02-08',NULL),('47893','','2018-02-08',''),('47896','','2018-02-08',NULL),('47897','','2018-02-08','N-A'),('47898','','2018-02-08',NULL),('47899','','2018-02-08','N-A'),('47903','','2018-02-08',NULL),('47906','','2018-02-09',''),('47909','','2018-02-09',NULL),('47916','','2018-02-09','N-A'),('47917','','2018-02-09',NULL),('47919','','2018-02-09',NULL),('47920','','2018-02-09',NULL),('47921','','2018-02-09',NULL),('47924','','2018-02-09',NULL),('47925','','2018-02-09',NULL),('47926','','2018-02-09',NULL),('47927','','2018-02-09','N-A'),('47928','','2018-02-09',NULL),('47929','','2018-02-09',NULL),('47930','','2018-02-09','N-A'),('47931','','2018-02-09',NULL),('47932','','2018-02-09',NULL),('47933','','2018-02-09',NULL),('47939','','2018-02-12',''),('47940','','2018-02-12',NULL),('47943','','2018-02-12',''),('47945','','2018-02-12',NULL),('47946','','2018-02-12','N-A'),('47948','','2018-02-12',NULL),('47949','','2018-02-12',''),('47950','','2018-02-12',NULL),('47952','','2018-02-12','N-A'),('47955','','2018-02-12',NULL),('47956','','2018-02-12',NULL),('47957','','2018-02-12',NULL),('47958','','2018-02-12',NULL),('47959','','2018-02-12',NULL),('47960','','2018-02-12',NULL),('47961','','2018-02-12',''),('47962','','2018-02-12',NULL),('47963','','2018-02-12',NULL),('47964','','2018-02-12',NULL),('47965','','2018-02-12',NULL),('47973','','2018-02-12',NULL),('47977','','2018-02-12',''),('47991','','2018-02-13',NULL),('47994','','2018-02-13',NULL),('47995','','2018-02-13',NULL),('48000','','2018-02-13',''),('48003','','2018-02-13','N-A'),('48024','','2018-02-14',NULL),('48028','','2018-02-14',NULL),('48029','','2018-02-14',''),('48031','','2018-02-14',NULL),('48033','','2018-02-14',NULL),('48034','','2018-02-14',NULL),('48039','','2018-02-14',NULL),('48041','','2018-02-14',NULL),('48043','','2018-02-14',NULL),('48045','','2018-02-14',NULL),('48047','','2018-02-14',NULL),('48049','','2018-02-14',NULL),('48053','','2018-02-15',NULL),('48055','','2018-02-15',NULL),('48058','','2018-02-15',NULL),('48067','','2018-02-15',NULL),('48068','','2018-02-15',NULL),('48069','','2018-02-15',NULL),('48072','','2018-02-15',NULL),('48083','','2018-02-15',NULL),('48088','','2018-02-16',NULL),('48089','','2018-02-16',NULL),('48092','','2018-02-16',NULL),('48098','','2018-02-16',NULL),('48100','','2018-02-16',NULL),('48101','','2018-02-16',NULL),('48104','','2018-02-16',NULL),('48108','','2018-02-16',NULL),('48110','','2018-02-16',NULL),('48115','','2018-02-16',NULL),('48127','','2018-02-19','N-A'),('48129','','2018-02-19',NULL),('48132','','2018-02-19',NULL),('48133','','2018-02-19',NULL),('48136','','2018-02-19',NULL),('48137','','2018-02-19',NULL),('48141','','2018-02-19',NULL);
/*!40000 ALTER TABLE `ot` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-22 11:10:06
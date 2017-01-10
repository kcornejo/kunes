/*
SQLyog Ultimate v9.63 
MySQL - 5.5.5-10.0.20-MariaDB : Database - via_pos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`via_pos` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `via_pos`;

/*Data for the table `menu_seguridad` */

insert  into `menu_seguridad`(`id`,`descripcion`,`credencial`,`modulo`,`icono`,`accion`,`superior`,`created_by`,`updated_by`,`created_at`,`updated_at`) values (1,'Catalogo',NULL,NULL,'icon ti-book',NULL,NULL,NULL,NULL,NULL,NULL),(2,'Cartera',NULL,NULL,'icon ion-android-clipboard',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Reparacion',NULL,NULL,'icon ion-android-clipboard',NULL,NULL,NULL,NULL,NULL,NULL),(4,'Reportes',NULL,NULL,'icon ti-printer',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Configuracion',NULL,NULL,'icon ti-settings',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Moneda','moneda','moneda',NULL,'index',1,NULL,NULL,NULL,NULL),(7,'Pais','pais','pais',NULL,'index',1,NULL,NULL,NULL,NULL),(8,'Empresa','empresa','empresa',NULL,'index',1,NULL,NULL,NULL,NULL),(9,'Tipo de Movimiento','tipo_movimiento','tipo_movimiento',NULL,'index',1,NULL,NULL,NULL,NULL),(10,'Tipo de Bodega','tipo_bodega','tipo_bodega',NULL,'index',1,NULL,NULL,NULL,NULL),(11,'Bodega','bodega','bodega',NULL,'index',1,NULL,NULL,NULL,NULL),(12,'Region','region','region',NULL,'index',1,NULL,NULL,NULL,NULL),(13,'Categoria de Producto','categoria_producto','categoria_producto',NULL,'index',1,NULL,NULL,NULL,NULL),(14,'Tipo de Cliente','tipo_cliente','tipo_cliente',NULL,'index',1,NULL,NULL,NULL,NULL),(15,'Lista de Precios','lista_precio','lista_precio',NULL,'index',1,NULL,NULL,NULL,NULL),(16,'Cliente','lista_cliente','lista_cliente',NULL,'index',2,NULL,NULL,NULL,NULL),(17,'Proveedor','proveedor','proveedor',NULL,'index',2,NULL,NULL,NULL,NULL),(18,'Categoria de Producto','categoria_producto','categoria_producto',NULL,'index',2,NULL,NULL,NULL,NULL),(19,'Producto','producto','producto',NULL,'index',2,NULL,NULL,NULL,NULL),(20,'Recepcion','repara_recepcion','repara_recepcion',NULL,'index',3,NULL,NULL,NULL,NULL),(21,'Solicitud Tecnico','repara_solicitud','repara_solicitud',NULL,'index',3,NULL,NULL,NULL,NULL),(22,'Diagnostico','repara_diagnostico','repara_diagnostico',NULL,'index',3,NULL,NULL,NULL,NULL),(23,'Detalle de Reparacion','repara_detalle','repara_detalle',NULL,'index',3,NULL,NULL,NULL,NULL),(24,'Entrega de Reparacion','repara_entrega','repara_entrega',NULL,'index',3,NULL,NULL,NULL,NULL),(25,'Bloque de Productos','inicio','inicio',NULL,'index',4,NULL,NULL,NULL,NULL),(26,'Bloque de Clientes','inicio','inicio',NULL,'index',4,NULL,NULL,NULL,NULL),(27,'Bloque de Valores','inicio','inicio',NULL,'index',4,NULL,NULL,NULL,NULL),(28,'Codigo de Barras','inicio','inicio',NULL,'index',4,NULL,NULL,NULL,NULL),(29,'Tipo de Usuario','tipo_usuario','tipo_usuario',NULL,'index',5,NULL,NULL,NULL,NULL),(30,'Usuarios','usuario','usuario',NULL,'index',5,NULL,NULL,NULL,NULL),(31,'Perfiles','perfil','perfil',NULL,'index',5,NULL,NULL,NULL,NULL),(32,'Menus','menu_seguridad','menu_seguridad',NULL,'index',5,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

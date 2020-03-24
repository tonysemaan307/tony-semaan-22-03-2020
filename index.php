<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!ob_start("ob_gzhandler")) ob_start();
session_start();
define("CMS", true);

$pageTemp = 'index.tpl';

function debug($object){
  echo "<pre>";
  print_r($object);
  echo "</pre>";
 exit;
}
require_once 'libs/db/MysqliDb.php';
require_once 'config/config.php';
global $db;
require 'libs/smarty/libs/Smarty.class.php';
require 'libs/factory.php';
require_once 'libs/classes/json.php';
$tmp = new Smarty;
$json  = new Json();
$Factory= new Factory;
$tmp->template_dir = 'template/';
$tmp->compile_dir  = 'cache/';
$tmp->cache_dir    = 'cache/';
$tmp->setCaching(false);
$tmp->caching = false;
$tmp->registerPlugin("modifier","sslash","stripslashes");
$tmp->display($pageTemp.'.tpl');

<?php
/**
 * Created by PhpStorm.
 * User: Marejean
 * Date: 10/16/16
 * Time: 4:46 PM
 */

include_once "controller/ServerFunctions.php";

$obj = new ServerFunctions();
$obj->search($_POST["filter"], $_POST["keyWord"]);
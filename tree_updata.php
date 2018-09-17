<?php
/**
 * Created by PhpStorm.
 * User: 谢少华
 * Date: 2018/7/31
 * Time: 16:34
 * port: 修改tree接口
 */
header("Content-Type:application/json;charset=utf8");
header('Access-Control-Allow-Origin:http://localhost:8080');
$tree = $_POST["tree"];
$con = mysql_connect("localhost","root","123456");
mysql_select_db("xsh", $con);
mysql_query("SET NAMES UTF8");
$result = mysql_query("update tree set content='{$tree}' where id = 1");


if($result){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"error"));
}
mysql_close($con);
?>
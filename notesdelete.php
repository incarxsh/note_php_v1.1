<?php
/**
 * Created by PhpStorm.
 * User: 谢少华
 * Date: 2018/7/31
 * Time: 17:26
 * port: 删除notes接口
 */

header("Content-Type:application/json;charset=utf8");
header('Access-Control-Allow-Origin:http://localhost:8080');
$id = $_POST["id"];
$con = mysql_connect("localhost", "root", "123456");
mysql_select_db("xsh", $con);
mysql_query("SET NAMES UTF8");
$result = mysql_query("update notes set del_mark = 1 where id = '{$id}'");

if ($result) {
    echo json_encode(array("status" => "success"));;
} else {
    echo json_encode(array("status" => "error"));
}
mysql_close($con);

?>
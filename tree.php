<?php
/**
 * Created by PhpStorm.
 * User: 谢少华
 * Date: 2018/7/31
 * Time: 17:26
 * port: 查询notes接口
 */

header('Access-Control-Allow-Origin:http://localhost:8080');
header('Access-Control-Allow-Method:POST,GET');
header("Content-Type:application/json;charset=utf8;Access-Control-Allow-Origin:*");
$con = mysql_connect("localhost", "root", "123456");
mysql_select_db("xsh", $con);
mysql_query("SET NAMES UTF8");
$result = mysql_query("select t.content from tree t where id = 1");

$arr = array("status"=>"success","message"=>array());
//循环读取
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
    array_push($arr["message"],$row);
}

print_r(json_encode($arr));


mysql_close($con);
?>
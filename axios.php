<?php
header('Access-Control-Allow-Origin,*');
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Headers:Origin, Methods, Content-Type, Authorization');
header('Access-Control-Allow-Credentials, true');
// echo "axios";
$host='sql309.epizy.com';
$user='epiz_30747852';
$pass='SK59YAOIR8E9';
$db='tt_demo_test';

$con=mysqli_connect($host,$user,$pass,$db);
if($con) {
echo "Connection successful"; 
}else{
    'error';
}
// mysqli_query($link,"SET CHARACTER SET 'utf8'");
// mysqli_query($link,"SET SESSION collation_connection ='utf8_unicode_ci'");
$res=mysqli_query($con,"select * from tt_list");
$arr = array();
$datacout = mysqli_num_rows($res);//查詢數據條數
for ($i = 0; $i < $datacout; $i++) {
    $arr[] = mysqli_fetch_assoc($res);
}
//print_r($arr);
$res->free();
//關閉結連
$con->close();
echo(json_encode($arr));//這裡用echo不是用return

?>

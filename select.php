<?php
//khai bao cac bienheader("Access-Control-Allow-Origin:*");
$s="localhost"; $u="id20969685_trafdual";
$p="Traf123456@"; $db="id20969685_myguests";
//tao ket noi voi csdl
$con=new mysqli($s,$u,$p,$db);
//tao chuoi truy van
$sql="select * from MyGuests";
//thuc thi lenh
$result=$con->query($sql);
//thuc thi va lay ve ket qua
while ($row[]=$result->fetch_assoc())
//doc tung dong du lieu{
$json=json_encode($row);//chuyen du lieu sang json}
echo '"MyGuest":{'.$json.'}';
$con->close();
?>

<?php
session_start();//1번째 방식
$SelectS=$_POST[""/*form에서 받아올 날짜 및 요일 변수*/""]; //get으로 받을 수 있음 -> 날짜, 요

$con= mysqli_connect("localhost", "root", "", //테이블 );
$sql="select * from "/*테이블 명*/" where check_in_date >= '$Scheck_in'";
$res=mysqli_query($con,$sql);
$num_math = mysqli_num_rows($res);

if($cancel>0){
  $sql2 = "delete from "/*테이블 명*/" where ";
}

$sss=array();
$i=0;
while($row=mysqli_fetch_array($res)){
  $sss[$i]=$row[""/*row 명*/""];
  $i++;
  if($i==$num_math)
  break;
};

$_SESSION["date"]=serialize($sss);

echo ("<script> location.href='/*파일경로*/'</script>");

//두번 째 방식
session_start();
$selectid=$_POST[/*사용자 정보*/] //로그인 정보를 토대로 사용자 정보 확인

...
...
...
//이하 동일
?>

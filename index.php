<?php
 
mysql_connect("localhost", "root", "");
mysql_select_db("unisbank");
 
$query = "SELECT * from mahasiswa ";
$result = mysql_query($query) or die(mysql_error());
 
$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
  "nim" => $row["nim"],
    "nama" => $row["nama"],
    "progdi" => $row["progdi"], 
    "alamat" => $row["alamat"]);
    
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"Data Mahasiswa\":" . $data . "}";
?>
<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$Dbname = 'aplikasi_sistem_informasi_klinik';
//connect with the database
$db = new mysqli($host,$username,$pass,$Dbname);

//get search term
$searchTerm = $_GET['term'];

//get matched data from skills table
$query = $db->query("SELECT * FROM pasien WHERE nama_lengkap LIKE '%".$searchTerm."%' ORDER BY id ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nama_lengkap'];
}
//return json data
echo json_encode($data);

?>
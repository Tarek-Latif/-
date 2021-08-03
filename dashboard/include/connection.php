<?php
# الاتصال مع قاعدة البيانات
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pdfbooks';
$con = mysqli_connect ($host,$user,$pass,$db);


if (isset($con)){
    echo"Connected";
}
else {
    echo "Not Connected";
}

# Button variable
$ID = '';
$adminName = '';
$adminEmail ='';
$adminPass ='';


if (isset($_POST ['id'])) {
    $ID = $_POST ['id'] ;
}

if (isset($_POST ['adminName'])) {
    $AdminName = $_POST ['adminName'] ;
}

if (isset($_POST ['adminEmail'])) {
    $AdminEmail = $_POST ['adminEmail'] ;
}

if (isset($_POST ['adminPass'])) {
    $AdminPass = $_POST ['adminPass'] ;
}
?>
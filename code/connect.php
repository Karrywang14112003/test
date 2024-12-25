<?php
$conn = new PDO('mysql:host=localhost;dbname=hocsinh', 'Student' ,'123');
if ($conn) {
   // echo "Connected successfully";
}else{
    echo "Connection failed";
}
?>
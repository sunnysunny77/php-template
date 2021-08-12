<?php 
require "./template/template.php";
echo $head;
echo file_get_contents("./homeComponents/main.html");
echo $foot;
?>

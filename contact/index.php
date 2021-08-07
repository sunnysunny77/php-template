<?php 
require "../template/template.php";
echo $head;
echo file_get_contents("./components/main.html");
echo $foot;
?>

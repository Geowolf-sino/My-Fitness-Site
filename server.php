 //получение JSON файлов на PHP коде


<?php
$_POST = json_decode( file_get_contents("php://input"), true );
echo var_dump($_POST);
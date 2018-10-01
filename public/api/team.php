<?php

require '../../common.php'








$teams = Team:getAll();

//2. convert to Json
$json = json_encode($work);

//3. Print
header('Content-Type: application/json')
echo $json;

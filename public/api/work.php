2
<?php

require '../../app/common.php';

// Get the taskId from URL params
$taskId = intval($_GET['taskId'] ?? 0);

if ($taskId < 1) {
  throw new Exception('Invalid Task ID');
}

//1. Go to database and get all work associated with the $taskId
$work = Work::findByTaskID($taskId);

//2. convert to Json
$json = json_encode($work);

//3. Print
header('Content-Type: application/json')
echo $json;

<?php

class Work
{
  public $work_id;
  public $team_id;
  public $task_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function __construct($data) {
    //TODO where should this be calculated? $this->hours = 0;
  }
  public static function findByTaskID(int $taskId) {
    //1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;
    //2. Run a query
    //3. Read the results
    //4. For each row, make a new work object
    //5. Return the array of work objects
    return [];
  }
}

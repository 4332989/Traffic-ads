<?php
$data = file_get_contents("php://input");
$events = json_decode($data, true);

foreach ($events as $event) {
  // Here, you now have each event and can process them how you like

  $laneevent = $_rule_name['rule_name'];


  process_event($event);
}

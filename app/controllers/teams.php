<?php

function teams() {
  $teams = array();
  
  array_push($teams, array('id' => 0, 'name' => 'Reet SK', 'members' => 17));
  array_push($teams, array('id' => 1, 'name' => 'Rupel Boom', 'members' => 23));
  array_push($teams, array('id' => 2, 'name' => 'Aartselaar SK', 'members' => 11));

  return json_encode($teams);
}

function team_post() {
  return $_POST;

  // return json_encode(array());
}

function team_update() {
  return $_POST;

  // return json_encode(array());
}
<?php

  list($load_1m, $load_5m, $load_15m) = sys_getloadavg();
  $now = date('c');

  $values = array(
    'load_1m'  => array(array('value' => $load_1m,  'timestamp' => $now)),
    'load_5m'  => array(array('value' => $load_5m,  'timestamp' => $now)),
    'load_15m' => array(array('value' => $load_15m, 'timestamp' => $now))
  );
  
  echo "load_1m.value=".$values['load_1m'][0]['value']." load_1m.timestamp=".$values['load_1m'][0]['timestamp']."\n<br/>";  
  echo "load_5m.value=".$values['load_5m'][0]['value']." load_5m.timestamp=".$values['load_5m'][0]['timestamp']."\n<br/>";
  echo "load_15m.value=".$values['load_15m'][0]['value']." load_15m.timestamp=".$values['load_15m'][0]['timestamp']."\n<br/>";

?>
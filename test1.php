<?php

  list($load_1m, $load_5m, $load_15m) = sys_getloadavg();
  $now = date('c');

  $values = array(
    'load_1m'  => array(array('value' => $load_1m,  'timestamp' => $now)),
    'load_5m'  => array(array('value' => $load_5m,  'timestamp' => $now)),
    'load_15m' => array(array('value' => $load_15m, 'timestamp' => $now))
  );
  echo "load_1m."values['load_1m']."\n"
  echo "load_5m."values['load_5m']."\n"
  echo "load_15m."values['load_15m']."\n"

?>
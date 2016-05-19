use Att\M2X\M2X;
use Att\M2X\Error\M2XException;

//$apiKey   = getenv("M2X_API_KEY");
$apiKey = "aa554d2899305c234358af041ba9366b";
$deviceId = 'fe1ee628c3549e9de86d7101d9c5317f';

$m2x = new M2X($apiKey);

# Get the device
$device = $m2x->device($deviceId);

# Create the streams if they don't exist yet
$device->updateStream('load_1m');
$device->updateStream('load_5m');
$device->updateStream('load_15m');

while (true) {
  list($load_1m, $load_5m, $load_15m) = sys_getloadavg();
  $now = date('c');

  $values = array(
    'load_1m'  => array(array('value' => $load_1m,  'timestamp' => $now)),
    'load_5m'  => array(array('value' => $load_5m,  'timestamp' => $now)),
    'load_15m' => array(array('value' => $load_15m, 'timestamp' => $now))
  );

  try {
    $device->postUpdates($values);
  } catch (M2XException $ex) {
    echo 'Error: ' . $ex->getMessage();
    echo $ex->response->raw;
    break;
  }

  sleep(10);
}
<?php
/*
 * https://www.teleduino.org
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

include_once(__DIR__.'/_bootstrap.php');

use Teleduino\Teleduino2560Client\Client as Teleduino2560;

if(isset($_SERVER['HTTP_HOST'])) {
    echo "<pre>";
}

$Teleduino2560 = new Teleduino2560();

//$Teleduino2560->setModeEthernetServerWeb($config['ethernet_server_web']);
$Teleduino2560->setModeEthernetClientProxy($config['ethernet_client_proxy']);

/*
echo "getPresets:\n";
$result = $Teleduino2560->getPresets();
echo print_r($result, true)."\n";
*/

/*
echo "setPresets:\n";
$result = $Teleduino2560->getPresets();
if($result['result'])
{
	$presets = $result['values'];
	$presets['pin_modes'][3] = 0; // Set pin 3 mode to 'input'
	$presets['pin_modes'][4] = 1; // Set pin 4 mode to 'output'
	$presets['pin_outputs'][4] = 1; // Set pin 4 state to 'high'
	$presets['pin_modes'][5] = 2; // Set pin 5 mode to 'PWM'
	$presets['pin_outputs'][5] = 64; // Set pin 5 duty cycle to 64
	$result = $Teleduino2560->setPresets($presets);
	echo print_r($result, true)."\n";
}
else
{
	echo "Failed to fetch presets.\n";
}
*/
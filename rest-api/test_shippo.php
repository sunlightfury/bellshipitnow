<?php 
require_once('../vendor/shippo-php-client-master/lib/Shippo.php');
Shippo::setApiKey("shippo_live_2c366c199257cf916d15a08def27ed8d5493621d");

$fromAddress = array(
    'name' => 'Shawn Ippotle',
    'street1' => '215 Clayton St.',
    'city' => 'San Francisco',
    'state' => 'CA',
    'zip' => '94117',
    'country' => 'US'
);

$toAddress = array(
    'name' => 'Mr Hippo"',
    'street1' => 'Broadway 1',
    'city' => 'New York',
    'state' => 'NY',
    'zip' => '10007',
    'country' => 'US',
    'phone' => '+1 555 341 9393'
);

$parcel = array(
    'length'=> '5',
    'width'=> '5',
    'height'=> '5',
    'distance_unit'=> 'in',
    'weight'=> '2',
    'mass_unit'=> 'lb',
);

$shipment = Shippo_Shipment::create( array(
    'address_from'=> $fromAddress,
    'address_to'=> $toAddress,
    'parcels'=> array($parcel),
    'async'=> false
    )
);
echo '<pre>';
print_R($shipment); exit();
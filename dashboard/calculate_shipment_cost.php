<?php 
    $_SERVER["HTTP_ACCEPT_LANGUAGE"]='en-US';
    require_once('../vendor/shippo-php-client-master/lib/Shippo.php');

    $name = isset($_POST['r_name'])?$_POST['r_name']:'';
    $street1 = isset($_POST['r_address'])?$_POST['r_address']:'';
    $phone = isset($_POST['r_phone'])?$_POST['r_phone']:'';
    $email = isset($_POST['r_email'])?$_POST['r_email']:'';
    // 'state' = '';
    $city = isset($_POST['r_city'])?$_POST['r_city']:'';
    $zip = isset($_POST['r_postal'])?$_POST['r_postal']:'';
    $country = isset($_POST['r_dest'])?$_POST['r_dest']:'';
    $weight = isset($_POST['r_weight'])?$_POST['r_weight']:'';
    $quantity = isset($_POST['r_qnty'])?$_POST['r_qnty']:'';
    $length = isset($_POST['length'])?$_POST['length']:'';
    $provider = isset($_POST['courier'])?$_POST['courier']:'';
    $width = isset($_POST['width'])?$_POST['width']:'';
    $height = isset($_POST['height'])?$_POST['height']:'';
    $itemcat = isset($_POST['itemcat'])?$_POST['itemcat']:'';
    // test key shippo_test_e59aa237e0b0519947985acf993131cd8c93bd7c
    // live key shippo_live_2c366c199257cf916d15a08def27ed8d5493621d
    // echo '<pre>';
    // print_R($_POST);
    // exit;
    if($name && $street1 && $phone && $email && $city && $zip && $country && $weight && $quantity && $length && $provider && $width && $height && $itemcat)
    {
        Shippo::setApiKey("shippo_live_2c366c199257cf916d15a08def27ed8d5493621d");
        
        $net_weight = (int)$_POST['r_weight']*(int)$_POST['r_qnty'];
        $fromAddress = array
        (
            'name' => 'Rouzier Charles',
            'street1' => '228 Park Ave A',
            'phone' => '1-844-227-4641',
            'email' => 'info@bellshipitnow.com',
            'city' => 'New York',
            'state' => 'NY',
            'zip' => 10003,
            'country' => 'United States'
        );
    
        $toAddress = array
        (
            'name' => $_POST['r_name'],
            'street1' => $_POST['r_address'],
            'phone' => $_POST['r_phone'],
            'email' => $_POST['r_email'],
            // 'state' => '',
            'city' => $_POST['r_city'],
            'zip' => $_POST['r_postal'],
            'country' => $_POST['r_dest']
        );
    
        $parcel = array
        (
            'length' => $_POST['length'],
            'provider' => $_POST['courier'],
            'quantity' => $_POST['r_qnty'],
            'width' => $_POST['width'],
            'height' => $_POST['height'],
            'weight'=> $net_weight,
            'distance_unit'=> 'in',
            'mass_unit'=> 'lb',
            'value_amount' => $_POST['r_custom'],
        );
    
        $customs_item = array
        (
            'description' => $_POST['itemcat'],
            'quantity' => $_POST['r_qnty'],
            'net_weight' => $net_weight,
            'mass_unit' => 'lb',
            'value_amount' => $_POST['r_custom'],
            'value_currency' => 'USD',
            'origin_country' => 'US',
            'tariff_number' => '',
        );
        // Creating the Customs Declaration
        // The details on creating the CustomsDeclaration is here: https://goshippo.com/docs/reference#customsdeclarations
        $customs_declaration = Shippo_CustomsDeclaration::create(
        array
        (
            'contents_type'=> 'MERCHANDISE',
            'contents_explanation'=> $_POST['itemcat'],
            'non_delivery_option'=> 'RETURN',
            'certify'=> 'true',
            'certify_signer'=> 'Rouzier Charles',
            'items'=> array($customs_item),
        ));
    
        try
        {
            $shipment = Shippo_Shipment::create( 
                array
                (
                    'provider' => $_POST['courier'],
                    'address_from'=> $fromAddress,
                    'address_to'=> $toAddress,
                    'parcels'=> array($parcel),
                    'duration_terms'=> $_POST['deli_time'],
                    'customs_declaration' => $customs_declaration -> object_id,
                    'async'=> false,
                )
            );
    
            $shipObj = json_decode($shipment);
            $flag1 = 0;
            $flag2 = 0;
            $found = 0;
            // foreach($shipObj->rates as $key => $value){
            //     if (!empty(strrchr($value->provider,$_POST['courier']))) {
            //        $amount[] = $value->amount; 
            //        $object_id[] = $value->object_id; 
            //        $flag1 = 1;
            //        $found = 1;
            //      }
            //      else{
            //          $amount2[] = $value->amount;
            //          $other_object_id =  $value->object_id;
            //          $flag2= 1;
            //      }
            //     //  print_r($value->provider);
            // }
            // if($flag1!=0 && $found==1){
            //     $rate['amount'] = min($amount);
            //     $rate['object_id'] = $object_id[0];
            //     $response = array($rate['amount'],$rate['object_id']);
            //     echo json_encode($response);
            // }
            // else if($flag2!=0 && $flag1==0){
            //     echo min($amount2);
            // }
            // else if($flag1!=0 && $flag2!=0){
            //     echo min(min($amount),min($amount2));
            // }
            // echo  $shipment;
    
            foreach($shipObj->rates as $key => $value)
            {
                $rate['amount'][] = $value->amount;
                $rate['currency'][] = $value->currency;
                $rate['object_id'][] = $value->object_id;
                $rate['provider'][] = $value->provider;
                $rate['provider_image_75'][] = $value->provider_image_75;
                $rate['estimated_days'][] = $value->estimated_days;
                $rate['duration_terms'][] = $value->duration_terms;
            }
      
            $min_key = array_keys($rate['amount'], min($rate['amount']))[0]; 
            if(!empty($min_key))
            {
                $response = array($rate['amount'][$min_key],$rate['object_id'][$min_key]);
                echo json_encode($rate);
            }
            else
            {
                echo '';
                print_r($shipObj);
            }
            // print_r($shipObj);
            // print_R($shipObj->rates);
        }
        catch(Exception $e)
        {
            $session['message'] = $e;
            echo $e;
        }
    
    
        exit;
        $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';
        $width = isset($_POST['width']) && !empty($_POST['width']) ? $_POST['width'] : '1';
        $length = isset($_POST['length']) && !empty($_POST['length']) ? $_POST['length'] : '1';
        $height = isset($_POST['height']) && !empty($_POST['height']) ? $_POST['height'] : '1';
        $weight = isset($_POST['weight']) && !empty($_POST['weight']) ? $_POST['weight'] : '1';
        $type = isset($_POST['type']) && !empty($_POST['type']) ? $_POST['type'] : 'Parcel';
        $cost = isset($_POST['cost']) && !empty($_POST['cost']) ? (float)$_POST['cost'] : '50.00';
    
        $sql = "SELECT * FROM  `users` WHERE `email` = '$email' LIMIT 1;";
        $result = $conn->query($sql);
        $row = $result -> fetch_assoc();
        $country = isset($row['country']) && !empty($row['country']) ? $row['country'] : 'United States';
        $postal = isset($row['postal']) && !empty($row['postal']) ? $row['postal'] : '10003';
    
        require_once('../vendor/shippo-php-client-master/lib/Shippo.php');
        // test key shippo_test_e59aa237e0b0519947985acf993131cd8c93bd7c
        // live key shippo_live_2c366c199257cf916d15a08def27ed8d5493621d
        Shippo::setApiKey("shippo_live_2c366c199257cf916d15a08def27ed8d5493621d");
        $fromAddress = 
        array
        (
            'name' => 'Rouzier Charles',
            'street1' => '228 Park Ave A',
            'city' => 'New York',
            'state' => 'NY',
            'zip' => 10003,
            'country' => 'United States'
        );
    
        $toAddress = 
        array
        (
            'zip' => $postal,
            'country' => $country
        );
    
        $parcel = 
        array
        (
            'length'=> $length,
            'width'=> $width,
            'height'=> $height,
            'distance_unit'=> 'in',
            'weight'=> $weight,
            // 'quantity' => 1,
            'mass_unit'=> 'lb',
            "value_amount" => $cost,
            // "value_currency" => 'USD',
            "metadata" => "",
            "line_items" => [],
            "test" => false,
        );
    
        // The complete reference for customs object is here: https://goshippo.com/docs/reference#customsitems
        $customs_item = 
        array
        (
            'description' => $type,
            'quantity' => '1',
            'net_weight' => $weight,
            'mass_unit' => 'lb',
            "value_amount" => $cost,
            "metadata" => "",
            "line_items" => [],
            "test" => true,
            'value_currency' => 'USD',
            'origin_country' => 'US',
            'tariff_number' => '',
        );
        // Creating the Customs Declaration
        // The details on creating the CustomsDeclaration is here: https://goshippo.com/docs/reference#customsdeclarations
        $customs_declaration = Shippo_CustomsDeclaration::create(
        array
        (
            'contents_type'=> 'MERCHANDISE',
            'contents_explanation'=> $type,
            'non_delivery_option'=> 'RETURN',
            'certify'=> 'true',
            'certify_signer'=> 'Rouzier Charles',
            'items'=> array($customs_item),
        ));
    
        try
        {
            $shipment = Shippo_Shipment::create( 
                array
                (
                    'address_from'=> $fromAddress,
                    'address_to'=> $toAddress,
                    'parcels'=> array($parcel),
                    'customs_declaration' => $customs_declaration -> object_id,
                    'async'=> false,
                )
            );
    
            $shipObj = json_decode($shipment);
            
            foreach($shipObj->rates as $key => $value)
            {
                $rate = $value->amount;
            }
            $response['status'] = 200;
            $response['data'] = $rate;
            $response['message'] = 'Total cost has been estimated';
        }
        catch(Exception $e)
        {
            $response['status'] = 400;
            $response['data'] = '';
            $response['message'] = "Something went wrong ".$e;
        }
        $response = json_encode($response);
        echo $response;
        exit;
    }

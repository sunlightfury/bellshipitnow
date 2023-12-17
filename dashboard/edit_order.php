<?php
define("_VALID_PHP", true);
require(dirname(__DIR__).'/lib/config.ini.php');

$id = $_POST['id'];
$servername = DB_SERVER;
$username   = DB_USER;
$password   = DB_PASS;
$dbname     = DB_DATABASE;
$conn       = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product = '';

$query = "SELECT * FROM `order_form` WHERE `id` = $id";
$result = $conn->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
$customer_id = $row['customer_id'];
$user_sql = "SELECT * FROM `users` WHERE `customer_number` = '$customer_id' LIMIT 1;";
$user_result = $conn->query($user_sql);
$user_row = $user_result->fetch_array(MYSQLI_BOTH);

$email = isset($user_row['email']) && !empty($user_row['email']) ? $user_row['email'] : '';
$country = isset($user_row['country']) && !empty($user_row['country']) ? $user_row['country'] : 'United States';
$postal = isset($user_row['postal']) && !empty($user_row['postal']) ? $user_row['postal'] : '10003';


// while ($row = $result->fetch_array(MYSQLI_BOTH))  
// {   
    $tracking = $row['tracking'];
    $grandtotal = $row['grandtotal'];
 	$product = json_decode($row['product'], true);
    $total_rate = 0;
    $grand_total_cost = 0;
    $total_consolidation = 0;
    $total_handling = 0;
    $total_tca = 0;
    if($product != '')
    {
        echo '<input type="hidden" name="customer_id" value="'.$customer_id.'">';
        $max = sizeOf($product["item"]);
        for($i=0;$i<$max;$i++)
        {
            $quantity = $product['quantity'][$i];
            $weight = isset($product['weight'][$i]) && !empty($product['weight'][$i])?$product['weight'][$i]:0.5;
            $total_weight = $weight*$quantity;
            $width = isset($product['width']) && !empty($product['width']) ? $product['width'] : '1';
            $length = isset($product['length']) && !empty($product['length']) ? $product['length'] : '1';
            $height = isset($product['height']) && !empty($product['height']) ? $product['height'] : '1';
            $type = isset($product['type']) && !empty($product['type']) ? $product['type'] : 'Parcel';
            $cost = isset($product['value'][$i]) && !empty($product['value'][$i]) ? (float)$product['value'][$i] : '50.00';
            $total_cost = $cost*$quantity;
            $grand_total_cost = $grand_total_cost+$total_cost;
            require_once('../vendor/shippo-php-client-master/lib/Shippo.php');
            // test key shippo_test_e59aa237e0b0519947985acf993131cd8c93bd7c
            // live key shippo_live_2c366c199257cf916d15a08def27ed8d5493621d
            Shippo::setApiKey("shippo_live_2c366c199257cf916d15a08def27ed8d5493621d");
            $fromAddress = array(
                'name' => 'Rouzier Charles',
                'street1' => '228 Park Ave A',
                'city' => 'New York',
                'state' => 'NY',
                'zip' => 10003,
                'country' => 'United States'
            );

            $toAddress = array
            (
                'zip' => $postal,
                'country' => $country
            );

            $parcel = array
            (
                'length'=> $length,
                'width'=> $width,
                'height'=> $height,
                'distance_unit'=> 'in',
                'weight'=> $weight,
                'quantity' => $quantity,
                'mass_unit'=> 'lb',
                "value_amount" => $cost,
                // "value_currency" => 'USD',
                "metadata" => "",
                "line_items" => [],
                "test" => true,
            );

            // The complete reference for customs object is here: https://goshippo.com/docs/reference#customsitems
            $customs_item = array
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
            // $customs_declaration = Shippo_CustomsDeclaration::create(
            // array(
            //     'contents_type'=> 'MERCHANDISE',
            //     'contents_explanation'=> $type,
            //     'non_delivery_option'=> 'RETURN',
            //     'certify'=> 'true',
            //     'certify_signer'=> 'Rouzier Charles',
            //     'items'=> array($customs_item),
            // ));

            // try
            // {
            //     $shipment = Shippo_Shipment::create( 
            //         array
            //         (
            //             'address_from'=> $fromAddress,
            //             'address_to'=> $toAddress,
            //             'parcels'=> array($parcel),
            //             'customs_declaration' => $customs_declaration -> object_id,
            //             'async'=> false,
            //         )
            //     );

            //     $shipObj = json_decode($shipment);
                
            //     foreach($shipObj->rates as $key => $value)
            //     {
            //         $rate = $value->amount;
            //         break;
            //     }
                
            //     $response['status'] = 200;
            //     $response['data'] = $rate;
            //     $response['message'] = 'Total cost has been estimated';
            // }
            // catch(Exception $e)
            // {
            //     $response['status'] = 400;
            //     $response['data'] = '';
            //     $response['message'] = "Something went wrong ".$e;
            // }

            $rate = 0;
            $total_rate = $total_rate+$rate;
            $tca = (0.07)*($product['total'][$i]);
            $tca = number_format((float)$tca, 2, '.', '');
            $total_tca = $tca+$total_tca;
            $total_consolidation = 15+$total_consolidation;
            $total_handling = 17+$total_handling;
            echo '<tr><td>';
            // echo '</td><td>';
            echo '<input type="text" style="width:100px;" class="form-control" name="item[]" value="'.$product['item'][$i].'"';
            // echo $product["item"][$i];
            echo '</td>';
            // echo '<td><input type="text" style="width:100px;" class="form-control tracking_id" name="tracking_id" value="'.$row['tracking'].'"></td>';
            echo '<td>';
            echo '<input type="text" style="width:100px;" class="form-control value" name="value[]" value="'.$cost.'"';
            echo '</td><td>';
            echo '<input type="text" style="width:100px;" class="form-control quantity" name="quantity[]" value="'.$quantity.'"';
            echo '</td>';
            // echo '<td>';
            // echo '<input type="text" style="width:100px;" class="form-control weight" name="weight[]" value="'.$weight.'"';
            // echo '</td>';
            echo '<td><select class="form-control" name="category[]"><option value="">Select</option>';
            $query_category = "SELECT * FROM `category`";
            $result_query_category = $conn->query($query_category); 
            while ($row = $result_query_category->fetch_array(MYSQLI_BOTH))  
            {
                $sel = '';
                if($row['name_item'] == $product['category'][$i])
                {
                    $sel = 'selected="selected"';
                }
                echo '<option ' . $sel . '>' . $row['name_item'] . '</option>';
            }
            // echo '<input type="text" style="width:100px;" class="form-control" name="category[]" value="'.$product['category'][$i].'"';
            echo '</td><td>';
            echo '<input type="text" style="width:100px;" class="form-control" name="product_link[]" value="'.$product['product_link'][$i].'"';
            echo '</td><td>';
            echo '<select class="form-control" name="ship_method[]"><option value="">Select</option>';
            $query_category = "SELECT * FROM `shipping_mode`";
            $result_query_category = $conn->query($query_category); 
            while ($row = $result_query_category->fetch_array(MYSQLI_BOTH))  
            {
                $sel = '';
                if($row['ship_mode'] == $product['ship_method'][$i])
                {
                    $sel = 'selected="selected"';
                }
                echo '<option ' . $sel . '>' . $row['ship_mode'] . '</option>';
            }

            // echo '<input type="text" style="width:100px;" class="form-control" name="ship_method[]" value="'.$product['ship_method'][$i].'"';
            echo '</td>';
            // echo '<td><input type="text" style="width:100px;" class="form-control total" name="consolidation[]" value="15.00"></td>'; 
            // echo '<td><input type="text" style="width:100px;" class="form-control total" name="handling[]" value="17.00"></td>'; 
            // echo '<td><input type="text" style="width:100px;" class="form-control total" name="tca[]" value="'.$tca.'"></td>'; 
            // echo '<td><input type="text" style="width:100px;" class="form-control ship_fee" name="ship_fee[]" value="'.$rate.'"></td>'; 
            echo '<td><input type="text" style="width:100px;" class="form-control total" name="total[]" value="'.($total_cost).'"></td>'; 
            echo '</tr>';
        }
        echo '<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><h5>Grand Total</h5></td>
        <td><input type="text" class="form-control id="grand_total" name="grand_total" value="' . $grand_total_cost. '"></td>
        </tr>';
    }
    else
    {
        echo '<tr><td colspan="8"><i align="center" class="display-3 text-warning d-block"><img src="assets/images/alert/ohh_shipment.png" width="130" alt="guarantee a safe and fast shipping to any location" /></i></td></tr>';
        // echo '<tr><td></td><td></td><td></td><td></td><td></td></tr>';
    }

//  }

?>
<?php
session_start();
$base_return_url =null;
$base_return_url = 'Location:../pay.php';
$rxf = uniqid();
$price = 20.00;
$uName = "Cornelius Kasokola";
$uEmail = "theecornelius@gmail.com";
$uMobile = "+260967721900";
$aEmail = 'corneliuskasokola101@gmail.com';
$request = [
    'tx_ref'=>$rxf,
    'amount'=> $price,
    'currency'=> 'ZMW',
    'redirect_url'=> "http://".$_SERVER['SERVER_NAME']."/flutter/flutter/paymentEventListener",
    'customer'=>[
        'email'=>$uEmail,
        'phonenumber'=>$uMobile,
        'name'=>$uName
    ],
    'meta'=>[
        'consumer_id'=>$_SESSION['uID'],
        'consumer_mac'=>$device_ip
    ],
    'customizations'=> [
        'title'=> "Payment",
        'logo'=> "http://".$_SERVER['SERVER_NAME']."/isograft live/assets/logo.jpg",
        'description'=> "Accommodation Service"
    ]
];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>json_encode($request),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer FLWSECK_TEST-273829844575eaa020dcbd6da4e6652b-X',
        'Content-Type: application/json'
    ),
));
$respns = curl_exec($curl);
curl_close($curl);
$r = json_decode($respns);
if($r->status=='success'){
    $processPaylink = $r->data->link;
    header('Location:'.$processPaylink);
}else 
    header($base_return_url."?unlinked&&snap=$pack");
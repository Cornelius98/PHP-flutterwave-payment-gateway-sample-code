<?php
session_start();
if($_GET['status']==="successful"){
    $tx_id = $_GET['transaction_id'];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL =>"https://api.flutterwave.com/v3/transactions/{$tx_id}/verify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer FLWSECK_TEST-273829844575eaa020dcbd6da4e6652b-X',
            'Content-Type: application/json'
        )
    ));
    $respns = curl_exec($curl);
    curl_close($curl);
    $r = json_decode($respns);
    $txStatus = $r->status;
    if($txStatus==='success'){
        $dueAmount = $r->data->amount;
        $paidAmount = $r->data->charged_amount;
        $txRefRes = $r->data->tx_ref;
        $txRefQParam = $_GET['transaction_id'];
        $currency = $r->data->currency;
        if(($paidAmount>=$dueAmount) && ($currency==="ZMW")){   
            echo "Payment Successful";
        }else echo "Payment Not Successful";
    }else echo "Payment Not Successful";

}else echo "Payment Not Successful";
?>


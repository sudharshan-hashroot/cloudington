<?php

$whmcsUrl = "https://my.cloudington.com/";
$identifier = '7efaVQse8aqVkaXrsX9fX4aKYP07Bqxj';
$secret = 'IT8nJzoIVxfyWRlVx2tfej80aSpPVVhj';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    http_build_query(
        array(
            'action' => 'GetProducts',     
            'identifier' => $identifier,
            'secret' => $secret,
            'responsetype' => 'json',
        )
    )
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
if (curl_error($ch)) {
    die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
}
curl_close($ch);

// Decode response
$jsonData = json_decode($response, true);


if ($jsonData["result"] == "success") {
  
    $data['response'] = $jsonData['products']['product'];
    $fp = fopen('products.json', 'w');
    fwrite($fp, json_encode($jsonData['products']));
    fclose($fp);
    echo "Product JSON added successfully";
} elseif ($jsonData["result"] == "error") {
	echo "Something went wrong! Please contact our support team.";
}

echo "<pre>";
print_r($jsonData);
echo "</pre>";

?>
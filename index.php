<?php 
// Developer: Felipe Seixas
// Contact: https://www.linkedin.com/in/felipe-seixas/
// Issue: request an API with cURL lib, include erro´s functions

// Inspiration by
    // Book: Learn PHP, David Sklar.

$c = curl_init('http://api.example.com');

// Result like string
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

// Request and make the final result
$result = curl_exec($c);

// echo "Version 1: Did you know that " . $result . "\n\n";

$info = curl_getinfo($c);

if($result === false){
    // Number result
    echo "Error # " . curl_errno($c) . "\n";

    // Text result
    echo "Uh-oh! cURL says: " . curl_error($c) . "\n";
}else{
    echo "A sucessful result\n";
}

// Statitics
echo "By the way, this request took {$info['total_time']} seconds.\n";

?>
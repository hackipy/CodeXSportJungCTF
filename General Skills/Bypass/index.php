<?php

// Get the User-Agent header
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the User-Agent contains the string 'curl'
if (strpos($userAgent, 'curl') !== false) {
    // If cURL, echo the string
    echo "KIET_CTF{_us3r_4g3nt_k0_smjh_gy33_tum}";
} else {
    // If not cURL, deny access
    header('HTTP/1.1 403 Forbidden');
    echo "Access to this resource denied.";
}

?>

<?php
// Get IP address of the visitor
$ip = $_SERVER['REMOTE_ADDR'];

// Fetch geolocation data using IPAPI
$response =("http://ip-api.com/json/{$ip}");
$data = json_decode($response, true);

// Check if API response is valid
$countryCode = isset($data['status']) && $data['status'] === 'success' ? strtoupper($data['countryCode']) : 'OTHER';

// Detect device type
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($userAgent, 'android') !== false) {
    $deviceType = 'ANDROID';
} elseif (strpos($userAgent, 'iphone') !== false  strpos($userAgent, 'ipad') !== false  strpos($userAgent, 'ipod') !== false) {
    $deviceType = 'IOS';
} else {
    $deviceType = 'OTHER';
}

// CPA Offer URLs by Country & Device
$redirectUrls = [
    'US' => [
        'ANDROID' => 'https://applocked.org/cl/i/5ned63
',
        'IOS' => 'https://applocked.org/cl/i/5ned63
',
        'OTHER' => 'https://applocked.org/cl/i/5ned63
',
    ],
    'OTHER' => [
        'ANDROID' => 'https://applocked.org/cl/i/5ned63
',
        'IOS' => 'https://applocked.org/cl/i/5ned63
',
        'OTHER' => 'https://applocked.org/cl/i/5ned63
',
    ],
	'MX' => [
        'ANDROID' => 'https://pagelocked.org/cl/i/1x546d
',
        'IOS' => 'https://pagelocked.org/cl/i/1x546d
',
        'OTHER' => 'https://pagelocked.org/cl/i/1x546d
',
    ],
	'DE' => [
        'ANDROID' => 'https://pagelocked.org/cl/i/34ok6n
',
        'IOS' => 'https://pagelocked.org/cl/i/34ok6n
',
        'OTHER' => 'https://pagelocked.org/cl/i/34ok6n
',
    ],
	'BR' => [
        'ANDROID' => 'https://applocked.org/cl/i/m524xm
',
        'IOS' => 'https://applocked.org/cl/i/m524xm
',
        'OTHER' => 'https://applocked.org/cl/i/m524xm
',
    ],
	'Spain' => [
        'ANDROID' => 'https://applocked.org/cl/i/1x546p
',
        'IOS' => 'https://applocked.org/cl/i/1x546p
',
        'OTHER' => 'https://applocked.org/cl/i/1x546p
',
    ],
	'IT' => [
        'ANDROID' => 'https://lockverify.org/cl/i/m524xw
',
        'IOS' => 'https://lockverify.org/cl/i/m524xw
',
        'OTHER' => 'https://lockverify.org/cl/i/m524xw
',
    ],
	'FR' => [
        'ANDROID' => 'https://lockverify.org/cl/i/o4xk8d
',
        'IOS' => 'https://lockverify.org/cl/i/o4xk8d
',
        'OTHER' => 'https://lockverify.org/cl/i/o4xk8d
',
    ],
];

// Perform Redirection based on Country & Device
$url = $redirectUrls[$countryCode][$deviceType] ?? $redirectUrls[$countryCode]['OTHER'] ?? $redirectUrls['OTHER'][$deviceType];

// Perform the redirection
header('Location: ' . trim($url));
exit;
?>

<?php
header('Content-Type: application/json');
echo json_encode(array(
    'service' => 'labcorp-training-api',
    'status' => 'ok',
    'api_key_hint' => 'see config.php',
));

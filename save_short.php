<?php
$data = json_decode(file_get_contents('php://input'), true);
$code = $data['code'] ?? '';
$url  = $data['url'] ?? '';

if(!$code || !$url){
    echo json_encode(['success'=>false]);
    exit;
}

$file = 'links.json';
$links = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
$links[$code] = $url;
file_put_contents($file, json_encode($links));

echo json_encode(['success'=>true]);
?>

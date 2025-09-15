<?php
$code = $_GET['code'] ?? '';
$file = 'links.json';
$links = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

if(isset($links[$code])){
    header("Location: " . $links[$code]);
    exit;
}else{
    echo "Link tapılmadı!";
}
?>

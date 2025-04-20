<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Content-Type: application/json; charset=UTF-8");

$headers = getallheaders();
if (!isset($headers['Authorization']) || $headers['Authorization'] !== 'Bearer ciisa') {
    http_response_code(401);
    echo json_encode(['error' => 'No autorizado']);
    exit;
}

$aboutUs = [
    'mision'  => 'Brindar soluciones tecnológicas innovadoras que impulsen el crecimiento de nuestros clientes.',
    'vision'  => 'Ser líderes en consultoría y desarrollo de software a nivel nacional, generando valor y confianza.',
    'valores' => 'Innovación, compromiso, transparencia y calidad en cada proyecto.'
];

echo json_encode($aboutUs);
?>

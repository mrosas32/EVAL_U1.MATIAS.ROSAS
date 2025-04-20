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

$services = [
    [
        'id'          => 1,
        'title'       => 'Consultoría Digital',
        'description' => 'Brindamos asesoría para la transformación digital de tu empresa.'
    ],
    [
        'id'          => 2,
        'title'       => 'Soluciones Multiexperiencia',
        'description' => 'Creamos experiencias digitales integradas en múltiples dispositivos.'
    ],
    [
        'id'          => 3,
        'title'       => 'Evolución de Ecosistemas',
        'description' => 'Optimizamos y modernizamos tus plataformas tecnológicas para escalabilidad y seguridad.'
    ],
    [
        'id'          => 4,
        'title'       => 'Soluciones Low-Code',
        'description' => 'Desarrollamos aplicaciones rápidamente sin comprometer la calidad ni la flexibilidad.'
    ]
];

echo json_encode($services);
?>

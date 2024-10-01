<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

$data = [
    'Ahuachapan' => [
        'Restaurante El Portal',
        'Restaurante La Abuela',
        'Restaurante El Muelle',
    ],
    'Santa Ana' => [
        'Restaurante Simmer Down',
        'Café Tejas',
        'Restaurante La Pampa',
    ],
    'Sonsonate' => [
        'Restaurante El Mirador',
        'Restaurante Los Hules',
        'Restaurante La Cumbre',
    ],
    'La Libertad' => [
        'Restaurante Pacífico Mar',
        'Cafetería Las Delicias de las Chacón',
        'Restaurante El Pez Gordo',
    ],
    'San Salvador' => [
        'Restaurante La Pampa',
        'Restaurante El Zócalo',
        'Restaurante Casa de la Comida',
    ],
    'Cuscatlan' => [
        'Restaurante La Fonda',
        'Restaurante El Carruaje',
        'Restaurante La Casona',
    ],
    'Chalatenango' => [
        'Restaurante El Mirador',
        'Restaurante Don Chava',
        'Restaurante El Pato',
    ],
    'Cabañas' => [
        'Restaurante El Pez',
        'Restaurante Los Árboles',
        'Restaurante El Rancho',
    ],
    'San Vicente' => [
        'Restaurante El Bodegón',
        'Restaurante El Jardín',
        'Restaurante Las Brisas',
    ],
    'La Unión' => [
        'Restaurante Mar y Tierra',
        'Restaurante La Playa',
        'Restaurante El Faro',
    ],
    'Morazán' => [
        'Restaurante La Casita',
        'Restaurante El Rinconcito',
        'Restaurante El Cafecito',
    ],
    'Usulután' => [
        'Restaurante La Huerta',
        'Restaurante El Rancho',
        'Restaurante La Palapa',
    ],
    'San Miguel' => [
        'Restaurante El Sombrero',
        'Restaurante Los Sapos',
        'Restaurante La Cabaña',
    ],
];

$department = $_GET['department'] ?? '';

if (array_key_exists($department, $data)) {
    echo json_encode($data[$department]);
} else {
    echo json_encode([]);
}
?>

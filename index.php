<?php

$mapaOriginal = [
    ['~', '~', '~', '~', '~', '0', '0', 'G', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', '0', '0', 'G', 'G', 'G', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'G', '0', 'G', 'G', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', 'G', 'G', '0', '0', 'G', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', 'G', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', 'G', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
];


$impactos = [
    [2, 9], [3, 10], [5, 4], [11, 15], [14, 4], [17, 4], [1, 5], [3, 8], [6, 12], [8, 14], 
    [10, 3], [0, 2], [1, 20], [8, 2], [21, 5], [22, 10], [0, 0], [0, 1], [0, 3], [0, 4], 
    [0, 14], [0, 15], [0, 16], [0, 17], [0, 18], [0, 19], [0, 20], [0, 21], [0, 22], [0, 23], 
    [1, 0], [1, 1], [1, 2], [1, 13], [1, 14], [1, 15], [1, 16], [1, 17], [1, 18], [1, 19], 
    [1, 21], [1, 22], [1, 23], [2, 0], [2, 1], [2, 2], [2, 16], [2, 17], [2, 18], [2, 19], 
    [2, 20], [2, 21]
];

function mostrarMapa($mapa) {
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            echo $mapa[$i][$j] . " ";
        }
        echo "<br>";
    }
}


function zonaAfectada($mapa, $impactos) {
    for ($i = 0; $i < count($impactos); $i++) {
        $fila = $impactos[$i][0];
        $columna = $impactos[$i][1];
         if ($fila < count($mapa) && $columna < count($mapa[$fila])) {
            if ($mapa[$fila][$columna] == 'G') {
                $mapa[$fila][$columna] = 'S'; 
            }
        }
    }
    return $mapa;
}


function contarSigmas($mapa) {
    $contadorSigmas = 0;
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            if ($mapa[$i][$j] == 'S') {
                $contadorSigmas++;
            }

        }
    }

    $sigmasTotales = $contadorSigmas * 3000;
    $mililitros = $sigmasTotales * 10;
    $litros = $mililitros / 1000;

    return [$sigmasTotales,$litros];
}


function mapaDanos($mapa, $impactos) {
    for ($i = 0; $i < count($impactos); $i++) {
        $fila = $impactos[$i][0];
        $columna = $impactos[$i][1];
        if ($fila < count($mapa) && $columna < count($mapa[$fila])) {
            if ($mapa[$fila][$columna] == 'G') {
                $mapa[$fila][$columna] = 'S';
            } else if ($mapa[$fila][$columna] == '0') {
                $mapa[$fila][$columna] = 'X';
            } else if ($mapa[$fila][$columna] == '~') {
                $mapa[$fila][$columna] = 'W';
            }
        }
    }
    return $mapa;

}


function calcularCostes($mapa) {
    $sumaCostes = 0;
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            if ($mapa[$i][$j] == 'X') {
                $sumaCostes += 75000;
            } else if ($mapa[$i][$j] == 'S') {
                $sumaCostes += 250000;
            }
        }
    }
    return $sumaCostes;
}


function chillTotal($mapa) {
    $totalChill = 0;
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            if ($mapa[$i][$j] == '~') {
                $totalChill++;
            }
        }
    }
    return $totalChill;
}


function chillAfectado($mapa) {
    $ChillAfectado = 0;
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            if ($mapa[$i][$j] == 'W') {
                $ChillAfectado++;
            }
        }
    }
    return $ChillAfectado;
}


function calcularRecaudacion($totalChill, $ChillAfectado) {
    $horasLib = ($ChillAfectado / $totalChill) * 10000;
    $minutosLib = $horasLib * 60;
    return $minutosLib * 20;
}




$mapaGymbros = zonaAfectada($mapaOriginal, $impactos);
$sigmasTotalesLitros = contarSigmas($mapaGymbros);
$mapaDanosResultado = mapaDanos($mapaOriginal, $impactos);
$costes = calcularCostes($mapaDanosResultado);
$tChill = chillTotal($mapaOriginal);
$aChill = chillAfectado($mapaDanosResultado);
$recaudacion = calcularRecaudacion($tChill, $aChill);
$diferencia = $recaudacion - $costes;

echo "<h2>1. Mapa Original</h2>";
mostrarMapa($mapaOriginal);

echo "<h2>2. Zonas habitadas afectadas</h2>";
mostrarMapa($mapaGymbros);

echo "<h2>3. Población y Bebida</h2>";
echo "Sigmas afectados: " . $sigmasTotalesLitros[0] . "<br>";
echo "Litros necesarios: " . $sigmasTotalesLitros[1] . "<br>";

echo "<h2>4. Mapa de Daños Totales</h2>";
mostrarMapa($mapaDanosResultado);

echo "<h2>5. Costes de Reparación</h2>";
echo "Coste total: " . $costes . " €<br>";

echo "<h2>6. Zonas de Chill</h2>";
echo "Chill total: " . $tChill . " m²<br>";
echo "Chill afectado: " . $aChill . " m²<br>";

echo "<h2>7. Recaudación y Balance</h2>";
echo "Recaudación: " . $recaudacion . " €<br>";
echo "Diferencia: " . $diferencia . " €";
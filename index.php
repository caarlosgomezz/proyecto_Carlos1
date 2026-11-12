<?php
// Proyecto PHP: La Batalla de Aura
// Alumno de DAW

// Datos iniciales proporcionados[cite: 1]
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

// --- FUNCIONES ---

// 1. Mostrar mapa
function mostrarMapa($mapa) {
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            echo $mapa[$i][$j] . " ";
        }
        echo "<br>";
    }
}

// 2. Cambiar G por S
function marcarGymbros($mapa, $listaImpactos) {
    $mapaModificado = $mapa;
    for ($i = 0; $i < count($listaImpactos); $i++) {
        $fila = $listaImpactos[$i][0];
        $columna = $listaImpactos[$i][1];
        if (isset($mapaModificado[$fila][$columna]) && $mapaModificado[$fila][$columna] == 'G') {
            $mapaModificado[$fila][$columna] = 'S';
        }
    }
    return $mapaModificado;
}

// 3. Contar Sigmas
function contarSigmas($mapa) {
    $contadorSigmas = 0;
    for ($i = 0; $i < count($mapa); $i++) {
        for ($j = 0; $j < count($mapa[$i]); $j++) {
            if ($mapa[$i][$j] == 'S') {
                $contadorSigmas++;
            }
        }
    }
    return $contadorSigmas * 3000;
}

// 3. Litros de bebida
function calcularLitros($totalSigmas) {
    return ($totalSigmas * 10) / 1000;
}

// 4. Mapa de daños
function mapaDanos($mapa, $listaImpactos) {
    $mapaDanosTotales = $mapa;
    for ($i = 0; $i < count($listaImpactos); $i++) {
        $fila = $listaImpactos[$i][0];
        $columna = $listaImpactos[$i][1];
        if (isset($mapaDanosTotales[$fila][$columna])) {
            if ($mapaDanosTotales[$fila][$columna] == 'G') {
                $mapaDanosTotales[$fila][$columna] = 'S';
            } else if ($mapaDanosTotales[$fila][$columna] == '0') {
                $mapaDanosTotales[$fila][$columna] = 'X';
            } else if ($mapaDanosTotales[$fila][$columna] == '~') {
                $mapaDanosTotales[$fila][$columna] = 'W';
            }
        }
    }
    return $mapaDanosTotales;
}

// 5. Costes
function calcularCostes($mapaDanosTotales) {
    $sumaCostes = 0;
    for ($i = 0; $i < count($mapaDanosTotales); $i++) {
        for ($j = 0; $j < count($mapaDanosTotales[$i]); $j++) {
            if ($mapaDanosTotales[$i][$j] == 'X') {
                $sumaCostes += 75000;
            } else if ($mapaDanosTotales[$i][$j] == 'S') {
                $sumaCostes += 250000;
            }
        }
    }
    return $sumaCostes;
}

// 6. Chill total
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

// 6. Chill afectado
function chillAfectado($mapaDanosTotales) {
    $totalChillAfectado = 0;
    for ($i = 0; $i < count($mapaDanosTotales); $i++) {
        for ($j = 0; $j < count($mapaDanosTotales[$i]); $j++) {
            if ($mapaDanosTotales[$i][$j] == 'W') {
                $totalChillAfectado++;
            }
        }
    }
    return $totalChillAfectado;
}

// 7. Recaudación
function calcularRecaudacion($chillTotalMetros, $chillAfectadoMetros) {
    $horasTotales = 10000;
    $horasLiberadas = ($chillAfectadoMetros / $chillTotalMetros) * $horasTotales;
    $minutosLiberados = $horasLiberadas * 60;
    return $minutosLiberados * 20;
}


// --- LLAMADAS Y RESULTADOS (ECHOS AL FINAL) ---

$mapaGymbros = marcarGymbros($mapaOriginal, $impactos);
$totalSigmas = contarSigmas($mapaGymbros);
$litros = calcularLitros($totalSigmas);
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
echo "Sigmas afectados: " . $totalSigmas . "<br>";
echo "Litros necesarios: " . $litros . "<br>";

echo "<h2>4. Mapa de Daños Totales</h2>";
mostrarMapa($mapaDanosResultado);

echo "<h2>5. Costes de Reparación</h2>";
echo "Coste total: " . number_format($costes, 2, ',', '.') . " €<br>";

echo "<h2>6. Zonas de Chill</h2>";
echo "Chill total: " . $tChill . " m²<br>";
echo "Chill afectado: " . $aChill . " m²<br>";

echo "<h2>7. Recaudación y Balance</h2>";
echo "Recaudación: " . number_format($recaudacion, 2, ',', '.') . " €<br>";

if ($diferencia >= 0) {
    echo "Balance: Sobran " . number_format($diferencia, 2, ',', '.') . " €";
} else {
    echo "Balance: Faltan " . number_format($diferencia * -1, 2, ',', '.') . " €";
}
?>
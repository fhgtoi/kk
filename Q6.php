<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora retangulo</title>
</head>

<body>
    <h2>Calculadora de Retângulo</h2>

    <form method="get">
        Comprimento: <input type="number" name="comprimento" step="any" required><br><br>
        Largura: <input type="number" name="largura" step="any"><br><br>
        Área: <input type="number" name="area" step="any"><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_GET) {
        $comprimento = isset($_GET['comprimento']) ? (float)$_GET['comprimento'] : 0;
        $largura = isset($_GET['largura']) ? (float)$_GET['largura'] : 0;
        $area = isset($_GET['area']) ? (float)$_GET['area'] : 0;

        if ($comprimento > 0) {
            if ($largura > 0) {
                $calculatedArea = $comprimento * $largura;
                echo "<p>Área calculada: " . $calculatedArea . " unidades quadradas</p>";
            } elseif ($area > 0) {
                $calculatedLargura = $area / $comprimento;
                echo "<p>Largura calculada: " . $calculatedLargura . " unidades</p>";
            } else {
                echo "<p>Por favor, insira a largura ou a área para o cálculo.</p>";
            }
        } else {
            echo "<p>Por favor, insira um comprimento válido.</p>";
        }
    }
    ?>
</body>

</html>
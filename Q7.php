<?php
include 'quadrado.php';
$area = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado = $_POST['lado'];
    if (is_numeric($lado) && $lado > 0) {
        $quadrado = new quadrado();
        $quadrado->setlado($lado);
        $area = $quadrado->calculaArea();
    } else {
        $area = 'Por favor, insira um valor válido para o lado.';
    }
}
?>

<?php
class quadrado
{
    private $lado;
    public function setLado($lado)
    {
        $this->lado = $lado;
    }
    public function calculaArea()
    {
        return $this->lado * $this->lado;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a área do quadrado</title>
</head>

<body>
    <h1>Calculadora de Área do quadrado</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="lado">Lado do quadrado (em unidades):</label>
        <input type="text" id="lado" name="lado" required>
        <button type="submit">Calcular Área</button>
    </form>
    <?php if ($area !== ''); ?>
    <p><?php echo is_numeric($area) ? "A área do quadrado é: " . $area . " unidades quadradas. " : $area; ?></p>
</body>

</html>
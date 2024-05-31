<?php
// 124 letra A
class Adulto
{
    private $nome;
    private $idade;
    private $peso;

    public function __construct($nome, $idade, $peso)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
    }

    public function engordar($quantidade)
    {
        $this->peso += $quantidade;
    }

    public function emagrecer($quantidade)
    {
        $this->peso -= $quantidade;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}

// Criando uma instância do objeto Adulto
$guilherme = new Adulto("guilherme", 24, 75);

// Simulando ganho de peso
$guilherme->engordar(2); // Pedro ganhou 2 kg
echo "{$guilherme->nome} agora pesa {$guilherme->getPeso()} kg.";

// Simulando perda de peso
$guilherme->emagrecer(1); // Pedro perdeu 1 kg
echo "{$guilherme->nome} agora pesa {$guilherme->getPeso()} kg.";
?>

<?php
// 124 letra B
class TV
{
    private $ligada;
    private $canal;
    private $volume;

    public function __construct()
    {
        $this->ligada = false; // Inicialmente desligada
        $this->canal = 12; // Sempre inicia no canal 12
        $this->volume = 15; // Sempre inicia no volume 15
    }

    public function ligar()
    {
        $this->ligada = true;
    }

    public function desligar()
    {
        $this->ligada = false;
    }

    public function getCanal()
    {
        return $this->canal;
    }

    public function setCanal($canal)
    {
        $this->canal = $canal;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
}

// Criando uma instância da TV
$minhaTV = new TV();

// Ligar a TV
$minhaTV->ligar();

// Exibir o canal e volume iniciais
echo "Canal inicial: {$minhaTV->getCanal()} | Volume inicial: {$minhaTV->getVolume()}";

// Alterar o canal e volume
$minhaTV->setCanal(20);
$minhaTV->setVolume(18);

// Exibir os valores atualizados
echo "\nCanal atual: {$minhaTV->getCanal()} | Volume atual: {$minhaTV->getVolume()}";
?>
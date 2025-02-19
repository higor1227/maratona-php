<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amiguinhos & hb20</title>
</head>
<body>
    <?php 
    class Carro {
        public $cor;
        public $modelo;
        public $marca;
        public $ano;
        public $preco;

        public function __construct($cor, $modelo, $marca, $ano, $preco) {
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->ano = $ano;
            $this->preco = $preco;
        }
        public function imprimirInformacoes() {
            echo "Cor: $this->cor <br>";
            echo "Modelo: $this->modelo <br>";
            echo "Marca: $this->marca <br>";
            echo "Ano: $this->ano <br>";
            echo "Preço: $this->preco <br>";
        }

    }

    
    $carro1 = new Carro("Branco", "Hb20", "hyundai", 2015,  41.831);
    $carro1 -> imprimirInformacoes();
    echo "<br>";

    ?>
</body>
</html>
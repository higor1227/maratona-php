<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livros</title>
</head>
<body>
    <?php 
    class Livro {
        public $titulo;
        public $autor;
        public $ano;
        

        public function __construct($titulo, $autor, $ano,) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->ano = $ano;
            
        }
        public function imprimirInformacoes() {
            echo "Titulo: $this->titulo <br>";
            echo "Autor: $this->autor <br>";
            echo "Ano: $this->ano <br>";
            
        }
    }
    
    $livro1 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943);
    $livro1 -> imprimirInformacoes();
    echo "<br>";

    $livro2 = new Livro("A cabana", " William P. Young", 2007);
    $livro2 -> imprimirInformacoes();
    echo "<br>";
    
    $livro3 = new Livro("Diário de um Banana", "Jeff Kinney", 2007);
    $livro3 -> imprimirInformacoes();


    ?>
</body>
</html>
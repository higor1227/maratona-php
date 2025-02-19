<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class ContaCorrente {
    private $numeroConta;
    private $saldo;

    public function __construct($numeroDaConta, $saldo) {
        $this->numeroConta = $numeroDaConta;
        $this->saldo = $saldo;

    }
    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

}
    ?>
</body>
</html>
<?php

    class Retangulo {
        private $largura;
        private $altura;

    
        function __construct() {
            $this->largura = 1;
            $this->altura = 1;
        }

        public function setLargura ($largura) { $this->largura = $largura; }

        public function getLargura () { return $this->largura; }

        public function setAltura ($altura) { $this->altura = $altura; }

        public function getAltura () { $this->altura; }


        public function ehQuadrado ($largura, $altura) {
            if ($largura == $altura) {
                echo "É quadrado";
            } else {
                echo "Não é quadrado";
            }
        }
    }

    
    $retangulo1 = new Retangulo(4, 5);
    $retangulo1->ehQuadrado(4, 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
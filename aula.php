<?php

    class Livro {
        // Atributos
        private $titulo;
        private $autor;
        private $categoria;
        private $precoVenda;

        // Construtor
        function __construct($titulo, $autor, $categoria, $precoVenda) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->categoria = $categoria;
            $this->precoVenda = $precoVenda;
        }

        // Métodos
        public function setTitulo ($titulo) { $this->titulo = $titulo; }

        public function getTitulo () { return $this->titulo; }

        // public function setTitulo ($titulo) { $this->$titulo = $titulo } public function getTitulo () { return $this->$titulo }

        public function setAutor ($autor) { $this->$autor = $autor; }

        public function getAutor () { return $this->autor; }
    }

    $livro1 = new Livro("Senhor dos anéis: A sociedade do anel", "J.R. Tolkien", "Ficção Científica", "R$ 70,00");
    // $livro1->$setTitulo("Senhor dos anéis: A sociedade do anel");
    // $livro1->$setAutor("J.R. Tolkien");

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
    <?php
        echo $livro1->getTitulo();

    ?>
</body>
</html>
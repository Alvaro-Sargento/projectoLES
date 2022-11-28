<?php
   #configurações da base de dados
   $servidor = 'localhost';
   $dbname = 'sygec';
   $usuario = 'root';
   $usenha = '';

   #conectando a base de dados
   try {
       $con = new PDO ("mysql:host=$servidor;dbname=$dbname", $usuario, $usenha);
   } catch (PDOException $pe) {
       die("nao foi possivel se conectar a base de dados $dbname : " . $pe->getMessage());
   }
 ?>

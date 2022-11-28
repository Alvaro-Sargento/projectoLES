
<?php
    require_once 'config/config.php';


    $apelido = $_POST['apelido'];
    $nome = $_POST['nome'];
    $bi = $_POST['bi'];
    $nacionalidade = $_POST['nacionalidade'];
    $naturalidade = $_POST['naturalidade'];
    $data_Nasc = $_POST['data'];
    $bairro = $_POST['bairro'];
    $avenida = $_POST['avenida'];
    $casa = $_POST['casa'];


    $sql = "INSERT INTO `funcionario`(`nome`, `apelido`, `bi_Nr`, `nacionalidade`, `naturalidade`, `data_Nascimento`, `bairro`, `avenida`, `casa_Nr`) VALUES ('$nome','$apelido','$bi','$nacionalidade','$naturalidade','$data_Nasc','$bairro','$avenida','$casa')";


     $fun = $con->prepare($sql);
     if($fun->execute()){
     $fun->setFetchMode(PDO::FETCH_ASSOC);
        header("Location:index.html");
     } 
?>

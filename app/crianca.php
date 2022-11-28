<?PHP
    include_once 'config/config.php';

    $apelido = $_POST['apelidoC'] ?? NULL;
    $nome = $_POST['nomeC'] ?? NULL;
    $bi = $_POST['biC'] ?? NULL;
    $nacionalidade = $_POST['nacionalidadeC'] ?? NULL;
    $naturalidade = $_POST['naturalidadeC'] ?? NULL;
    $data_Nasc = $_POST['dataC'] ?? NULL;
    $bairro = $_POST['bairroC'] ?? NULL;
    $avenida = $_POST['avenidaC'] ?? NULL;
    $casa = $_POST['casaC'] ?? NULL;

    $sql = "INSERT INTO `crianca`(`nome`, `apelido`, `bi_Nr`, `nacionalidade`,
     `naturalidade`, `data_Nascimento`, `bairro`, `avenida`, `casa_Nr`) VALUES 
     ('$nome','$apelido','$bi','$nacionalidade','$naturalidade','$data_Nasc',
     '$bairro','$avenida','$casa')";

    $crianca = $con->prepare($sql);
    if($crianca->execute()){
        $crianca->setFetchMode(PDO::FETCH_ASSOC);
        header("Location:index.html");
    } 
?>
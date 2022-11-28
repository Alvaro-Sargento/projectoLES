<?PHP
    include_once 'config/config.php';

    $apelido = $_POST['apelidoE'] ?? NULL;
    $nome = $_POST['nomeE'] ?? NULL;
    $bi = $_POST['biE'] ?? NULL;
    $nacionalidade = $_POST['nacionalidadeE'] ?? NULL;
    $naturalidade = $_POST['naturalidadeE'] ?? NULL;
    $data_Nasc = $_POST['dataE'] ?? NULL;
    $bairro = $_POST['bairroE'] ?? NULL;
    $avenida = $_POST['avenidaE'] ?? NULL;
    $casa = $_POST['casaE'] ?? NULL;

    $sql = "INSERT INTO `encarregado`(`nome`, `apelido`, `bi_Nr`, `nacionalidade`,`naturalidade`,
     `data_Nascimento`, `bairro`, `avenida`, `casa_Nr`) 
     VALUES 
     ('$nome','$apelido','$bi','$nacionalidade','$naturalidade','$data_Nasc',
     '$bairro','$avenida','$casa')";

    $enc = $con->prepare($sql);
    if($enc->execute()){
        $enc->setFetchMode(PDO::FETCH_ASSOC);
        header("Location:index.html");
    } 
?>
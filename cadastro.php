<?php
session_start();
include("conexaobd.php");

$Email = mysqli_real_escape_string($conn, trim($_POST['Email']));
$Senha = mysqli_real_escape_string($conn, trim($_POST['Senha']));
$nomecompleto = mysqli_real_escape_string($conn, trim($_POST['nomecompleto']));

$sql = "select count(*) as total from cadastro where Email = '$Email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['nome_existe'] = true;
    header('Location: 01-index.php');
    exit;
}

$sql = "INSERT INTO cadastro (nomecompleto, Email, Senha) VALUES ('$nomecompleto', '$Email', '$Senha')";

if($conn->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
    header('Location: 01-index.php');

} else {
    echo "Erro ao cadastrar o usuário: " . $conn->error;
}

$conn->close();

exit;
?>





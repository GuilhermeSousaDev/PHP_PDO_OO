<?php
require_once 'vendor/autoload.php';

if(isset($_POST['enviar'])) {
    $produto = new \App\Model\Produto();
    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['descricao']);

    $create = new \App\Model\ProdutoDao();
    $create->create($produto);
}

if(isset($_GET['delete_id'])) {
    $id = filter_var($_GET['delete_id'],FILTER_SANITIZE_STRING);
    $produtoDelete = new \App\Model\ProdutoDao();
    $produtoDelete->delete($id);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP OO PDO</title>
</head>
<body>
    <?php
        foreach($produtoDao->Read() as $row) {?>
            <h1><?php echo $row['nome']?></h1>
            <p><?php echo $row['descricao']?></p>
            <a href="index.php?delete_id=<?php echo $row['id']?>">Deletar</a>
       <?php }
    ?>
    <form action="" method="POST">
        <input type="text" name="nome"><br><br>
        <input type="text" name="descricao">
        <button name="enviar">Criar</button>
    </form>
</body>
</html>
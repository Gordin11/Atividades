<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema 03</title>
  </head>
  <body>
  <?php
    if(isset($_GET["mensagem"]) & !empty($_GET["mensagem"])){
      if($_GET["mensagem"]=="sucesso"){
        echo "Dados gravados com sucesso!!!";
      }elseif ($_GET["mensagem"]=="erro") {
        echo "Erro ao gravar os dados!!!";
      }
    }
  ?>
  		<h1></h1>
    <form action="../controler/controle.php" method="post">
      <label>Descricao: </label>
      <input type="text" name="descricao" value="">
      <label>Valor Renda:</label>
      <input type="valor" name="valorrenda" value="">
      <label>Data:</label>
      <input type="date" name="data" value="data">
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>

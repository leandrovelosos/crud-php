<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios 
    WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php
        print $row->id;
    ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="
        <?php print $row->nome; ?>" id="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" value="
        <?php print $row->email; ?> "id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" required 
         <?php
         //required usado para pedir a nova senha de usuario, o campo não podera ser deixado em branco 
         ?>
         id="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" name="data_nasc" 
        value="<?php print $row->data_nasc; ?>" 
        id="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
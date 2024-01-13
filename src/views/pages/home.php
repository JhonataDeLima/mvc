<?php $render('header');?>

<h1>Olá <?php echo $_SESSION['nome'];?></h1> </br>
<h2>Usuarios Cadastrados</h2>

<table width="100%" border="1">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
</tr>

<?php foreach($usuarios as $usuario):?>
<tr>
    <td><?=$usuario['id'];?></td>
    <td><?=$usuario['nome'];?></td>
    <td><?=$usuario['email'];?></td>
    <td>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">[EDITAR]</a>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir">[EXCLUIR]</a>
    </td>
</th>
<?php endforeach; ?>
</table>
</br>
<form method="POST" action="<?=$base;?>/logout">
<input type="submit" value="Sair" />
</form>

</br></br>

<a href="<?=$base?>/registrar">Adicionar Usuario</a>
<?php $render('footer'); ?>
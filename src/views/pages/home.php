<?php $render('header');?>


<a href="<?=$base?>/registrar">Registrar Usuarios</a>



<h2>Usuarios Cadastrados</h2>

<table width="100%" border="1">
<tr>
    <th>nome</th>
    <th>email</th>
    <th>cidade</th>
    <th>ações</th>
</tr>

<?php foreach($usuarios as $usuario):?>
<tr>
    <td><?=$usuario['nome'];?></td>
    <td><?=$usuario['email'];?></td>
    <td><?=$usuario['cidade'];?></td>
    <td>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">[EDITAR]</a>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir">[EXCLUIR]</a>
    </td>
</th>
<?php endforeach; ?>
</table>


</br></br>
<?php $render('footer'); ?>
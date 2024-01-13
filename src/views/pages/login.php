<?php $render('header'); ?>


<form method="POST" action="<?=$base;?>/login">
    <label>
        <h3>Email:</h3>
        <input type="text" name="email">
    </label>
    <label>
        <h3>Senha:</h3>
        <input type="password" name="senha">
        </br> </br>
    </label>
        <input type="submit" value="ENTRAR">
</form>

    <a href="<?=$base?>/registrar">Registrar Usuario</a>

<?php $render('footer'); ?>
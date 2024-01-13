<?php $render('header'); ?>

<div class="outer-form">
<div class="inner-form">
<h2>Login</h2>
<form method="POST" action="<?=$base;?>/login">
    <label>
        <span>Email:</span> 
        </br>
        <input type="text" name="email">
        </br>
    </label>
    <label>
        <span>Senha:</span>
        </br>
        <input type="password" name="senha">
        </br> </br>
    </label>
        <input type="submit" value="ENTRAR">
</form>

    <a href="<?=$base?>/registrar">Registrar Usuario</a>

<?php $render('footer'); ?>
</div>
</div>

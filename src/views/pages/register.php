<?php $render('header'); ?>


<h2>Registro de Usuarios</h2>

<form method="POST" action="<?=$base;?>/registrar">

<label>
    <span>Nome</span>
    </br>
    <input type="text" name="nome" />
    </br>
</label>
<label>
    <span>E-mail</span>
    </br>
    <input type="email" name="email" />
    </br>
</label>
<label>
    <span>Senha</span>
    </br>
    <input type="password" name="senha" />
    </br></br>
</label>

<input type="submit" value="Registrar" />
</form>
<form method="POST"  action="<?=$base;?>/">
    <input type="submit" value="Voltar"/>
</form>


</br></br>
<?php $render('footer'); ?>
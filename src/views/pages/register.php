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
    <span>Cidade</span>
    </br>
    <input type="text" name="cidade" />
    </br>
</label>
<label>
    <span>Data de Nascimento</span>
    </br>
    <input type="date" name="dataNascimento" />
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

</br></br>
<?php $render('footer'); ?>
<?php $render('header'); ?>

<h2>Editar Usuario</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuarios['id'];?>/editar">

<label>
    <span>Nome</span>
    </br>
    <input type="text" name="nome" value="<?=$usuarios['nome'];?>" />
    </br>
</label>
<label>
    <span>E-mail</span>
    </br>
    <input type="email" name="email" value="<?=$usuarios['email'];?>"/>
    </br>
</label>
<label>
    <span>Cidade</span>
    </br>
    <input type="text" name="cidade" value="<?=$usuarios['cidade'];?>" />
    </br>
</label>
<label>
    <span>Data de Nascimento</span>
    </br>
    <input type="date" name="dataNascimento" value="<?=$usuarios['data_nascimento'];?>" />
    </br>
</label>
<label>
    <span>Senha</span>
    </br>
    <input type="password" name="senha" value="<?=$usuarios['senha'];?>" />
    </br></br>
</label>

<input type="submit" value="Salvar altresções" />


</form>

</br></br>
<?php $render('footer'); ?>
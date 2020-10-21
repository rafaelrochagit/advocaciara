<style type="text/css">
	#login {
		margin-top: 40px;
		margin-bottom: 40px;
	}	
</style>

<div id="login" class="row">

	<div class="offset-md-4 col-md-4">
		<?= $this->Flash->render() ?>   
		<h3>Login</h3>
		<?= $this->Form->create(null, ['url' => ['controller' => 'Login', 'action' => 'entrar']]) ?>
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="senha" placeholder="Senha">
			<input type="submit" class="btn btn-default" value="Entrar">
		<?= $this->Form->end() ?>
	</div>
</div>
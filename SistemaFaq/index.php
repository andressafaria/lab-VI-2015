<?php require_once 'header.php';?>

			<form action="javascript:void(0)">
				<p>Login:</p>
				<div>
					<label for="eLogin">E-mail:</label> <input type="text" id="eLogin">
				</div>
				<div>
					<label for="sLogin">Senha:</label> <input type="password" id="sLogin">
				</div>
				<div>
					<button onclick="fctLogin()">Entrar</button>
				</div>
				<span></span>
			</form>
<?php require_once 'footer.php';?>
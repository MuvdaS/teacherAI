<x-layout title="">
	<div class="container__loggin">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="/teachers/login" method="get">
				@csrf
				<div class="form_input">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" id="email" class="form-control forms_box">
				
					<label for="senha" class="form-label">Senha</label>
					<input type="password" name="senha" id="senha" class="form-control forms_box">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Entrar</button>
					</div>
				</div>
			</form>
			<a href="#" class="forget_password">Esqueci minha senha</a> <br>
			<a href="{{ route('teachers.create') }}" class="forget_password">Cadastre-se aqui</a>
		</div>
	</div>
</x-layout>
<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="/teachers/salvar" method="post">
				@csrf
				<div class="form_input">
				
					<label for="nome" class="form-label">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control forms_box"  placeholder="Digite aqui seu nome">
				
					<label for="instituicao" class="form-label">Instituição</label>
					<input type="text" name="instituicao" id="instituicao" class="form-control forms_box"  placeholder="Digite sua instituição">

					<label for="email" class="form-label">E-mail</label>
					<input type="email" name="email" id="email" class="form-control forms_box"  placeholder="Digite aqui seu e-mail">
				
					<label for="senha" class="form-label">Senha</label>
					<input type="password" name="senha" id="senha" class="form-control forms_box" placeholder="Digite sua senha" style="margin: 0px;">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Registrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
<x-layout title="">

	<div class="container__info">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="/teachers/info_email" method="get">
				@csrf
				<div class="form_input">
				
					<label for="email" class="form-label">Informe código recebido no e-mail:</label>
					<input type="email" name="email" id="email" class="form-control forms_box">
				
					<div class="form_button">
						<button type="button" class="btn rounded-pill">Enviar</button>
					</div>
				</div>
			</form>
			<a href="#" class="forget_password">Clique aqui para enviar novamente o código</a>
		</div>
	</div>

</x-layout>
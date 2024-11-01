<x-layout title="">

	<div class="container__password">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="/teachers/change_password method="get">
				@csrf
				<div class="form_input">
				
					<label for="email" class="form-label">Defina sua nova senha:</label>
					<input type="email" name="email" id="email" class="form-control forms_box">

					<label for="email" class="form-label">Repita a nova senha:</label>
					<input type="email" name="email" id="email" class="form-control forms_box">
				
					<div class="form_button">
						<button type="button" class="btn rounded-pill">Definir</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
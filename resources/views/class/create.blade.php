<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="{{ route('classes.store')}}" method="post">
				@csrf
				<div class="form_input">
				
					<label for="turma" class="form-label">Turma:</label>
					<input type="text" name="turma" id="turma" class="form-control forms_box"  placeholder="Digite aqui sua turma">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Registrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
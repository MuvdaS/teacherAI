<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="{{ route('subjects.store')}}" method="post">
				@csrf
				<div class="form_input">
				
					<label for="materia" class="form-label">Matéria</label>
					<input type="text" name="materia" id="materia" class="form-control forms_box"  placeholder="Digite aqui a materia">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Registrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
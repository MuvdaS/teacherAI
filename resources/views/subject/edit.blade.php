<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="{{ route('subjects.update', ['subject' => $subject]) }}" method="post">

				@csrf
				@method('PUT')
				<div class="form_input">
				
					<label for="materia" class="form-label">Matéria:</label>
					<input type="text" name="materia" id="materia" class="form-control forms_box" value="{{ $subject->name }}">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Atualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
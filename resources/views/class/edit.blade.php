<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="{{ route('classes.update', ['class' => $class]) }}" method="post">

				@csrf
				@method('PUT')
				<div class="form_input">
				
					<label for="turma" class="form-label">Turma</label>
					<input type="text" name="turma" id="turma" class="form-control forms_box"  placeholder="Digite aqui seu turma"
					value="{{ $class->name }}">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Atualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="{{ route('tasks.update', ['task' => $task]) }}" method="post">

				@csrf
				@method('PUT')
				<div class="form_input">
				
					<label for="resposta" class="form-label">RespostaTest</label>
					<input type="text" name="resposta" id="resposta" class="form-control forms_box" value="{{ $task->response }}">
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Atualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
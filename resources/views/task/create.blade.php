<x-layout title="">

	<div class="container__signup">
		<div class="painel">
			<h1 class="title_loggo">TeacherAI</h1>
			<form action="{{ route('tasks.store')}}" method="post">
				@csrf
				<div class="form_input">
				
					<label for="resposta" class="form-label">RespostaTest</label>
					<textarea type="text" name="resposta" id="resposta" class="form-control forms_box"  placeholder="Digite aqui RespostaTest" rows="3"></textarea>
				
					<div class="form_button">
						<button type="submit" class="btn rounded-pill">Registrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>
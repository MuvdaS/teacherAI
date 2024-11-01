<x-layout title="TeacherAI Test">

	<a href="{{ route('tasks.create') }}" class="btn btn-success">Adicionar</a>

	@isset($mensagemSucesso)	
		<div class="alert alert-success mb-2">
			{{ $mensagemSucesso }}
		</div>
	@endisset

	<ul class="list-group mb-2">
		@foreach ($tasks as $task)
			<li class="list-group-item d-flex justify-content-between align-items-center">
				{{ $task->response }}

				<span class="d-flex">
					<a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn btn-primary me-2">Editar</a>

					<form action="{{ route('tasks.destroy', ['task' => $task] ) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</span>
			</li>
		@endforeach
	</ul>
</x-layout>
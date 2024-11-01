<x-layout title="TeacherAI Test">

	<a href="{{ route('subjects.create') }}" class="btn btn-success">Adicionar</a>

	@isset($mensagemSucesso)	
		<div class="alert alert-success mb-2">
			{{ $mensagemSucesso }}
		</div>
	@endisset

	<ul class="list-group mb-2">
		@foreach ($subjects as $subject)
			<li class="list-group-item d-flex justify-content-between align-items-center">
				{{ $subject->name }}

				<span class="d-flex">
					<a href="{{ route('subjects.edit', ['subject' => $subject]) }}" class="btn btn-primary me-2">Editar</a>

					<form action="{{ route('subjects.destroy', ['subject' => $subject] ) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</span>
			</li>
		@endforeach
	</ul>
</x-layout>
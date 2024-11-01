<x-layout title="TeacherAI Test">

	<a href="{{ route('classes.create') }}" class="btn btn-success">Adicionar</a>

	@isset($mensagemSucesso)	
		<div class="alert alert-success mb-2">
			{{ $mensagemSucesso }}
		</div>
	@endisset

	<ul class="list-group mb-2">
		@foreach ($classes as $class)
			<li class="list-group-item d-flex justify-content-between align-items-center">
				{{ $class->name }}

				<span class="d-flex">
					<a href="{{ route('classes.edit', ['class' => $class]) }}" class="btn btn-primary me-2">Editar</a>

					<form action="{{ route('classes.destroy', ['class' => $class] ) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</span>
			</li>
		@endforeach
	</ul>
</x-layout>
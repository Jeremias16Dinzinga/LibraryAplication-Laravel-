@extends('templents.templent')

@section('content')
    <br/>
	<div class="col-8 m-auto">
        <a class="btn btn-primary" href="{{url('books/')}}" role="button">
		    <span class="oi oi-spreadsheet" title="Cadastro" aria-hidden="true"></span>
		    <span>Todos os lívros</span>
        </a><hr/>
    </div> 	

	@if(isset($errors) && count($errors)>0)
		<div class=" text-center mt-4 mb-4 p-2 alert-danger">
			@foreach($errors->all() as $erro)
				{{$erro}}<br/>
			@endforeach
		</div>
    @endif
	
	<div class="row">
		<div class="col-8 m-auto">
			<h1 class="text-center">@if(isset($book)) Editar lívro @else Cadastrar novo lívro @endif</h1><hr>
	
		@if(isset($book))	
			<form name="formEdit" id="formEdit" method="POST" action="{{url("books/$book->id")}}">
			@method('PUT')
        @else
			<form name="formCad" id="formCad" action="{{url('books/')}}" method="POST">
		@endif
			@csrf
				<div class="form-group">
					<label for="titulo">Título</label>
					<input id="title" name="title" class="form-control" type="text" value="{{$book->title ?? ''}}" aria-describedby="inputHelp" placeholder="inserir título" required/>
				</div>
                <div class="form-group">
					<select class="form-control" name="id_user" id="id_user" requred>
                        <option value="{{$book->relUser->id ?? ''}}" >{{$book->relUser->name ?? 'Autor'}}</option>
                      @foreach($users as $user)      
                        <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                    </select>
				</div>
				<div class="form-group">
					<label for="Pages">Páginas</label>
					<input id="pages" name="pages" class="form-control" type="number" value="{{$book->pages ?? ''}}" placeholder="número de páginas" required/>					
				</div>
                <div class="form-group">
					<label for="price">Preço</label>
					<input id="price" name="price" class="form-control" type="text" value="{{$book->price ?? ''}}" aria-describedby="inputHelp" placeholder="inserir o preço" required/>
				</div>
				<button class="btn btn-primary" type="submit">
					@if(isset($book)) 
					    Salvar alteração <span class="oi oi-check" title="Cadastro" aria-hidden="true"></span> 
					@else 
						Cadastrar <span class="oi oi-check" title="Cadastro" aria-hidden="true"></span>
					@endif
				</button>
			</form>
		</div>
	</div>		 
@endsection
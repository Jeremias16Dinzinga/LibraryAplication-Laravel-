@extends('templents.templent')

@section('content')
    <br/><div class="col-8 m-auto">
        <a class="btn btn-primary" href="{{url('books/')}}" role="button">
		    <span class="oi oi-spreadsheet" title="Cadastro" aria-hidden="true"></span>
		    <span>Todos os lívros</span>
        </a><hr/>
    </div> 
    <div class="col-8 m-auto">
        <h1 class="text-center">Detalhes do Lívro</h1><hr>         

         <span>Título: {{$book->title}}</span><br>
         <span>Preço: {{$book->price}} Kz</span><br>
         <span>Autor: {{$book->relUser->name}}</span><br>
         <span>Email do autor: {{$book->relUser->email}}</span>
         
    </div>
    

@endsection

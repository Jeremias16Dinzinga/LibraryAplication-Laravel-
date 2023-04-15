@extends('templents.templent')

@section('content')
    <h1 class="text-center">Lívros</h1><hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}" class=" col-2 btn btn-primary">        
            <span class="oi oi-collapse-down" title="Cadastro" aria-hidden="true"></span> 
             Cadastrar             
        </a>
    </div> 

    <div class="col-8 m-auto">
     @csrf
    <table class="table table-striped">
			<thead>
				<tr>
				<th>Títuto</th>
				<th>Autor</th>
				<th>Preço</th>	
                <th class="text-center">Action</th>	
				</tr>
			</thead>
			<tbody>
            @foreach($books as $book)    
				<tr>
					<td>{{$book->title}}</td>
					<td>{{$book->relUser->name}}</td>
					<td>{{$book->price}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{url("books/show/$book->id")}}">
                            Visualizar
                            <span title="delete" class="oi oi-eye" aria-hidden="true"/><span>
                        </a>
                        <a class="btn btn-primary" href="{{url("books/$book->id/edit")}}">
                            Editar
                            <span title="delete" class="oi oi-pencil" aria-hidden="true"/><span>
                        </a>
                        <a href="" data-toggle="modal" data-target="#exemploModal{{$book->id}}" class="btn btn-danger" >
                              <span title="delete" class="oi oi-trash" aria-hidden="true"/><span>
                        </a>
                    </td>						
				</tr>
                
                <!-- Model of confirmation "Yes or "NO" for delete book -->
                <div class="row">
                    <div class="col-12">
                        <div id="exemploModal{{$book->id}}" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Confirmar a acção</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Desejas mesmo eliminar o lívro?</p>
                                    </div>
                                    <div class="modal-footer">
                                    <a href="{{url("books/delete/$book->id")}}">
                                         <button class="btn" style="background-color: #1e94d2; color:#ffffff;">Sim</button>
                                    </a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <!-- end of model -->

             @endforeach   
			</tbody>
		</table>
        {{$books->links()}}
    </div>

@endsection


@extends('layout.mainlayout')

@section('content')

<div class="container text-header">
      <h1 class="titre">{{$title}}</h1>
</div>

 <div class="container content">
        <div class="row">
          <div class="col-md-6">
            <div class="blc-button">
                <a class="btn btn-primary btn-sm" href="{{ route('dejeuner.create') }}" ><i class="fas fa-plus"></i> Ajouter</a>
            </div>
          </div>

          <div class="col-md-6">
            @if ($message = Session::get('success'))          
              <div class="alert alert-dismissible alert-primary">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <p class="mb-0">Success!!! {{ $message }}</p>
              </div>
            @endif 
          </div>
        </div>
          
        <div class="row">
           <div class="col-md-12">
            
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Libelle</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th class="align-center action">Action</th>
                      </tr>
                    </thead>

                  @forelse ($resultats as $result)
                    <tr>
                      <td>{{$result->id}}</td>
                      <td>{{$result->libelle}}</td>
                      <td>{{$result->description}}</td>
                      <td>{{$result->prix}}</td>
                      <td class="align-center action-button">
                        <a class="btn btn-primary btn-sm" href="{{ route('dejeuner.show',$result->id) }}">Detail</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('dejeuner.edit',$result->id) }}">Modifier</a>
                        <form action="{{ route('dejeuner.destroy',$result->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm btn-update">Supprimer</button> 
                        </form>
                      </td>
                    </tr>
                     @empty
                            <h3>No products</h3>
                   @endforelse
            </table> 

            <br />   
            <div class="center">
                {!! $resultats->links() !!}
            </div>
      </div>
      </div>
  </div>
        
@endsection


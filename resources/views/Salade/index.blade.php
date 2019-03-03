@extends('layout.mainlayout')

@section('content')

<div class="container text-header">
      <h1 class="titre">Déjeuner</h1>
</div>

 <div class="container content">
        <div class="row">
          <div class="col-md-6">
            <div class="blc-button">
                <a class="btn btn-primary btn-sm" href="{{ route('salades.create') }}" ><i class="fas fa-plus"></i> Ajouter</a>
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

                  @forelse ($salades as $salade)
                    <tr>
                      <td>{{$salade->id}}</td>
                      <td>{{$salade->libelle}}</td>
                      <td>{{$salade->description}}</td>
                      <td>{{$salade->prix}}</td>
                      <td class="align-center action-button">
                        <a class="btn btn-primary btn-sm" href="{{ route('salades.show',$salade->id) }}">Detail</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('salades.edit',$salade->id) }}">Modifier</a>
                        <form action="{{ route('salades.destroy',$salade->id) }}" method="POST">
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
                {!! $salades->links() !!}
            </div>
  </div>
        
@endsection


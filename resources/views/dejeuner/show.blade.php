@extends('layout.mainlayout')

@section('content')

<div class="container text-header">
      <h1 class="titre">{{$title}}</h1>
</div>

 <div class="container content">
    <div class="row">
        <div class="col-md-6">
            <div class="blc-button">
                <a class="btn btn-primary btn-sm" href="{{ route('dejeuner.index') }}"><i class="fas fa-chevron-left"></i>  Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
                      <div class="box box-info">
                          <div class="box box-solid">
                                  <div class="box-body">
                                    <dl>
                                      <dt>Libelle:</dt>
                                      <dd>{{ $resultat->libelle}}</dd>
                                      <dt>Description:</dt>
                                      <dd>{{ $resultat->description}}</dd>
                                      <dt>Prix:</dt>
                                      <dd>{{ $resultat->prix}}</dd>
                                      </dl>
                                  </div>
                                </div>
                      </div>
                  </div>  
                  
                  <div class="col-md-4">
                          <div class="box box-success">
                          <div class="box-header">
                              <dt class="box-title">Visuel</dt>
                          </div>
                              <br> 
                              <img src="{{url('images', $resultat->image)}}" class="img-thumbnail img-center" width="100%"/> 
                              <br>
                          </div> 
                  </div>

    </div>
  </div>
        
@endsection


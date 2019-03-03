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
                             {!! Form::open(['route' => ['dejeuner.update',$resultat->id], 'method'=> 'PATCH', 'files'=> true]) !!}
                                <div class="box-body">
                                        <div class="form-group">
                                            {{ Form::label('libelle', 'Libelle') }}
                                            {{ Form::text('libelle', $resultat->libelle, array('class'=> 'form-control'))}}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('description', 'Description') }}
                                            {{ Form::text('description', $resultat->description, array('class'=> 'form-control'))}}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('prix', 'Prix')}}
                                            {{ Form::text('prix', $resultat->prix, array('class'=> 'form-control'))}}
                                        </div>
                                    
                                        <div class="form-group">
                                            {{ Form::label('image', 'Visuel') }}
                                            {{ Form::file('image', array('class'=> 'form-control')) }}
                                        </div> 

                                        {{ Form::text('old_image', $resultat->image, array('class'=> 'hidden'))}}

                                </div>
                                <div classs="col-md-4 aside-right">
                                    {{ Form::submit('Modifier', array('class'=> 'btn btn-primary btn-sm'))}}
                                </div> 
                                {!! Form::close() !!}
                            </div>
                        </div>
                  </div>  
                  
            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header">
                        <dt class="box-title">Visuel</dt>
                    </div>
                    <br> 
                    <img src="{{url('images', $resultat->image)}}" class="img-thumbnail img-center" width="100%"/> <br>
              </div> 
            </div>
    </div>
  </div>
        
@endsection


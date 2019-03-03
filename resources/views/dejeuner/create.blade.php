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
                             {!! Form::open(['route' => 'dejeuner.store', 'method'=> 'post', 'files'=> true]) !!}
                                <div class="box-body">
                                        <div class="form-group">
                                            {{ Form::label('libelle', 'Libelle') }}
                                            {{ Form::text('libelle', null, array('class'=> 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('description', 'Description') }}
                                            {{ Form::text('description', null, array('class'=> 'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('prix', 'Prix') }}
                                            {{ Form::text('prix', null, array('class'=> 'form-control')) }}
                                        </div>
                                    
                                        <div class="form-group">
                                            {{ Form::label('image', 'Visuel') }}
                                            {{ Form::file('image', array('class'=> 'form-control')) }}
                                        </div> 
                                </div>
                                <div classs="col-md-4 aside-right">
                                    {{ Form::submit('Enregister', array('class'=> 'btn btn-primary btn-sm'))}}
                                </div> 
                                {!! Form::close() !!}
                            </div>
                        </div>
                  </div>  
              
              </div>
  </div>
        
@endsection


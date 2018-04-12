@extends('layout.app')

@section('content')

<div class="container"> 
    <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-md-8 col-md-offset-2">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading"> <center>Espace d'enregistrement des Chorales</center> </div>
            <div class="panel-body"> 
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="col-md-6">
                      
            <form method="POST" action="{{route('register_path')}} "  >
                {{csrf_field()}}
                
                        <div class="form-group {{$errors->has('nom') ? 'has-error' : ''}}">
                            <label for="nom" class="control-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" required="required">
                            {!! $errors->first('nom', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{$errors->has('paroisse') ? 'has-error' : ''}}">
                            <label for="paroisse" class="control-label">paroisse</label>
                            <input type="text" name="paroisse" id="paroisse" class="form-control" required="required">
                            {!! $errors->first('paroisse', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{$errors->has('localisation') ? 'has-error' : ''}}">
                            <label for="localisation" class="control-label">localisation</label>
                            <input type="text" name="localisation" id="localisation" class="form-control" required="required">
                            {!! $errors->first('localisation', '<span class="help-block">:message</span>') !!}
                        </div>
                    
                         <div class="form-group {{$errors->has('effectif') ? 'has-error' : ''}}">
                            <label for="effectif" class="control-label">Effectif</label>
                            <input type="text" name="effectif" id="effectif" class="form-control" required="required">
                            {!! $errors->first('effectif', '<span class="help-block">:message</span>') !!}
                         </div>

                    </div>

                    <div class="col-md-6"> 

                    <div class="form-group {{$errors->has('datecrea') ? 'has-error' : ''}}">
                            <label for="date_picker" class="control-label">Date de création</label>
                            <input type="text" name="datecrea" id="date_picker" class="form-control" required="required">
                            {!! $errors->first('datecrea', '<span class="help-block">:message</span>') !!}
                        </div>

                         <div class="form-group  {{$errors->has('Nature') ? 'has-error' : ''}}">
                              <label for="nature">Nature</label>
                              <select class="form-control" id="type" name="nature" >
                                <option>Enfant</option>
                                <option>jeune</option>
                                <option>Adulte</option>
                                
                              </select>
                         {!! $errors->first('type', '<span class="help-block">:message</span>') !!}
                            </div> 

                        <div class="form-group {{$errors->has('age') ? 'has-error' : ''}}">
                            <label for="age" class="control-label">Age</label>
                            <input type="text" name="age" id="nature" class="form-control" required="required">
                            {!! $errors->first('age', '<span class="help-block">:message</span>') !!}
                        </div>


                        <div class="form-group  {{$errors->has('type') ? 'has-error' : ''}}">
                              <label for="type">Type de Chorale</label>
                              <select class="form-control" id="type" name="type" >
                               
                                <option>Grégorien</option>
                                <option>en français</option>
                                <option>en langue</option>
                              </select>
                         {!! $errors->first('type', '<span class="help-block">:message</span>') !!}
                            </div> 
                      
                    </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Soumettre &raquo;</button>
                        </div>
                      </div>
                       
                    </div>
                
                        
                 </form> 
            </div>
             <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
           </div>  
          
        </div>

    </div>
    
@stop
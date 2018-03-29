@extends('layout.template')

@section('contenu')
<div class="container"> 
    <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-md-8 col-md-offset-2">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading"> <center>Création d'un utilisateur</center> </div>
            <div class="panel-body"> 
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="col-md-6">
                      
            <form method="POST" action="{{route('register_path')}} " >
                {{csrf_field()}}
                
                        <div class="form-group {{$errors->has('nom') ? 'has-error' : ''}}">
                            <label for="nom" class="control-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" required="required">
                            {!! $errors->first('nom', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{$errors->has('prenom') ? 'has-error' : ''}}">
                            <label for="prenom" class="control-label">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" required="required">
                            {!! $errors->first('prenom', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{$errors->has('datenaiss') ? 'has-error' : ''}}">
                            <label for="dn" class="control-label">Date de naissance</label>
                            <input type="text" name="datenaiss" id="datenaiss" class="form-control" required="required">
                            {!! $errors->first('datenaiss', '<span class="help-block">:message</span>') !!}
                        </div>
                    
                         <div class="form-group {{$errors->has('profession') ? 'has-error' : ''}}">
                            <label for="profession" class="control-label">Profession</label>
                            <input type="text" name="profession" id="profession" class="form-control" required="required">
                            {!! $errors->first('profession', '<span class="help-block">:message</span>') !!}
                         </div>

                        <div class="form-group {{$errors->has('debutdirection') ? 'has-error' : ''}}">
                            <label for="ddirect" class="control-label">Debut de direction</label>
                            <input type="text" name="debutdirection" id="ddirect" class="form-control" required="required">
                            {!! $errors->first('debutdirection', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group  {{$errors->has('instrument') ? 'has-error' : ''}}">
                              <label for="instrument">Instrumentiste?</label>
                              <select class="form-control" id="instrument" name="instrument" >
                                <option>Piano</option>
                                <option>Trompette</option>
                                <option>Saxo</option>
                                <option>Batterie</option>
                              </select>
                         {!! $errors->first('instrument', '<span class="help-block">:message</span>') !!}
                            </div> 
                        </div>
                    <div class="col-md-6">

                        <div class="form-group {{$errors->has('contact1') ? 'has-error' : ''}}">
                            <label for="contact1" class="control-label">Contact1</label>
                            <input type="text" name="contact1" id="contact1" class="form-control" required="required">
                            {!! $errors->first('contact1', '<span class="help-block">:message</span>') !!}
                        </div>
                    
                        <div class="form-group {{$errors->has('contact2') ? 'has-error' : ''}}">
                            <label for="contact2" class="control-label">Contact2</label>
                            <input type="text" name="contact2" id="contact2" class="form-control" required="required">
                            {!! $errors->first('contact2', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{$errors->has('localisation') ? 'has-error' : ''}}">
                            <label for="localisation" class="control-label">Localisation</label>
                            <input type="text" name="localisation" id="localisation" class="form-control" required="required">
                            {!! $errors->first('localisation', '<span class="help-block">:message</span>') !!}
                        </div>


                         <div class="form-group {{$errors->has('nationalité') ? 'has-error' : ''}}">
                            <label for="nationalité" class="control-label">Nationalité</label>
                            <input type="text" name="nationalite" id="nationalité" class="form-control" required="required">
                            {!! $errors->first('contact1', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group  {{$errors->has('statut') ? 'has-error' : ''}}">
                              <label for="statut">statut</label>
                              <select class="form-control" id="statut" name="statut" required="required">
                                <option>Titulaire</option>
                                <option>Adjoint</option>
                              </select>
                         {!! $errors->first('statut', '<span class="help-block">:message</span>') !!}
                            </div> 

                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email" class="control-label">email</label>
                            <input type="text" name="email" id="email" class="form-control" required="required">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>

                         
                        
                      </div>
                      <div class="form-group">
                            <button class="btn btn-primary btn-block">Soumettre &raquo;</button>
                        </div>
                    </div>
                
                        
                 </form> 
            </div>
           </div>  
           <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
        </div>

    </div>
    
@stop

@extends('layout.app')

@section('content')



<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">BIENVENU</div>
					<div class="panel-body">

						
					<center><b><h1>Mot du Président</h1></b></center>	
          <div class="col-sm-4">
					<img class="img-responsive" src="{{URL::asset('img/avatar.png')}}" class="pull-left gap-right"></div>

					<div class="col-md-8">
				</p>	Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.
				Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines 	<p>
					</div>	
             
<div class="col-sm-12"> 
<p> Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.

Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.

 </p></div>
							
					
						
					

					</div>
				</div>
				<center> <div class="form-group" >
					<a class="btn btn-primary " href="{{route('register_path')}}"><h5>Enregistrement CDC &raquo;</h5></a>&nbsp; &nbsp; &nbsp;
					<a class="btn btn-primary " href="{{route('chorale_path')}}"><h5> Enregistrement Chorale &raquo;</h5></a>
				</center>
				</div>
				
				<style type="text/css">
					.container{
						padding-top: 10px; 
					}

			 .gap-right {
			  margin-right: 10px; 
			}
				</style>
			</div>


		</div>
	</div>


@stop

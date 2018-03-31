@extends('layout.template')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">BIENVENU</div>
					<div class="panel-body">
						
						<div class="col-sm-4">
						<img class="img-responsive" src="{{URL::asset('img/avatar.png')}}">
						</div>
               
						<div class="col-sm-8">
								<h1>Bonjour à tous</h1>

						Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.

Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.

Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.

Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis iam Galli secreta susceperint scripta, qui conpertis Antiochiae gestis per minorem Armeniam lapsus Constantinopolim petit exindeque per protectores retractus artissime tenebatur.
							
						</div>
						
					

					</div>
				</div>
				<center> <div class="form-group" >
					<a class="btn btn-primary " href="{{route('register_path')}}"><h4>Enregistrement CDC &raquo;</h4></a>&nbsp; &nbsp; &nbsp;
					<button class="btn btn-primary "><h4> Enregistrement Chorale &raquo;</h4></button>
				</center>
				</div>
				
				<style type="text/css">
					.container{
						padding-top: 10px; 
					}
				</style>
			</div>


		</div>
	</div>


@stop



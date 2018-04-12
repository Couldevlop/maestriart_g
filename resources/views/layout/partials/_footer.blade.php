<footer class="text-center">
	
	<p>&copy {{date('Y')}} {{config('app.name')}} <br>
	 Web master <a href="https//:twitter.com/THOMAS">Maestro Thomas Coulibaly</a></p> 

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="{{URL::asset('js/jquery-ui.js')}}"></script>

            <script>
                  $(function() {
					            $( 'input[id^="date_"]' ).each(function() {
					            $(this).datepicker();
					            });
					});

           
                      $('.selectpicker').selectpicker({
                          style: 'btn-info',
                          size: 4
                        });
                  </script>

                  <script type="text/css">
                  	
                  	footer{
                  		margin-top:-20px;

                  	}


                  </script>
</footer>
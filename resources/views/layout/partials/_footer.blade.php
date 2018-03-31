<footer class="text-center">
	
	<p>&copy {{date('Y')}} {{config('app.name')}} by <a href="https//:twitter.com/THOMAS">THOMAS</a></p> 

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
                  <script>
                  $(function() {
					 $( 'input[id^="date_"]' ).each(function() {
					    $(this).datepicker();
					  });
					});
                  </script>
</footer>
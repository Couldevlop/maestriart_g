 <nav class="navbar navbar-expand-md navbar-dark  static-top bg-dark">
      <a class="navbar-brand" href="{{route('root_path')}}">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="{{set_active_route('root_path')}}">
            <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="{{set_active_route('about_path')}}">
            <a class="nav-link" href="{{route('register_path')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Artisan</a>
          </li>
          
           <li class="{{set_active_route('contact_path')}}">
            <a class="nav-link disabled" href="{{route('contact_path')}}">Contact</a>
          </li>
        </ul>

        <ul class="navbar navbar-nav navbar-right ">
            <li>
              <a class="nav-link disabled" href="#">Login</a>
            </li>

             <li>
              <a class="nav-link disabled" href="#">Register</a>
            </li>
        </ul>
        
      </div>
    </nav>
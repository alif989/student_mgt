<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    </head>
    <style>
          #content {
    width: 400px;
    margin: 0 auto;
    
}
      
    </style>
    

    <body>
      <br>
      <div class="container" id="content">
        <div class="panel-group" style="width:100%">
          <div class="panel panel-default panel-success">
            <div class="panel-heading">Login Form</div>
            <div class="panel-body">
              <div class="row">
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                  
                </div> 
                @endif
                <form class="from-control" action="{{route('store')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input class="form-control" value="{{old('email')}}" type="text" name="email" />  
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" value="{{old('password')}}" type="text" name="password" />  
                  </div>
                  <button type="submit" value="" class="btn btn-success"> Submit </button>
                </form>
              </div>  
            </div>
          </div>
        </div> 
      </div>
    </body>
</html>
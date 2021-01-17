<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>contact form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     
       
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">Portia Hair</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <div class="container" >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0  " >
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/homepage">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">How To Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Our Product</a>
                </li>
              </ul>
            </div>
            <span class="navbar-text">
             
             <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
            </span>
          </div>
        </div>
      </nav>


      @yield('content')

      
  <div class="card-footer" style="margin-top:150px; !important">
  <p class="" style="text-align:center; !important" >Copyright 2020 Pizza House</p>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>




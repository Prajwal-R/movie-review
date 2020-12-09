 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>review</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
 <!-- <a class="navbar-brand" href="#">movies</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav center">
    <li class="nav-item">
        <a class="nav-link active" href="view_reviews">ALL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">English</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hindi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kannada</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">telugu</a>
      </li> 
      <li class="nav-item ">
        <a class="nav-link" href="#">tamil</a>
      </li>  
      <li class="nav-item ">
        <a class="nav-link" href="#">malayalam</a>
      </li>  
    </ul>
  </div> 
  </nav>
  <br>
  <br>
  <br>

 <div class="container">

<div class="row">
     @foreach($reviews as $review)     
     <div class="col-sm-3">

     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$review->poster}}" alt="poster">
  <div class="card-body">
    <h5 class="card-title">{{$review->movie_name}}</h5>
    <p class="card-text">{{$review->language}}</p>
    <p class="card-text">{{$review->genre}}</p>
    <p class="card-text">{{$review->release_year}}</p>
    <p class="card-text">{{$review->actors}}</p>
    <p class="card-text">{{$review->description}}</p>
  </div>
</div>
</div>

    

    
 
     @endforeach
 </body>
 </div>

</div>
 </html>
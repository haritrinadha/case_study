<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
      <div style="background: #FF175D;">
 <div style="display:flex; justify-content:center;"><header>
     <h1 style="color:#fff">Welcome</h1>
    </header>
    </div><hr>
    <div style="display:flex; justify-content:right;">
    <h4><a style="color:#fff" href="/login">Login</a></h4><pre> | </pre>
    <h4><a style="color:#fff" href="/register">Register</a></h4>
    </div>
    </div><br>
<main class="container">


  <div class="col mb-2">


  @foreach ($users as $user)
  <?php
  $a=$user->Status;
  if($a == "Publish"){

  ?>
    <div class="col-md-15">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{$user->Category}}</strong>
          <h3 class="mb-0">{{$user->Title}}</h3>
          <div class="mb-1 text-muted">{{$user->created_at}}</div>
          <p class="card-text mb-auto">{{$user->Description
              }}</p>
          <a href="/read/{{$user->Id}}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">

        </div>
      </div>
    </div>
    <?php } ?>
    @endforeach
   
  </div>

</main>
<div style="display:flex; justify-content:center;">
<footer class="blog-footer">
  
  </p>
</footer>

  </div>
    
  </body>
</html>
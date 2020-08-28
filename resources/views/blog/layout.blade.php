<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{asset('vendor/fontawesome/css/all.css')}}" rel="stylesheet">
    <title></title>
  </head>
  <body>


        <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">rustedchip</a>
            <form class="m-0 p-0" method="POST" action="{{route('search')}}">
              @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                    </div>
                    <input type="text" name="search" class="form-control" >
                </div>
            </form>
        </nav>


    
 
  <button class="btn btn-secondary d-sm-block d-md-none btn-block rounded-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Categories & Authors
  </button>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="mt-3 mb-3">
                  @foreach($categories as $category)
                    <p class="d-inline p-2 m-2 small"><a href="{{route('category',$category->id)}}"><i class="fas fa-layer-group"></i>  {{ $category->name }}</a></p>
                  @endforeach
                </div>
                <hr>

                <div class="mt-3 mb-3">
                  @foreach($authors as $author)
                    <p class="d-inline p-2 m-2 small"><a href="{{route('author',$author->id)}}"><i class="fas fa-user"></i>  {{ $author->name }}</a></p>
                  @endforeach
                </div>
                <hr>
  </div>
</div>



        
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-3 d-none d-md-block">

                <div class=" mt-3 mb-3 p-0 m-0">
                 <p class="text-muted"> Categories & Authors </p>
                </div>
                <hr>
                <div class="mt-3 mb-3">
                  @foreach($categories as $category)
                    <p class="d-inline p-2 m-2 small"><a href="{{route('category',$category->id)}}"><i class="fas fa-layer-group"></i>  {{ $category->name }}</a></p>
                  @endforeach
                </div>
                <hr>

                <div class="mt-3 mb-3">
                  @foreach($authors as $author)
                    <p class="d-inline p-2 m-2 small"><a href="{{route('author',$author->id)}}"><i class="fas fa-user"></i>  {{ $author->name }}</a></p>
                  @endforeach
                </div>
                <hr>

            </div>


        @yield('content')
        </div>


    </div>
 
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
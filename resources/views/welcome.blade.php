<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>

</head>
<body>

    <section class="border p-4 mb-4 d-flex align-items-center flex-column">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="btn btn-primary" href="{{route('front.index') }}" role="button">Home</a>
          <!-- Container wrapper -->
          <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Search form -->

              <form action="{{route('front.search')}}" method="post" >
                @csrf
                <div class="input-group px-5">
                    <div id="navbar-search-autocomplete" class="form-outline">
                      <input type="text" id="form1" name="search" placeholder="Please Search" class="form-control" />
                      <label class="form-label" for="form1"></label>
                    </div>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                  </div>

              </form>

            </div>
            <!-- Collapsible wrapper -->
          </div>
          <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
      </section>


    <div style="padding:30px;"></div>
    <div class="container">
        <p class="h1">Admin</p>
        <div class="row">

    <div class="card col-sm-6 mb-3" style="max-width: 540px;">

        <div class="row g-0">

            @foreach ($admins as $category)
          <div class="col-md-4">
            <img src="{{asset('/storage/admin/'.$category->image) }}" class="img-fluid rounded-start" style="height:100px;width:100px;" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$category->title}}</h5>
              <p class="card-text"><h3>{{ $category->short_desctiption }}<br></h3></p>
              <p class="card-text"><small class="text-muted">{{ $category->date }}</small></p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
</div>
</div>

      <div style="padding:30px;"></div>
      <div class="container">
        <p class="h1">User</p>
        <div class="row">
      <div class="card col-sm-5 mb-3" style="max-width: 540px;">
        <div class="row g-0">
            @foreach ($users as $categorys)
          <div class="col-md-4">
            <img src="{{asset('/storage/user/'.$categorys->image) }}" class="img-fluid rounded-start" style="height:100px;width:100px;" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$categorys->title}}</h5>
                <p class="card-text"><h3>{{$categorys->short_desctiption }}<br></h3></p>
                <p class="card-text"><small class="text-muted">{{$categorys->date }}</small></p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
</div>

</body>
</html>

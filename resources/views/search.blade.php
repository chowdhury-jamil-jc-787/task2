<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> laravel 8 pagination with search </title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body class="antialiased">
  <div class="container">
    <!-- main app container -->
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h3>Laravel 8 pagination with search </h3>
            <a class='btn btn-info' href='{{url("articles/form")}}'>Add New</a>
            <div id="search">

              <form id="searchform" name="searchform">
                <div class="form-group">
                  <label>Search by Title</label>
                  <input type="text" name="branch_id" value="{{request()->get('branch_id','')}}" class="form-control" />
                 

                </div>

                <button class='btn btn-success' >Search</button>
              </form>


            </div>
            <div id="pagination_data">
              <table class="table table-striped table-dark table-bordered">
                <tr>
                  <th>Branch Id</th>
                  <th>First name</th>

                  <th>Last Name</th>

                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gender</th>
                </tr>
                @foreach($articles as $article)
                <tr>
                  <td>{{$article->branch_id}}</td>
                  <td>{{$article->first_name}}</td>
                  <td>{{$article->last_name}}</td>
                  <td>{{$article->email}}</td>
                  <td>{{$article->phone}}</td>
                  <td>{{$article->gender}}</td>

                  
                </tr>
                @endforeach
              </table>
              <div id="pagination">
                {{ $articles->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- credits -->
    <div class="text-center">
      <p>
        <a href="#" target="_top">Laravel 8 pagination with search
        </a>
      </p>
      <p>
        <a href="https://readerstacks.com" target="_top">readerstacks.com</a>
      </p>
    </div>
  </div>
  
</body>

</html>

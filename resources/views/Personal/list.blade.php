<!DOCTYPE html>
<html>
  <head>
    <title>Personal Data Table</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
          <span><h1>Personal Data Table</h1></span>
          <span><a href="/personal/register"><button class="btn btn-success">Create + </button></a></span>
        </div>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Marital</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              @foreach($personals as $personal)
              <tr>
                <td>{{$i}}</td>
                <td>{{$personal->name}}</td>
                <td>{{$personal->email}}</td>
                <td>{{$personal->phone}}</td>
                <td>{{$personal->maritalstatus}}</td>
                <td>{{$personal->address}}</td>
                <td><a class="btn btn-primary" href="/personal/{{$personal->id}}/edit">Edit</a></td>
                <td><a class="btn btn-danger" href="/personal/{{$personal->id}}/delete">Delete</a></td>
              </tr>
              <?php $i++ ?>
              @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>
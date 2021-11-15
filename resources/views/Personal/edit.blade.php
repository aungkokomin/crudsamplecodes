<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Personal Data Form</h2>
  <form class="form-horizontal" action="/personal/{{$personal->id}}/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$personal->id}}">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$personal->name}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{$personal->email}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Phone" name="phone" value="{{$personal->phone}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Marital Status:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Marital Status" name="maritalstatus" value="{{$personal->maritalstatus}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">          
        <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Address">{{$personal->address}}</textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

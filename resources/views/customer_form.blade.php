<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShowBoat Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
</head>
<body>




<div class="jumbotron text-center">
    <div style="display: flex;justify-content: flex-end;"><div style="padding:20px;"><a class="registration" href="{{route('admin.login.form')}}"><button class="btn btn-success">Login</button></a><br></div><div style="padding:20px;"><a href="{{route('admin.register.form')}}"><button class="btn btn-success">Register</button></a></div></div>
  <h1>Customer Form</h1>
  
</div>

@if (Session::has('data'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{Session::get('data') }}</strong>
  <span class="text-danger">{{Session::get('data') }}</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="container">
  <div class="row">
  <form action="{{ route('store.customer')}}" method="POST" enctype="multipart/form-data">
    @csrf

  <div class="form-row">
  
  <div class="form-group col-md-6">
      <label for="Name">Name</label>
      <input type="text" class="form-control" name="profile_name" placeholder="please enter Profile Name">
      @error('profile_name')
<span class="text-danger">{{$message}}</span>
    @enderror
    </div>

  
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
      @error('email')
<span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>


  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>

  <div class="form-row">
  
  <div class="form-group col-md-6">
      <label for="PAN">PAN Card</label>
      <input type="text" class="form-control" name="pan_number" placeholder="please enter PAN Card Number">
      @error('pan_number')
<span class="text-danger">{{$message}}</span>
    @enderror
    </div>

  
  <div class="form-group col-md-6">
      <label for="inputEmail4">AAdhar Number</label>
      <input type="text" class="form-control" name="aadhar_number" placeholder="please enter Aadhar Card Number">
      @error('aadhar_number')
<span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Pofile Photo</label>
    <input type="file" class="form-control" name="profile_photo_path" >
    @error('profile_photo_path')
<span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

</body>
<script >
  @if(Session::has('message'))

var type = "{{Session::get('alert-type','info')}}"
switch(type){
case 'info':
  toastr.info("{{Session::get('message')}}")
break;
case 'success':
  toastr.success("{{Session::get('message')}}")
break;
case 'warning':
  toastr.warning("{{Session::get('message')}}")
break;
case 'error':
  toastr.error("{{Session::get('message')}}")
break;
}
@endif


</script>
</html>
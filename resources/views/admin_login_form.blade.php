<!DOCTYPE html>
<html lang="en">
<head>
<title>ShowBoat Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
</head>
    <body id="page-top">
      

        
        <!-- wrapper -->
          <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                    <!-- page content -->
                    <div class="login_page center_container">
                        <div class="center_content">
                            <div class="logo">
                                <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
                            </div>
                            @if(Session::has('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session::get('error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                           @endif
                            <form action="{{route('admin.login')}}" class="d-block" method="post">
                                @csrf
                                <div class="form-group icon_parent">
                                     <label for="password">Email</label>
         <input  type="email" class="form-control"  name="email"  placeholder="Email Address">
              <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                                 
                                </div>
                                <div class="form-group icon_parent">
                                    <label for="password">Password</label>
       <input id="password" type="password" class="form-control"   name="password" required autocomplete="current-password" placeholder="Password">
                                        
                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group">
                                    <label class="chech_container">Remember me
                                        <input type="checkbox" name="remember" id="remember" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <a class="registration" href="{{route('admin.register.form')}} ">Create new account</a><br>
                                    <a href=" " class="text-white">I forgot my password</a>
                                    <button type="submit" class="btn btn-blue">Login</button>
                                </div>
                            </form>
                            <div class="footer">
                               <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                            </div>
                            
                        </div>
                    </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->


      

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
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
    <body id="page-top">
        <!-- preloader -->
       
        
         <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                <!-- page content -->
                <div class="registration_page center_container">
                    <div class="center_content">
                        <div class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
                        </div>
                        <form action=" {{route('admin.create')}}" method="post">
                           @csrf
                            <div class="form-group icon_parent">
                                <label for="uname">Username</label>
          <input id="name" type="text" class="form-control" name="name"  placeholder="Full Name">
                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                            </div>
              <div class="form-group icon_parent">
                                <label for="email">E-mail</label>
         <input id="email" type="email" class="form-control" name="email"  placeholder="Email Address">

                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password"  placeholder="Password">

                                 
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="rtpassword">Re-type Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group">
                                <a class="registration" href="{{route('admin.login.form')}}">Already have an account</a><br>
                                <button type="submit" class="btn btn-blue">Signup</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->



    </body>
</html>
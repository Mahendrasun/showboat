<!DOCTYPE html>
<html lang="en">
<head>
<title>ShowBoat Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  

  <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js" ></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" ></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" ></script>
  


</head>
    <body id="page-top">
        <!-- preloader -->
        <div style="display: flex;justify-content: flex-end;">
        <div style="padding:20px;"><a class="registration" href="{{route('admin.logout')}}"><button class="btn btn-success">LogOut</button></a><br></div>
        </div>
        <div class="content_wrapper">
@if(Session::has('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session::get('error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                           @endif
  <h4> Login Admin Name : {{Auth::guard('admin')->user()->name}}</h4>
  <h4> Login Admin Emil : {{Auth::guard('admin')->user()->email}}</h4>
    <!--middle content wrapper-->
    <div class="middle_content_wrapper">
        <!-- counter_area -->
        <section class="counter_area">
           
        </section>
        <!--/ counter_area -->
        <!-- table area -->
        <section class="table_area">
           
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pan Card Number</th>
                <th>Aadhar Card Number</th>
                <th>Profile Photo</th>
            </tr>
        </thead>
        <tbody>
          
            
            @foreach($customer_data as $customer)
            <tr>
            <td>{{$customer->profile_name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->pan_number}}</td>
            <td>{{$customer->aadhar_number}}</td>
            <td><img src="{{ asset($customer->profile_photo_path)}}" alt="" style="height:40px;width:70px;"></td>
            </tr>
            @endforeach
              
           
          
        </tbody>
       
    </table>


        </section>                   
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->


      

    </body>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
</html>
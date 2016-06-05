<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
        <title>Home | Admin</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/ionicons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/AdminLTE.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/skin-blue.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/hostel.js')}}"></script>
</head>
<body>
    <div class="container-fluid init">
        <h3 class="center" style="position:absolute;left:50%;top:20%;transform:translateX(-50%);"><b>Login</b></h3>
        <div class="box">
            <div class="container-fluid">
                <p class="center">Sign in to start your session</p>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input type="text" name="" id="input1" class="form-control" value="" required="required" pattern="" title="" placeholder="Username..." >
                        <div class="space-vsmall"></div>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <input type="password" name="" id="input2" class="form-control" value="" required="required" pattern="" title="" placeholder="Password..." >
                        <div class="space-vsmall"></div>
                    </div>
                        
    
                    
                </div>
                <div class="row center">                    
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="check" style="display:inline-block;"> <img src="{{URL::asset('assets/images/fb.png')}}" class="img-responsive" width="25px;" alt="Image"> </a>
                        <button type="button" class="btn btn-primary no-border check checks" style="display:inline-block;">Submit</button>
                        <a href="#" class="check" style="display:inline-block;"> <img src="{{URL::asset('assets/images/twitter.jpg')}}" class="img-responsive" width="25px;" alt="Image"> </a>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
                <div class="wrapper-button">
                        
                    </div>
            </div>
        </div>
        <div class="modal fade" id="success">
    <div class="modal-dialog">
      <div class="modal-content status">
        
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>             
        </div>
      </div>
    </div>
  </div>
    </div>

      <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>            
      <script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>
</body>
</html>
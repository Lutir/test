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
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/calender.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/calender.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/underscore.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/hostel.js')}}"></script>     
        <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>            
        <script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>   
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  <header class="main-header">

    
    <a href="index2.html" class="logo">
      
      <span class="logo-mini"><b>T</b>PT</span>
      
      <span class="logo-lg"><b>Therapy</b>Portal</span>
    </a>

    
    <nav class="navbar navbar-static-top" role="navigation">
      
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-comments-o" aria-hidden="true"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 ongoing chats</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Mr.Hirok Das
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->                      
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          

          
          <li class="dropdown notifications-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 2 upcoming chat!</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Dr. Ambedkar &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-circle fa-1x text-green right" aria-hidden="true"></i> 
                    </a>

                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Dr. Leela &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-circle fa-1x text-red right" aria-hidden="true"></i> 
                    </a>

                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          
                
          
          <li class="dropdown user user-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <img src="{{URL::asset('assets/images/pp.jpeg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Ritul Jain</span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="{{URL::asset('assets/images/pp.jpeg')}}" class="img-circle" alt="User Image">

                <p>
                  Ritul Jain
                  <small>Web Developer</small>
                </p>
              </li>
              
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Profile</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Logout</a>
                  </div>
                </div>
                
              </li>
              
              
            </ul>
          </li>
          
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">

    
    <section class="sidebar">

                      
                      <div class="user-panel">
                        <div class="pull-left image">
                          <img src="{{URL::asset('assets/images/pp.jpeg')}}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                          <p>Ritul Jain</p>
                          
                          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                      </div>

                      
                      <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                        </div>
                      </form>
                      

                      
                      <ul class="sidebar-menu">
                        <li class="header">MENU</li>
                        
                        <li class="treeview"><a href="#" onclick="changeView('dashboard')"><i class="fa fa-link"></i> <span>Home</span></a></li>
                        
                        <!-- <li class="treeview">
                          <a href="#"><i class="fa fa-link"></i> <span>Edit Contents</span> <i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li><a href="#" onclick="changeView('addItem')" ><i class="fa fa-link"></i> <span>Add Item</span></a></li>                  
                            <li><a href="#" onclick="changeView('addHostel')" ><i class="fa fa-link"></i> <span>Add Hostels</span></a></li>
                            <li><a href="#" onclick="changeView('addVendor')"><i class="fa fa-link"></i> <span>Add Place</span></a></li>
                          </ul>
                        </li>
 -->
                        <li class="treeview"><a href="#" onclick="changeView('chat')"><i class="fa fa-link"></i> <span>Schedule Chat</span></a></li>
                        <li class="treeview"><a href="#" onclick="changeView('addChat')"><i class="fa fa-link"></i> <span>Manage</span></a></li>
                      </ul>
                      
                    </section>
    
  </aside>

<div class="content-wrapper no-view" id="addChat">                
                <section class="content-header" >
                  <h1>
                    Add Therapist<br>
                    <small>Add new therapists here :)</small>
                  </h1>                                   
                </section>                
                <section class="content">
                    <div class="space-medium"></div>
                    <h4 style="text-align:center;">Select Type of therapist:</h4>
                    <div class="container-fluid">
                  <div class="row">                  
                    <div class="col-md-4 col-md-offset-2">
                      <input type="text" name="name" id="name" class="form-control" value="" required="required" placeholder="Enter name...">
                    </div>
                    <div class="col-md-4">
                      <select name="menuName" id="menuName" class="form-control" required="required">
                        <option value="psy">Psychologists</option>
                        <option value="psc">Psychiatrists</option>
                        <option value="psa">Psychoanalysts</option>
                        <option value="mft">Marriage and Family Therapists (MFTs)</option>      
                      </select>
                    </div>
                  </div>
                  
                  <div class="space-small"></div>
                  
                </div>
                <div class="wrapper-button">
                  <button  type="button" onclick="addName()" class=" btn btn-primary btn-flat">Add Therapist's</button>                                    
                  <button  type="button" onclick="removeName()" class=" btn btn-primary btn-flat">Remove Therapist's</button>                                    
                  <button  type="button" onclick="viewAll()" class=" btn btn-primary btn-flat">View All</button>                                    
                </div>
                
                </section>                
              </div>  

<div class="content-wrapper no-view" id="chat">                
                <section class="content-header" >
                  <h1>
                    Chatbox<br>
                    <small>Schedule chat with your therapist here :)</small>
                  </h1>                                   
                </section>                
                <section class="content">
                    <div class="space-medium"></div>
                    <h4 style="text-align:center;">Select Type of therapist:</h4>
                    <div class="container center">
                  <div class="row">                  
                    <div class="col-md-8 col-md-offset-1 ">
                      <select name="scheduleList" id="scheduleList" class="form-control" required="required">
                        <option value="psy">Psychologists</option>
                        <option value="psc">Psychiatrists</option>
                        <option value="psa">Psychoanalysts</option>
                        <option value="mft">Marriage and Family Therapists (MFTs)</option>      
                      </select>
                    </div>                    
                  </div>
                  <div class="space-small"></div>
                  
                </div>
                <div class="wrapper-button">
                  <button  type="button" class="btn btn-primary btn-flat viewChat">View Therapist's</button>                                    
                </div>
                
                </section>                
              </div>  

  
<div class="content-wrapper" id="dashboard">                
                <section class="content-header" >
                  <h1>
                    Home
                    
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                  </ol>                  
                </section>                
                <section class="content">
                    <h2 class="blue center">Why Therapy?</h2>
                    <div class="container-fluid">
                    <div class="row content1">
                    <p>Therapy offers you a safe, confidential place to talk about your life and anything that may be confusing, painful or uncomfortable. It allows you to talk with someone who is trained to listen attentively and to help you improve things.</p>
                    </div>
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <img src="{{URL::asset('assets/images/therapist.ashx')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="col-md-8 col-xs-12 content1">
                           <p>
                      With so many areas of therapy to choose from, you’ll need to think about what sort of issues you want to help people with. From children who’ve had a tough time, couples needing help with their marriage, individuals with speech problems or people over-coming an addiction…..they all need therapy but in very different ways.
                      You can choose to specialise in a particular therapy or be a general therapist, where you’ll do more basic treatments for a range of issues.
                      When it comes to working hours, therapist’s have the typical 9-5 ahead of them, although you may need to work the odd evening or weekends if a client requires it.
                      While you’ll mainly be based in lovely office, occasionally you’ll do home visits, and you may even get to stay at home yourself, as online counselling sessions are starting to become popular.
                      
                    </p>
                        </div>

                        <div class="wrapper-button">
                          <a class="myButton-dark" onclick="changeView('chat')">Click here to book an appointment for a therapist</a>
                        </div>
                      </div>
                    </div>
                   
                </section>                
              </div>  


                                          



                
                </section>                       
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

  <div class="modal fade" id="profile">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-md-offset-1">
                <img src="{{URL::asset('assets/images/rachel.jpg')}}" class="img-thumbnail img-responsive imaged" alt="Image" >                
              </div>
              <div class="col-md-6  large right titles green">
                <p><b>Dr. Rachel Green</b></p>
                <p><b>M.B.B.S</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h4 class="green"><b>Description:</b></h4>
                <p>Compassionate Therapist has extensive knowledge of mental illnesses and symptoms management through using a combination of therapy and medication. Works very well with prescribing psychiatrists and uses an informed cognitive behavioral therapeutic approach with clients during counseling sessions. Has a Master's Degree in Counseling Psychology and is credentialed as a Licensed Professional Counselor in California.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h4 class="green"><b>Qualifications:</b></h4>
                  <ul>
                    
                      <li>
                        <p>Master's of Sciences Degree - Counseling Psychology</p>
                        <p><i>California Regional Pacific University</i></p>
                      </li>
                    
                    
                    
                      <li>
                        <p>Bachelor's of Sciences Degree - Psychology</p>
                        <p><i>California Regional Pacific University</i></p>
                      </li>
                    
                    
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>             
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="calen">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Select Date of appointment</h4>
        </div>
        <div class="modal-body">
          <div id="calendar"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Book</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="chatBox">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Chat-Box  <i class="fa fa-circle fa-1x text-green right" aria-hidden="true"></i> </h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
            <div class="col-md-12 col-xs-12 userBox">
              <ul class="chatList">
                    <li class="left clearfix"><span class="chat-img pull-left" style="padding:5px;">
                            <img src="http://placehold.it/50/55C1E7/fff&text=HER" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Rachel Green</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>10 mins ago</small>
                                </div>
                                <p>
                                    Hello there, let me know whenever you are free, i need to discuss about your therapy.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix" ><span class="chat-img pull-right" style="padding:5px;">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">

                                    <strong class="primary-font">Me</strong> <small class="pull-right text-muted">
                                    <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                        
                                </div>

                                <p>
                                    I'l be free around 7pm today.
                                    Let's discuss about it then :)
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left" style="padding:5px;">
                            <img src="http://placehold.it/50/55C1E7/fff&text=HER" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Rachel Green</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>2 mins ago</small>
                                </div>
                                <p>
                                    Okay,So lets meet at 7.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix" ><span class="chat-img pull-right" style="padding:5px;">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">

                                    <strong class="primary-font">Me</strong> <small class="pull-right text-muted">
                                    <span class="glyphicon glyphicon-time"></span>1 mins ago</small>
                                        
                                </div>

                                <p>
                                    Sure :)
                                </p>
                            </div>
                        </li>
              </ul>
              <div class="col-md-11 col-xs-11">
                <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="Press Enter to send text..">       
              </div>
              <div class="col-md-1 col-xs-1">
                <a href="#" class="func"><i class="fa fa-ellipsis-v marge fa-2x" style="color:rgba(130,130,110,0.9)" aria-hidden="true"></i></a>
              </div>
              

            </div>
            <div class="col-md-12 col-xs-12 userFunction">
              <hr>
              <div class="wrapper-button hidden-xs">
                <a href="#" class="myButton">Upload Vid.</a>
                <a href="#" class="myButton">Upload Img.</a>
                <a href="#" class="myButton">Upload File.</a>
                <a href="#" class="myButton">Clear Chat.</a>
              </div>

              <div class="visible-xs">
                  <div class="wrapper-button">
                    <a href="#" class="myButton">Upload Vid.</a>
                    <a href="#" class="myButton">Upload Img.</a>    
                  </div>
                  <div class="space-small"></div>
                  <div class="space-vsmall"></div>
                  <div class="wrapper-button">
                    <a href="#" class="myButton">Upload File.</a>
                    <a href="#" class="myButton">Clear Chat.</a>
                  </div>
                
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="main-footer">
    
    <div class="pull-right hidden-xs">
      :)
    </div>
    
    <strong>Copyright &copy; 2016 <a href="#">Ritul Jain</a>.</strong> All rights reserved.
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
    
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    
    <div class="tab-content">
      
      <!-- <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        

      </div>
      
      
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      
      
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          
        </form>
      </div>
       -->
    </div>
  </aside>
      
  <div class="control-sidebar-bg"></div>
</div>


              <script type="text/javascript">
                var calendar = $("#calendar").calendar(
                            {
                                tmpl_path: "/tmpls/",
                                events_source: function () { return []; }
                            });
              </script>
         

</body>
</html>

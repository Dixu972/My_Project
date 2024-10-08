<?php
function active_link($current_page)
{
   $url_array = explode('/', $_SERVER['REQUEST_URI']);
   $url = end($url_array);
   if ($current_page == $url) {
      echo 'active'; //class name in css 
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>mical</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- Header import --><!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="index" active_link($current_page);> Home </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="services">Services</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="testimonial">Testimonial</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact">Contact Us</a>
                           </li>

                           <?php
											if(isset($_SESSION['uid']))
											{
											?>
											<li class="nav-item <?php active_link('profile')?>">
                                                <a class="nav-link" href="profile">Hi.. <?php echo $_SESSION['uname'];?></a>
                                 </li>
											<li class="nav-item <?php active_link('user_logout')?>">
                                                <a class="nav-link btn btn-danger" href="user_logout">Logout</a>
                                 </li>
											<?php
											}
											else	
											{
											?>
											<li class="nav-item <?php active_link('login')?>">
                                                <a class="nav-link" href="login">Login</a>
                                 </li>
											<?php
											}
											?>

                           <!-- <li class="nav-item">
                              <a class="nav-link" href="login">Login / Sign Up</a>
                           </li> -->
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
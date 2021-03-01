<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet"  href="style.css">
<style>
nav {    
  display: block;
  text-align: center;
}
nav ul {
  margin: 0;
  padding:0;
  list-style: none;
}
.nav a {
  display:block; 
  background: #111; 
  color: #fff; 
  text-decoration: none;
  padding: 0.8em 1.8em;
  text-transform: uppercase;
  font-size: 80%;
  letter-spacing: 2px;
  text-shadow: 0 -1px 0 #000;
  position: relative;
}
.nav{  
  vertical-align: top; 
  display: inline-block;
  box-shadow: 
    1px -1px -1px 1px #000, 
    -1px 1px -1px 1px #fff, 
    0 0 6px 3px #fff;
  border-radius:6px;
}
.nav li {
  position: relative;
}
.nav > li { 
  float: left; 
  border-bottom: 4px #aaa solid; 
  margin-right: 1px; 
} 
.nav > li > a { 
  margin-bottom: 1px;
  box-shadow: inset 0 2em .33em -0.5em #555; 
}
.nav > li:hover, 
.nav > li:hover > a { 
  border-bottom-color: orange;
}
.nav li:hover > a { 
  color:orange; 
}
.nav > li:first-child { 
  border-radius: 4px 0 0 4px;
} 
.nav > li:first-child > a { 
  border-radius: 4px 0 0 0;
}
.nav > li:last-child { 
  border-radius: 0 0 4px 0; 
  margin-right: 0;
} 
.nav > li:last-child > a { 
  border-radius: 0 4px 0 0;
}
.nav li li a { 
  margin-top: 1px;
}
.nav li a:first-child:nth-last-child(2):before { 
  content: ""; 
  position: absolute; 
  height: 0; 
  width: 0; 
  border: 5px solid transparent; 
  top: 50% ;
  right:5px;  
 }
 .nav ul {
  position: absolute;
  white-space: nowrap;
  border-bottom: 5px solid  orange;
  z-index: 1;
  left: -99999em;
}
.nav > li:hover > ul {
  left: auto;
  margin-top: 5px;
  min-width: 100%;
}
.nav > li li:hover > ul { 
  left: 100%;
  margin-left: 1px;
  top: -1px;
}
/* arrow hover styling */
.nav > li > a:first-child:nth-last-child(2):before { 
  border-top-color: #aaa; 
}
.nav > li:hover > a:first-child:nth-last-child(2):before {
  border: 5px solid transparent; 
  border-bottom-color: orange; 
  margin-top:-5px
}
.nav li li > a:first-child:nth-last-child(2):before {  
  border-left-color: #aaa; 
  margin-top: -5px
}
.nav li li:hover > a:first-child:nth-last-child(2):before {
  border: 5px solid transparent; 
  border-right-color: orange;
  right: 10px; 
}
.ml{
  margin-left: 250px;
}
</style>
<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->

</head>
<body class="bg-dark" >

<section id="nav-bar" >
<div class="p-3 mb-2 bg-dark text-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">

  <a class="navbar-brand text-dark" href="#">Employment Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
<nav>
  <ul class="nav ml">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a>
      
    <li><a href="#">service</a></li>
    <li><a href="#">Registeration</a>
      <ul>
        <li><a href="<?php echo base_url()?>Main/publ">Public user</a></li>
        <li><a href="<?php echo base_url()?>Main/emp_reg">Employee office</a></li>
        <li><a href="<?php echo base_url()?>Main/staff">Employee staff</a></li>
        
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
    <li><a href="<?php echo base_url()?>Main/login">Login</a></li>
  </ul>
</nav>
  </div>
</nav>
</div>
</section>
<!-----------banner-section------->
<div class="container" >
    <div class="banner">
      <img src="../images/em1.jpg" height="20%" width="100%">
    </div>
   
</div>
 
</body>
</html>

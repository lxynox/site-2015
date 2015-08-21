<!DOCTYPE html>
<html>
<head>
  <title>welcome to xuanyu's website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- external css stylesheet added -->
  <link href="index.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  #about-me {padding-top:50px;height:auto;color:#fff; background-color:#36648B;}
  #contact {padding-top:50px;height:auto;color:#fff; background-color:steelblue;}
  /*#673ab7*/
  #android {padding-top:50px;height:auto;color:#fff; background-color:#36648B;}
  #software-engineering {padding-top:50px;height: auto;color:#fff; background-color:transparent;}
  #resume {padding-top:50px;height:auto;color: #fff; background-color:#36648B;}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      margin: auto;
      width: 80%;
      height: 400px;
  }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- container added to wrap body contents -->
<div class="">

<!-- add external body contents to this file -->
<php 
  require('homepage.php');
  $homepage = new Homepage();
  $homepage.Display();  
?>
<!-- other sections like: blogs etc 
  TODO: property HIDDEN right now -->
<div id="section61" hidden class="container-fluid">
  <h1>Section 6 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section62" hidden class="container-fluid">
  <h1>Section 6 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<!-- footer in the bottom -->
</div>

<script type="text/javascript" src="script/index.js"></script>
<script type="text/javascript" src="script/addLoadEvent.js"></script>
<!-- contact js files -->
<script type="text/javascript" src="script/contact.js"></script>
<!-- index js files -->
<script type="text/javascript" src="script/describeImage.js"></script>
<!-- resume js files-->
<script type="text/javascript" src="script/resume.js"></script>
<!-- android js files -->
<script type="text/javascript" src="script/moveElement.js"></script>
<script type="text/javascript" src="script/createVideoControls.js"></script>
</body>
</html>
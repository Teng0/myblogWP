 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>

    <!-- Bootstrap -->

    <link href="<?php bloginfo("stylesheet_directory");?>/style.css " rel="stylesheet">
     <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory");?>/gridStyle.css">
	 <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
       	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory");?>/bootstrap/css/bootstrap.min.css">

      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



  </head>
  <body>


<div class="container-fluid">
    <div class="row">
      <div class="text-center" id="mainImgDiv">
      <img class="img-fluid  mx-auto d-block" src="<?php bloginfo("template_directory");?>/img/img.jpg" alt="My IMG"/>
        <div  id="mainImgText">
          <hr>
          <span>WEB & Graphic Designer</span>
          <hr>
            <a href="#Navigaion">Learn More</a>
          </div>

        </div>
      </div>
    </div>




<nav class="navbar  navbar-expand-lg navbar-light bg-dark" id="Navigaion">
    <div class="container">
    <a class="navbar-brand" href="index.html">MY <span>BLOG</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" id="togleButton">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse bg-dark navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="navMenu">
            <li class="nav-item active  ">
                <a class="nav-link active " href="#">Home <span class="sr-only bg-light">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skils">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#resume">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contac">Contact Me</a>
            </li>
            <?php wp_list_categories( 'title_li=' ); ?>

        </ul>
          <?php echo get_search_form()  ?>
    </div>
    </div>
</nav>
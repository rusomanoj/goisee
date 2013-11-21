<!DOCTYPE html>
<html>
  <head>
    <title>Goisee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'css/style1.css'; ?>" rel="stylesheet" media="screen">
  </head>
  <body>
         <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
	      <a href="#" class="navbar-brand"></a>
          <!-- Brand and toggle get grouped for better mobile display -->
	  <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	  </button>
           <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav">
              <li class="active"><a data-toggle="pill" href="#">Home</a></li>
	       <li><a data-toggle="pill" href="#">Photos</a></li>
	        <li><a data-toggle="pill" href="<?php echo site_url('upload') ?>">Upload</a></li>
		 <li><a data-toggle="pill" href="about">About</a></li>
		 <li><a data-toggle="pill" href="contact">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
            
          </div><!-- /.navbar-collapse -->
        
        </div>
        </nav>

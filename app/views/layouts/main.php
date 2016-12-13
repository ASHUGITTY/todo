<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="index.php"><title>ToDo</title></a>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body style="background-color: #f2f2f2">
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">ToDo</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
             <!--navigation bar-->
             <?php if($this->session->userdata('logged_in')) : ?>
               Welcome,  <?php echo $this->session->userdata('username'); ?>
             <?php else : ?>
                <a href="<?php echo base_url(); ?>users/register">Register</a>
             <?php endif; ?>
            </p>
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
               <?php if($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>lists">My Lists</a></li>  
               <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
          <div style="margin:0 0 10px 10px;">
			<!--login form-->
			<?php $this->load->view('users/login'); ?>
          </div>
          </div>
        </div>

        <div class="span9">
   		
			<?php $this->load->view($main_content); ?>
        </div>
		</div>
      <hr style="margin-top: 20%;">

      <footer>
        <p style="text-align: center;">&copy; Copyright 2016 Developed by Ashutosh Verma</p>
      </footer>
    </div>
</body>
</html>
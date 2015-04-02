<?php $this->load->view('admin/components/page_head'); ?>
<body>
   <div class="text-center">
        <h1>Makan apa Ya?</h1>
    <h4>Portal informasi tempat kuliner di Surabaya</h4>
    </div>
 
    <div class="container">
        
    
 <nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Beranda <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Akun Klien</a></li>
        <li><?php echo anchor('admin/user', 'Akun User'); ?></li>
        <li><?php echo anchor('admin/tempatmakan', 'Tempat Makan'); ?></li>
        <li><a href="#">Testimoni</a></li>
        <li><a href="#">Setting</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor('admin/user/logout', '<i class="glyphicon glyphicon-off"></i> logout'); ?></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 </div>

	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="col-lg-9">
<?php $this->load->view($subview); ?>
			</div>
			<!-- Sidebar -->
			<div class="col-lg-3">
				
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/page_tail'); ?>
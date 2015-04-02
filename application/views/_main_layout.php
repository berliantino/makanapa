<?php $this->load->view('components/page_head'); ?>
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
<!--      <a class="navbar-brand" href="#"></a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Beranda <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><?php echo anchor('frontend/tempatmakan', 'Daftar tempat makan'); ?></li>
        <li><?php echo anchor('admin/tempatmakan', 'Tempat Makan'); ?></li>
        <li><a href="#">Kontak</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <?php echo validation_errors(); ?>

         <?php echo form_open();?>
          <li>
            <a><?php echo form_input('email','Email'); ?></a>
            <a><?php echo form_password('password','Password'); ?></a>
            <a><?php echo form_submit('submit', 'login' ,'class="btn btn-primary"'); ?></a>
        </li>
           <?php echo form_close();?>             
            <?php 
//                        echo form_open('user_c/validasi');
//                        echo form_input('email','Email');
//                        echo form_password('password','Password');
//                        echo form_input('email','Email');
                        ?>
                    
      </ul>
        
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>  
    <div class="container">
        <div class="row">
                        <!--sidebar kiri -->
                        <div class="col-lg-4">
                            <table class="table-responsive table-condensed">
                                <thead>
                                    <tr>
                                        <th><h4>Cari Berdasarkan kategori</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbreak>
                                    <tr>
                                        <th><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>  Harga</th>
                                    </tr>
                                    <tr>
                                        <th><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>  Lokasi</th>
                                    </tr>
                                    <tr>
                                        <th><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>  Jenis Makanan</th>
                                    </tr>
                                    <tr>
                                        <th><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  Jenis Tempat Makan</th>
                                    </tr>
                                    <tr>
                                        <th><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>  Rating</th>
                                    </tr>
                                  
                                </tbody>
                                
                            </table>                           
                         </div>
			<!-- Main column -->
			<div class="col-lg-8">
                            <div class="container-fluid" style="border-color: black;background-color: ghostwhite">
                                <h1>HOMEPAGE</h1>
                            </div>
                            
			</div>
			
                       
	</div>
    </div>
            
		
            

<?php $this->load->view('components/page_tail'); ?>
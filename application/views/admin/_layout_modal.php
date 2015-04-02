<?php $this-> load->view('admin/components/page_head');?>
<body style="background: #eb9316">
    <br><br><br><br>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="container-fluid">
        <div class="modal-content" role="dialog">
            
            
          <?php $this->load->view($subview); // Subview is set in controller ?>
          
          <div class="modal-footer text-center">
              &COPY;|Makan Apa Ya?|2014
          </div>
      </div>
    </div>
        </div>
    </div>
    
      
      

<?php $this-> load->view('admin/components/page_tail'); ?>
       
<?php
if($this->session->userdata("userID")):
?>
<!--<style>
#wrapper { min-height:100%;
			position:relative;}
.footer_back { background:red none repeat scroll 0 0;
				bottom:0;
				margin:0 !important;
				position:absolute;
				width:100%;
	
	
	}

</style>
  
  	<div id="wrapper">
    	
            <footer class="footer_back">
                <h2>dssfsfdfdssg</h2>
            </footer>
        
    </div>-->
    
    
    <!-- jQuery 2.1.4 -->
    <?php /*?><script src="<?php echo base_url();?>library/plugins/jQuery/jQuery-2.1.4.min.js"></script><?php */?>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>library/bootstrap/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <?php /*?> <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script><?php */?>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>library/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url();?>library/bootstrap/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>library/bootstrap/js/jquery.scrollbox.js"></script>



  </body>
</html>
<?php
else:
	redirect("view_controller/login");
endif;
?>
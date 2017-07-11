<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?>	
    <?php */?>    
        	<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <h3>Website</h3>
                  <p>Go to website </p>
                </div>
                <div class="icon">
                 
                </div>
                <a href="<?=site_url();?>" class="small-box-footer">Website <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>Main Category</h3>
                  <p>Manage main-category </p>
                </div>
                <div class="icon">
                 
                </div>
                <a href="<?=site_url('admin_controller/maincategory');?>" class="small-box-footer">Main Category <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background:#92b8da">
                <div class="inner">
                  <h3>Category</h3>
                  <p>Manage Category </p>
                </div>
                <div class="icon">
                 
                </div>
                <a href="<?=site_url('admin_controller/category');?>" class="small-box-footer">Category <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background:#c2ba84">
                <div class="inner">
                  <h3>Sub Category</h3>
                  <p>Manage Sub-Category </p>
                </div>
                <div class="icon">
                
                </div>
                <a href="<?=site_url('admin_controller/sub_category');?>" class="small-box-footer">Sub Category <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Page</h3>
                  <p>Manage Page, Post Content </p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="<?=site_url('admin_controller/page');?>" class="small-box-footer">Page <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>User Admin</h3>
                  <p>Manage User Admin </p>

                </div>
                <div class="icon">
                 
                </div>
                <a href="<?=site_url('admin_controller/user');?>" class="small-box-footer">User Admin <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>Company</h3>
                  <p>Manage Company </p>
                </div>
                <div class="icon">
                  <i class="fa fa-building" aria-hidden="true"></i>
                </div>
                <a href="<?=site_url('admin_controller/company');?>" class="small-box-footer">Company <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background:#35a335">
                <div class="inner">
                  <h3>Employee</h3>
                  <p>Manage Employee </p>
                </div>
                <div class="icon">
                   <i class="fa fa-male" aria-hidden="true"></i>
                </div>
                <a href="<?=site_url('admin_controller/employee');?>" class="small-box-footer">Employee <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background:#d3f2fc">
                <div class="inner">
                  <h3>Job</h3>
                  <p>Manage Job </p>
                </div>
                <div class="icon">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <a href="<?=site_url('admin_controller/job');?>" class="small-box-footer">Job <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
<?php /*?>            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Invoice</h3>
                  <p>manage your invoice</p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="<?php echo base_url(); ?>index.php/admin_controller/invoice" class="small-box-footer">Invoice <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>Item</h3>
                  <p>manage items</p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="<?php echo base_url(); ?>index.php/admin_controller/item" class="small-box-footer">Item <i class="fa fa-arrow-circle-right"></i></a>
              </div><?php */?>
            

      
        
        
<?php /*?>
<?php
else:
	redirect("view_controller/login");
endif;
?><?php */?>
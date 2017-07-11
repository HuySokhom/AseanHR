
<br/>
<div class="container"> 
            <div class="nav-side-menu">

    <div class="brand">
    	<?php	foreach($show_maincategory as $main){
					  if($main->mai_id == $this->uri->segment(4)){
						  echo $main->name;
					  }
				  }
				 ?>
    </div>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content">
<!--  menu left for no sub category  -->
				<?php
					   
					  foreach($show_category as $cat){
						if($cat->main_id == $this->uri->segment(4) && $this->uri->segment(5) == false){ 
				?>
                
                	<?php if($cat->cat_id == $this->uri->segment(3)){ ?>
                <li class="active">
                  <a href="<?=site_url('Pages/page/'.$cat->cat_id.'/'.$cat->main_id)?>"><!--<i class="fa fa-chevron-right"></i>--> <?php echo $cat->cat_name; ?>
                  </a>
                  	 <?php } else { ?>
                     <li>
                  <a href="<?=site_url('Pages/page/'.$cat->cat_id.'/'.$cat->main_id)?>"><!--<i class="fa fa-chevron-right"></i>--> <?php echo $cat->cat_name; ?>  
                  </a>
                     
                     <?php } ?>
                  	

                    
                 
                </li>  
               

				<?php } } ?> 
                
                
<!-- end menu left for no sub category  -->             
                
                
                <?php
					   
					  foreach($show_category as $cat){
						if($cat->cat_id == $this->uri->segment(5)){ 
				?>
                
               
                     <li data-toggle="collapse"  class="collapsed">
                  <a href="#"><!--<i class="fa fa-chevron-right"></i>--> <?php echo $cat->cat_name; ?>  
                  </a>
                     
                  
                  	
                    	 <span <?php foreach($show_sub_category as $sub_cate){ 
							 			if($sub_cate->cate_id== $cat->cat_id){
								?> 
                    			class="arrow" 
								<?php 
										} 
								}?>>
                        </span>
                    
                 
                </li>  
                <ul class="sub-menu collapse in" id="<?php echo $cat->cat_id; ?>">
                		<?php
							  foreach($show_sub_category as $sub_cate){
								  if($sub_cate->cate_id== $cat->cat_id){
									  if($sub_cate->random_number == $this->uri->segment(3)){
						  ?>
                   <li class="active"> <a href="<?=site_url('Pages/page/'.$sub_cate->random_number.'/'.$cat->main_id.'/'.$sub_cate->cate_id)?>"><?php echo $sub_cate->sub_cat_name; ?></a></li>
                  				<?php	}else { ?>
                   <li> <a href="<?=site_url('Pages/page/'.$sub_cate->random_number.'/'.$cat->main_id.'/'.$sub_cate->cate_id)?>"><?php echo $sub_cate->sub_cat_name; ?></a></li>                
                        <?php               }
							  }
						
						 
						      } 
						?> 
                </ul>

				<?php } } ?> 


            </ul>
     </div>       
            
            

               
<?php /*?>                <div class="list-group">
                  <a href="#" class="list-group-item disabled my_header_list">
                  <?php	foreach($show_maincategory as $main){
					  if($main->mai_id == $this->uri->segment(4)){
						  echo $main->name;
					  }
				  }
				 ?>
                
                  </a>
                  <?php
					   
					  foreach($show_category as $cat){
						if($cat->main_id == $this->uri->segment(4)){ 
						  
							
								 if($cat->cat_id == $this->uri->segment(3)){				 
									 echo '<a style="color:#125185" href="'.site_url("Pages/page/".$cat->cat_id.'/'.$cat->main_id).'" class="list-group-item"><i class="fa fa-chevron-right" aria-hidden="true"></i> '.$cat->cat_name.'</a>';	
								 }else{
						
					  				echo '<a href="'.site_url("Pages/page/".$cat->cat_id.'/'.$cat->main_id).'" class="list-group-item"><i class="fa fa-chevron-right" aria-hidden="true"></i> '.$cat->cat_name.'</a>';
								  }
					  }
					  }
				   ?>
               </div><?php */?>

                    
               
           </div>
<style>

.myTextEditor img {display: block;
max-width: 100%;
height: auto;} 

</style>
            <div class="left-company-profile-content">

               <div class="cotent-view myTextEditor" style="margin-top:0px;">
               	​​​​​​​​  <?php
                		foreach($show_page as $detail){
				 ?>
                 		<p style="font-size: 20px; color: #125185; margin-top: -15px;"><?php echo $detail->pag_name; ?></p>
                 
             	
               
                
                 <?php
				 			
								echo $detail->pag_description;
				?>	
       
  
            
        </div>			
				
               
				<?php				
								if($detail->pag_image== true){
				?>
                		
								<img src="<?php echo base_url(); ?>/image/image_page/<?php echo $detail->pag_image;?>" class="img-responsive">
                <?php
								}
						}
				  ?>
               </div>

            </div> <!--end col-md-9-->
      
</div>


 <style>
#accordion .panel-heading { padding: 0;}
#accordion .panel-title > a {
	display: block;
	padding: 0.9em 0.6em;
    outline: none;
    font-weight:bold;
    text-decoration: none;
}

#accordion .panel-title > a.accordion-toggle::before, #accordion a[data-toggle="collapse"]::before  {
    content:"\e113";
    float: left;
    font-family: 'Glyphicons Halflings';
	margin-right :1em;
}
#accordion .panel-title > a.accordion-toggle.collapsed::before, #accordion a.collapsed[data-toggle="collapse"]::before  {
    content:"\e114";
}

 
 </style>  
<!--end body top alert-->
<style>


.first-search {
    width: 100%;
    height: 100px;
	border: 0;
	vertical-align: middle;
}


#pageSearch_searchForm {
	position:absolute;
  	top:224px;
}

.search_boder {
    /*border: 1px solid red;*/
	height: 64px;
    padding: 10px 0;
   	background: rgba(245, 245, 245, 0.45);
    border-radius: 4px;
	-webkit-border-radius:4px;
    -moz-border-radius:4px;
	    margin-left: 100px;
    margin-right: 100px;

}

.search_boder input[type=text]
{
	height: 44px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius: 4px !important;
/*    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff ;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff ;
  	box-shadow: 0px 0px 1px 10px #c2b8b866, 0 3px #F4001A;
    background: #fff;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;*/
}
.search_boder select {
	height: 44px;
	

    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    padding-left:10px;
   
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}



.ui-autocomplete {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1510 !important;
  float: left;
  display: none;
  min-width: 160px;
  width: 160px;
  padding:10px 5px !important;
  margin: 10px !important;
  list-style: none;
  background-color: #ffffff;
  border-color: #ccc;
  border-color: rgba(0, 0, 0, 0.2);
  border-style: solid;
  border-width: 1px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;
  
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

 .ui-state-focus {
    background: #2980B9;
    border: none;
    color:#FFF;
	/*padding-left:20px;*/
    border-radius:0;
}


</style>

<script>
   $(document).ready(function(e) {
    	$("#job_name").autocomplete({
			source: "<?php echo base_url();?>index.php/Pages/get_search_item"
		});
 
	
	});
</script> 




          <img class="first-search" src="<?=base_url('image/image_slide/1.jpg');?>" alt="First slide">	

  			 <div class="search-job">
                       <form action="<?=site_url('Pages/search_by');?>" method="post" id="searchForm" enctype="multipart/form-data">
                            <div class="job">
                                <input type="text" name="search" id="job_name"  placeholder="I'm looking for.. (Job Title, Company name, Location…  )" value=""/>
                            </div>
                            <div class="job-submit">
                            	<button type="submit">Find Job <i class="fa fa-search"></i></button>
                            </div>
                        </form>
             </div>
  

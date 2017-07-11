<div class="container" style="margin-top:10px;">

    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:15px;">
    	<?php
			 foreach($get_contact as $contact){
				echo $contact->cu_text;
				echo '<iframe src="'.$contact->map.'" frameborder="0" width="100%" height="400px" style="border:0" allowfullscreen></iframe>';
			}
		 ?>
    </div>
 </div>
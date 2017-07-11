<style>

.scrollable-menu {
    height: auto;
    max-height: 400px;
	width:auto;
    overflow-x: hidden;
	
}

.label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 0px;
    font-weight: 700;
}

.modal-footer {
    padding: 5px 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}

.form-control {
    display: block;
    width: 100%;
    height: 25px;
    padding: 2px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
}

.modal-body {
    position: relative;
    padding: 5px 15px;
}
.form-group {
    margin-bottom: 10px;
}


</style>
<form id="update_cart" method="post">
		<div class="scrollable-menu">
              <table class="gridtable table table-custome">
              	<thead>
                     <tr class="success">
                        <th style="width: 3%" >N&deg;</th>
                         <th style="width: 45%">Name</th>
                        <th style="width: 5%">Qty</th>
                        <th style="width: 25%">Price</th>
                        <th style="width: 25%">Amount</th>
                        <th style="width: 22%; padding:0;">&nbsp;</th>
                      </tr>
                 </thead>

				<?php $i = 1; ?>
				<?php foreach ($this->cart->contents() as $items): ?>
        		<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
        		<tr>
                	<td><?php echo $i; ?></td>
                    <td style="color:#0d648d;">
                        <?php echo $items['name_k']; ?> <br />
                        <?php echo $items['name']; ?>
                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                          <p>
                             <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
							 <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
							 <?php endforeach; ?>
                          </p>
						  <?php endif; ?>
                    </td>
                	<td style="color:black; background:none;">
						<?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '3')); ?>
                    </td>
                	
        
                    <td style="text-align:center">$ <?php echo $this->cart->format_number($items['price']); ?></td>
                    <td style="text-align:center; color:#0d648d;">
                    $ <?php echo $this->cart->format_number($items['subtotal']); ?> <br />
                    <a href="<?=site_url("view_controller/delete/".$items['rowid']);?>" class="del" title="Delete"><i style="color:red;" class="glyphicon glyphicon-trash"></i></a>
                   <?php /*?> <?php echo anchor('view_controller/delete/'.$items['rowid'], '<img style="padding-left:10px;" src="'.base_url().'image/delete.png" />', 'title="Delete"', 'onClick="return confirm("Are you sure! you want to delete this.")"');?><?php */?>
                    <div style="float:right; padding-left:0px;">
                    <input class="update_cart" type="submit" value=" " name="up" title="Update" id="update_cart"/>
                    </div>
                    </td>
        		</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
                <tr>
  						<br/>
                        
                    <td style="text-align:center;"><strong>Total</strong></td>
                    <td style="text-align:center; font-weight:bold; color:#0d648d;">$ <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                </tr>
             </table>
		</div>	
			    <button type="button" style="background:#217AB5; margin-top:10px; border: solid 1px #fff; padding:10px 20px; color:#fff;" class="btn btn-default" data-toggle="modal" data-target="#myModal">Payment</button>
           
                <button data-toggle="modal" data-target="#myHold" type="button" style="background:#217AB5; margin-top:10px; border: solid 1px #fff; padding:10px 20px; color:#fff;" class="btn btn-default">Hold</button>
             
                <button data-toggle="modal" data-target="#myPrint" type="button" style="background:#217AB5; margin-top:10px; border: solid 1px #fff; padding:10px 20px; color:#fff;" class="btn btn-default">Print Invoice</button>
               

                
                <button type="button" style="background:#217AB5; margin-top:10px;  border: solid 1px #fff; padding:10px 20px; color:#fff;" class="btn btn-default" data-toggle="modal" data-target="#myCancel">Cancel</button>
			</form>
            <?php 
				if($this->session->flashdata('exist')){
					echo $this->session->flashdata('exist');
				}elseif($this->session->flashdata('empty')){
					echo $this->session->flashdata('empty');
				}elseif($this->session->flashdata('succ')){
					echo $this->session->flashdata('succ');
				}elseif($this->session->flashdata('up_suc')){
					echo $this->session->flashdata('up_suc');
				}else{
					echo $this->session->flashdata('dele');
				}
			?>
 <script>
$(document).ready(function(e) {
    $("#update_cart").submit(function(){
		var dataquery = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "<?=site_url('view_controller/abc'); ?>",
			data: dataquery,
			 success: function(result) {
			  $('.table').html(result);
            }
		});
		return false;
	});
});
</script>
<script>
$(document).ready(function(e) {
    $(".del").click(function(event){
		var href = $(this).attr("href");
		$.ajax({
			type: "POST",
			url: href,
			data: href,
			 success: function(result) {
			  $('.table').html(result);
            }
		});
		return false;
	});
});
</script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    <!-- Modal content-->
    <form action="<?=site_url('view_controller/invoice/');?>" method="post">
    <div class="modal-content">
      <div class="modal-header" style="background:#376f6f;">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff;">PAYMENT</h4>
      </div>
      <div class="modal-body">       
          <div class="form-group">
            <label for="total">Total Amount (USD):</label>
            <input type="text" readonly value="<?php echo $this->cart->format_number($this->cart->total());?>"  class="form-control" id="amount">
          </div>
      <!--   <div class="form-group">
            <label for="Paid by">Paid By:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="paidby" checked>&nbsp;&nbsp; USD &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="paidby">&nbsp;&nbsp; Riel
          </div>-->
          <div class="form-group">
            <label for="paid">Received (USD):</label>
            <input type="text" required class="form-control" id="paid" name="pa" onkeyup="sum();" />
          </div>
          <div class="form-group">
            <label for="paid">Received (KHR):</label>
            <input type="text" value="0" class="form-control" id="paid_khr" name="pa_khr" onkeyup="sum();" />
          </div>
           <div class="form-group">
            <label for="discount">Discount (%):</label>
            <input type="text" value="0" class="form-control" id="discount" name="discount" onkeyup="sum();">
          </div>
           <div class="form-group">
            <label for="discount">Grand Total (USD):</label>
            <input type="text" readonly class="form-control" id="grand_total" name="grand_total" onkeyup="sum();">
          </div>
           <div class="form-group">
            <label for="discount">Grand Total (KHR):</label>
            <input type="text" readonly class="form-control" id="grand_total_khr" name="grand_total_khr" onkeyup="sum();">
          </div>
          <div class="form-group">
            <label for="change">Return Change USD:</label>
            <input type="text" readonly class="form-control" name="ch"  id="change" >
            
          </div>
          
           <div class="form-group">
            <label for="changeR">Return Change (KHR):</label>
            <input type="text" readonly class="form-control" name="kh"  id="changeR" >
            
          </div>
   
      </div>
      <div class="modal-footer custom-default">
      <input type="hidden" name="mY_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date('Y-m-d h:i:s')?>"/>
        <button type="submit" class="btn btn-default" >Pay</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
</div>

<!-- Modal Cancel -->
<div id="myHold" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="color:#000;">

    <!-- Modal content-->
    <?php
    	 if($show_hold_detail->num_rows() == TRUE){
			$my_data = $this->View_model->show_hold_invoice();
			foreach($my_data as $in_row){
			foreach($show_hold_detail->result() as $hold){
				if($hold->h_invo_id == $in_row->h_inv_id){
	?>
    		<form action="<?=site_url('view_controller/hold_invoice_update/'.$hold->h_invo_id);?>" method="post">
                <div class="modal-content">
                  <div class="modal-header" style="background:#376f6f;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Cancel</h4>
               
                    
                  </div>
                  <div class="modal-body">   
                      <div class="form-group">
                        <label for="change">Referece No:</label>
                        <input type="text" disabled="disabled"  class="form-control" name="h_reference" value="<?=$in_row->h_reference;?>">
                      </div>   
                      <div class="form-group">
                        <label for="paid">Do you want to update this hold sale(s)?</label>
                        
                      </div>
                  </div>
                  <div class="modal-footer custom-default">
                  <input type="hidden" name="mY_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date('Y-m-d h:i:s')?>"/>
              
                    <button type="submit" class="btn btn-default" >Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
                </div>
            </form>
    <?php
					}
				}
			}
		 }else{
	?>
    <form action="<?=site_url('view_controller/hold_invoice/');?>" method="post">
    <div class="modal-content">
      <div class="modal-header" style="background:#376f6f;">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff;">Cancel</h4>
   
        
      </div>
      <div class="modal-body">   
      	  <div class="form-group">
            <label for="change">Referece No:</label>
            <input type="text" required  class="form-control" name="h_reference" id="my_id">
          </div>    
   
          <div class="form-group">
            <label for="paid">Do you want to hold this sale(s)?</label>
          </div>
         
   
      </div>
      <div class="modal-footer custom-default">
      <input type="hidden" name="mY_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date('Y-m-d h:i:s')?>"/>
  
        <button type="submit" class="btn btn-default" >Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
</form>
<?php
		 }
?>
  </div>
</div>

<!-- Modal Print -->
<div id="myPrint" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    <!-- Modal content-->
    <?php
    	 if($show_hold_detail->num_rows() == TRUE){
			$my_data = $this->View_model->show_hold_invoice();
			foreach($my_data as $in_row){
			foreach($show_hold_detail->result() as $hold){
				if($hold->h_invo_id == $in_row->h_inv_id){
	?>
    		<form action="<?=site_url('view_controller/print_invoice/'.$hold->h_invo_id);?>" method="post">
                <div class="modal-content">
                  <div class="modal-header" style="background:#376f6f;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Print Invoice</h4>
               
                    
                  </div>
                  <div class="modal-body">   
                    <div class="form-group">
                        <label for="paid">Do you want to print this sale?</label>
                        
                      </div>
                      <div class="form-group">
                        <label for="change">Referece No:</label>
                        <input type="text" readonly="readonly"  class="form-control" name="h_reference" value="<?=$in_row->h_reference;?>">
                      </div> 
                       <div class="form-group">
                        <label for="total">Total Amount (USD):</label>
                        <input type="text" readonly value="<?php echo $this->cart->format_number($this->cart->total());?>"  class="form-control" id="h_amount">
                      </div> 
                      <div class="form-group">
                        <label for="discount">Discount (%):</label>
                        <input type="text" required class="form-control" id="h_discount" name="h_discount" onkeyup="hPrint();" >
                      </div> 
                       <div class="form-group">
                        <label for="discount">Grand Total (USD):</label>
                        <input type="text" readonly class="form-control" id="h_grand_total" name="h_grand_total" onkeyup="hPrint();">
                      </div>
                       <div class="form-group">
                        <label for="discount">Grand Total (KHR):</label>
                        <input type="text" readonly class="form-control" id="h_grand_total_khr" name="h_grand_total_khr" onkeyup="hPrint();">
                      </div>
                    


                  </div>
                  <div class="modal-footer custom-default">
                  <input type="hidden" name="mY_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date('Y-m-d h:i:s')?>"/>
              
                    <button type="submit" <?php /*?><?php anchor("view_controller/print_invoice/".$in_row->h_inv_id,'<i class="glyphicon glyphicon-print"></i>','title="Print"').nbs(2); ?><?php */?> class="btn btn-default" >Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
            </form>
    <?php
					}
				}
			}
		 }else{
	?>
    <form action="<?=site_url('view_controller/my_print/');?>" method="post">
    <div class="modal-content">
      <div class="modal-header" style="background:#376f6f;">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff;">Print Invoice</h4>
   
        
      </div>
      <div class="modal-body">   
      	<?php /*?>  <div class="form-group">
            <label for="change">Referece No:</label>
            <input type="text"  class="form-control" name="h_reference" id="my_id">
          </div> <?php */?>   
   
          <div class="form-group">
            <label for="paid">Please, Select hold before print invoice !!!</label>
          </div>
         
   
      </div>
      <div class="modal-footer custom-default">
      <input type="hidden" name="mY_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date('Y-m-d h:i:s')?>"/>
  
        <?php /*?><button type="submit" class="btn btn-default" >Yes</button><?php */?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
</form>
<?php
		 }
?>
 </div>
</div>
<!-- Modal Cancel -->
<div id="myCancel" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    <!-- Modal content-->
    <form action="<?=site_url('view_controller/destroy_cart/');?>" method="post">
    <div class="modal-content">
      <div class="modal-header" style="background:#376f6f;">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff;">Cancel</h4>
   
        
      </div>
      <div class="modal-body">       
   
          <div class="form-group">
            <label for="paid">Do you want to cancel this sale(s)?</label>
            
          </div>
         
   
      </div>
      <div class="modal-footer custom-default">
  
        <button type="submit" class="btn btn-default" >Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
</form>
  </div>
</div>


           <?php

	foreach($show_setting as $set){
		
	$content = $set->exchange_rate;
		
	
			}
			?>
</body>




 <script>

function sum() {
			var ex = "<?php echo $content ?>";
			
            var txtAmount = document.getElementById('amount').value;
			var txtPaid = document.getElementById('paid').value;
			
			var txtPaid_khr = document.getElementById('paid_khr').value;
			
			var txtDiscount = document.getElementById('discount').value;
			
			
			
			var paid_total = parseFloat(txtPaid)+ (parseFloat(txtPaid_khr/ex));
			
			
			
				
			var result_total = parseFloat(txtAmount) - (parseFloat(txtAmount*txtDiscount)/100);
            if (!isNaN(result_total)) {
                document.getElementById('grand_total').value = parseFloat(result_total).toFixed(2);
            }
			
			var result_total_khr = parseFloat(result_total) ;
            if (!isNaN(result_total_khr)) {
                document.getElementById('grand_total_khr').value = parseFloat(result_total_khr*ex).toFixed(0);
			}
			
			
            var result = parseFloat(paid_total) - parseFloat(result_total) ;
            if (!isNaN(result)) {
                document.getElementById('change').value = parseFloat(result).toFixed(2);
            }
			
			var resultR = parseFloat(result) ;
            if (!isNaN(resultR)) {
                document.getElementById('changeR').value = parseFloat(resultR*ex).toFixed(0);
			}
		
        }
		


</script>

   <script>

function hPrint() {
			var ex = "<?php echo $content ?>";
			
            var txtAmount = document.getElementById('h_amount').value;
	
			var txtDiscount = document.getElementById('h_discount').value;
			

			var result_total = parseFloat(txtAmount) - (parseFloat(txtAmount*txtDiscount)/100);
            if (!isNaN(result_total)) {
                document.getElementById('h_grand_total').value = parseFloat(result_total).toFixed(2);
            }
			
			var result_total_khr = parseFloat(result_total) ;
            if (!isNaN(result_total_khr)) {
                document.getElementById('h_grand_total_khr').value = parseFloat(result_total_khr*ex).toFixed(0);
			}
		
        }
		


</script>

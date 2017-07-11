<style type="text/css" media="all">
body { max-width: 300px; margin:0 auto; text-align:center; color:#000; font-family: Arial, Helvetica, sans-serif; font-size:12px; }
#wrapper { min-width: 250px; margin: 0 auto; }
#wrapper img { max-width: 300px; width: auto; }

h2, h3, p { margin: 5px 0; }
.left { width:60%; float:left; text-align:left; margin-top: 3px; }
.right { width:40%; float:right; text-align:right; margin-top: 3px; }
.table, .totals { width: 100%; margin:10px 0; font-size:10px; }
.table th { border-top: 1px solid #000; background:#000; color:#FFF; line-height:5px; padding: 5px 0;}
.table td { padding-top:5px; }
.totals td { width: 24%; padding:0; }
.table td:nth-child(2) { overflow:hidden; }

@media print {
	/*body { text-transform: uppercase; }*/
	#buttons { display: none; }
	#wrapper { width: 100%; margin: 0; font-size:9px; }
	#wrapper img { max-width:300px; width: 80%; } 
}

</style>

<div id="wrapper">
<!--<img src="<?php echo base_url();?>image/huathuatlogo2.jpg" alt="Parrot POS" />-->

<?php
	foreach($show_setting as $set){ 	
?>

<img src="<?php echo base_url();?>image/image_logo/<?php echo $set->image;?>" alt="Parrot POS" />

<!--show invoice header-->
 <?php echo $set->invoice_header; ?>
 
 
<?php foreach($show_invoice as $edeit)
		  {
		  ?>
	<span class="left">Tel: <?php echo $set->phone; ?></span>
     <?php if($edeit->h_reference == true){ ?>
    <span class="right">Reference No: <?=$edeit->h_reference;?></span>
   <?php }else{
    echo '<span class="right">Reference No: N/A</span>';
    }
    ?> 
	<span class="right">Sale No. <?=$edeit->inv_id;?></span>
    <span class="left">Seller: <?=$edeit->seller;?></span> 
	<span class="right">Date: <?=$edeit->date;?></span>   <!-- <div style="clear:both;"></div>-->
<?php } ?> 

	<span class="left" style="margin: -2px 0 -1px 0;">Exchange Rate: 1$ =  <?=$set->exchange_rate;?>  ៛    </span>
	
  
	<table class="table" border="0" cellspacing="0"> 
	<thead>
    <tr> 
	    <th  style="border-bottom:none !important; margin-bottom:0 !important"><em>ល.រ</em></th> 
	    <th  style="border-bottom:none !important; margin-bottom:0 !important"">ទំនិញ</th> 
        <th  style="border-bottom:none !important; margin-bottom:0 !important"">ចំនួន</th>
	    <th  style="border-bottom:none !important; margin-bottom:0 !important"">តម្លៃ</th> 
       ​​​<th  style="border-bottom:none !important; margin-bottom:0 !important"">សរុប</th> 
	</tr> 
	<tr> 
	    <th><em>#</em></th> 
	    <th>Description</th> 
        <th>Quantity</th>
	    <th>Price</th> 
        <th>Amount</th>
	</tr> 
	</thead> 
	<tbody>
    	  <?php $i = 1; ?>
    		<?php foreach ($show_detail as $detail) {
				if($edeit->inv_id == $detail->invo_id){
				 ?>
        	
			<tr>
            	<td style="text-align:left; width:20px; padding-bottom:17px !important;"><?php echo $i; ?></td>
                <td style="text-align:left; width:150px; line-height:15px;">&nbsp;<?=$detail->name_k;?> <br />
                 &nbsp;<?=$detail->name;?> </td>
                <td style="text-align:center; padding-bottom:17px !important; width:30px;"><?=$detail->qty;?></td>
                <td style="text-align:right; padding-bottom:17px !important; width:70px; ">$ <?=$detail->price;?></td>
                <td style="text-align:right; padding-bottom:17px !important; width:70px; ">$ <?=$detail->amount;?></td>
			</tr> 
       		<?php $i++; }  ?>
			<?php } ?>
    	</tbody> 
	</table> 
    
    <table class="totals" style="margin-bottom:5px;" border="0" cellspacing="0">
    <tbody>
  
    <tr>    
   	 <td colspan="2" style="text-align:left;  border-top:1px solid #000; font-weight:bold; padding-top:0px;">តម្លៃសរុប​ / Total</td>
   <td colspan="2" style="padding-top:0px; border-top:1px solid #000; text-align:right; font-weight:bold;"> $ <?=$edeit->total_amount;?></td>
    </tr>
    <tr>    
   	 <td colspan="2" style="text-align:left; font-weight:bold; padding-top:0px;">បញ្ចុះតម្លៃ​ / Discount (%)</td>
   <td colspan="2" style="padding-top:0px; text-align:right; font-weight:bold;"> % <?=$edeit->total_discount;?></td>
    </tr>
    <tr>
    <td style="text-align:left;"></td><td style="text-align:right; padding-right:1.5%; border-right: 1px solid #000;font-weight:bold;"></td>
    <td style="text-align:left; padding-left:1.5%;"></td><td style="text-align:right;font-weight:bold;"></td>
    </tr>
    <tr>
    <td colspan="3" style="font-size:12px; text-align:left; font-weight:bold;">ប្រាក់សរុប​ចុងក្រោយ  	</td>
    <td colspan="2" style="font-size:14px; text-align:right; font-weight:bold;"> ៛ <?=$edeit->grand_total_khr;?></td>
    </tr>

      <tr>    
   	 <td colspan="3" style="font-size:12px; text-align:left; font-weight:bold; padding-top:0px;">Grand Total (USD)</td>
   <td colspan="2" style="font-size:14px; padding-top:0px; text-align:right; font-weight:bold;"> $ <?=$edeit->grand_total;?></td>
    </tr>

    <tr>    
    <td colspan="3" style="text-align:left; font-weight:bold; padding-top:5px;">ប្រាក់បានទទួល​ / Received (USD)</td><td colspan="2" style="padding-top:5px; text-align:right; font-weight:bold;"> $ <?=$edeit->cashin;?></td>
    </tr>
    <tr>    
    <td colspan="3" style="text-align:left; font-weight:bold; padding-top:5px;">ប្រាក់បានទទួល​ / Received (Riel)</td><td colspan="2" style="padding-top:5px; text-align:right; font-weight:bold;"> ៛  <?=$edeit->cashin_khr;?></td>
    </tr>
    <tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">ប្រាក់អាប់ </td><td colspan="2" style="padding-top:5px; text-align:right; font-weight:bold;"> ៛ <?=$edeit->change_khr;?></td>
    </tr>
     <tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:0px;">Change (USD) </td><td colspan="2" style="padding-top:0px; text-align:right; font-weight:bold;"> $ <?=$edeit->change;?></td>
    </tr>
        
    </tbody>
    </table>
        
    <div style="border-top:1px solid #000; padding-top:10px;">
    
<!--show invoice footer-->    
  <?php echo $set->invoice_footer; ?>   

<?php } ?>
</div>
    
    <div id="buttons" style="padding-top:10px; text-transform:uppercase;">
    <span><button type="button" name="log" onclick="window.print();return false;" style="width:100%; cursor:pointer; font-size:12px; background-color:#FFA93C; color:#000; text-align: center; border:1px solid #FFA93C; padding: 10px 1px; font-weight:bold;">Print</button></span>
    <div style="clear:both;"></div>
    <a href="<?=site_url('view_controller/home');?>" style="width:95%; display:block; font-size:12px; text-decoration: none; text-align:center; color:#FFF; background-color:#007FFF; border:2px solid #007FFF; padding: 10px 1px; margin: 5px auto 10px auto; font-weight:bold;">Back to POS</a>
    
   
</div>




        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table of Contact Us</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Contact Us</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					    $n=1; 
					  	foreach($get_contactus as $contact){
				      ?>
                      <tr>
                        <td><?=$n;?></td>
                        <td><?=substr(strip_tags($contact->cu_text),0,200).".......";?></td>
                     <?php
						echo '<td>';
							  echo anchor("admin_controller/show_edit_contact_us/".$contact->cu_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
                     ?>
                     	<?php /*?><a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_page/del_event/".pen($event->e_id));?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a><?php */?>
                      </tr>
                      <?php 
					  		echo '</td>';
					  			$n++;
							}
					  ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
        <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>ad_library/js/jQuery-2.1.4.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    


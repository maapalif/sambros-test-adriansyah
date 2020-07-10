<div class="container" style="margin-top: 5px; margin-right: 0px; margin-left: 0px; max-width: 500%; font-size: 12px; ">
	
	<div>
		<a role="button" href="<?php echo site_url('company/save')?>" class="btn btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>New</a>
		<p>	
	</div>
	
		<!-- table -->
		<div class="table-responsive" style="padding-right: 5px;">
			<table id="table" class="table table-striped table-bordered table-hover " width="100%" cellpadding="0" cellspacing="0">
			    <thead>
			      <tr style="background-color: #428bca; color: #FFFFFF;">
			        <th width="1%"><center>No</center></th>
					<th><center>Name</center></th>
					<th><center>Email</center></th>
					<th><center>Phone</center></th>
					<th><center>Adress</center></th>
					<th width="1%"><center>Act</center></th>
			      </tr>
			    </thead>
			    <tbody>
				<?php
				$i = 1;
				foreach($data as $h) {	


				?>
					<tr>
						<td align= "center"><?= $i++; ?></td>
						<td align= "center"><?= $h->name_PIC; ?></td>
				        <td align= "center" nowrap><?= $h->email_PIC; ?></td>
				        <td align= "center" nowrap><?= $h->phone_PIC;?></td>
				        <td align= "center" nowrap><?= $h->address_PIC; ?></td>
				    </tr>
				<?php } ?>
			    </tbody>
			 </table>
		</div>

	</div>
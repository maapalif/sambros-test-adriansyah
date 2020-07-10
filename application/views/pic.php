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
					<th><center>Company Name</center></th>
					<th><center>Company Phone</center></th>
					<th><center>Company Adress</center></th>
					<th><center>Company logo</center></th>
					<th><center>COmpany PIC</center></th>
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
						<td align= "center"><?= $h->name; ?></td>
						<td align= "center" nowrap><?= $h->phone;?></td>
				        <td align= "center" nowrap><?= $h->address; ?></td>
				        <td align= "center" nowrap><?= $h->logo; ?></td>
				        <td align= "center" nowrap><?= $h->pic;?></td>
				        <td align= "center">
							<a href="<?php echo site_url('apar/edit')?>/<?= $h->ID ?>" title="Edit"><i class="fa fa-fw fa-pencil-square" style="color: #000000;"></i></a>
							<a href="<?php echo site_url('apar/delete')?>/<?= $h->ID ?>" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-fw fa-window-close" style="color: #000000;"></i></a>
						</td>  
				    </tr>
				<?php } ?>
			    </tbody>
			 </table>
		</div>

	</div>
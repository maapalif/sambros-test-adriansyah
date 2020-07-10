<div class="container" style="margin-top: 5px; margin-right: 0px; margin-left: 0px; max-width: 500%; font-size: 12px; ">
	
	<div>
		<a role="button" href="<?php echo site_url('apar/save')?>" class="btn btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>New</a>
		<p>	
	</div>
	
		<!-- table -->
		<div class="table-responsive" style="padding-right: 5px;">
			<table id="table" class="table table-striped table-bordered table-hover " width="100%" cellpadding="0" cellspacing="0">
			    <thead>
			      <tr style="background-color: #428bca; color: #FFFFFF;">
			        <th width="1%"><center>No</center></th>
					<th><center>Nomor APAR</center></th>
					<th><center>Titik Lokasi</center></th>
					<th><center>Massa (Kg)</center></th>
					<th><center>Tgl Expired</center></th>
					<th><center>Biaya Refill</center></th>
					<th width="1%"><center>Aksi</center></th>
			      </tr>
			    </thead>
			    <tbody>
				<?php
				$i = 1;
				foreach($data as $h) {	

					$now  = new DateTime();

 					$Exp  = new DateTime($h->a_Exp);
 					if($Exp != "0000-00-00" || $Exp != NULL){
						$Due = $now->diff($Exp)->format("%a");
 					}
 					else{
 						$Due = 0;
 					}

				?>
					<tr>
						<td align= "center"><?= $i++; ?></td>
						<td align= "center"><?= $h->a_APARNo; ?></td>
						<td align= "center" nowrap><?= $h->a_Loc;?></td>
				        <td align= "center" nowrap><?= angkakoma($h->a_Weight); ?></td>
				        <td align= "center" nowrap style="
				        <?php
				        	if($Due <= 40 && $Due != 0){
							echo"background-color: #DC143C;";
							echo"font-weight: bold;";
							}
							else
							{
								echo"font-weight: bold;";
							}
				        ?>"><?php
				        	if($h->a_Exp == '0000-00-00'){
				        		echo " - ";
				        	}
				        	else{
								echo longdate_indo($h->a_Exp) ;
				        	}
				        ?></td>
				        <td align= "center" nowrap><?= $h->a_Price;?></td>
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
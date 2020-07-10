<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Company extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();

		$this->load->model('Company_model');	
	}

	public function index()
	{

		$data = array(
			'title'			=>	'Company',
			'data'			=>	$this->Company_model->getCompany()->result(),
			'main_view'		=>	'company'
		);

		$data['stylesheet'] = array(
			"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css",
			"https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css",
			"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css",
			"https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap4.min.css",
			"https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"
		);

		$data['javascripts'] = array(
			"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js",
			"https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js",
			"https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js",
			"https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"
		);

		$data['final_script'] = "
		 	$(document).ready(function() {
		     
			});	
		";
		
		$this->load->view('themes/template', $data);

  		
	}

	public function PIC()
	{
		
		$data = array(
			'title'			=>	'PIC',
			'data'			=>	$this->Company_model->getPIC()->result(),
			'main_view'		=>	'pic'
		);

		$data['stylesheet'] = array(
			"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css",
			"https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css",
			"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css",
			"https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap4.min.css",
			"https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"
		);

		$data['javascripts'] = array(
			"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js",
			"https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js",
			"https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js",
			"https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js",
			"https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"
		);

		$data['final_script'] = "
		 	$(document).ready(function() {
		     
			});	
		";
		
		$this->load->view('themes/template', $data);

  		
	}

	public function newCompany() {

		$this->form_validation->set_rules('a_Price','Biaya Refill company','required');

		if($this->form_validation->run() == FALSE) {

		$data = array(
				'title'			=>	'New Company',
				'data'			=>	$this->Company_model->getCompany()->result(),
				'main_view'		=>	'new_company'
			);

			$data['stylesheet'] = array(
				"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css",
				"https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css",
				"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css",
				"https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap4.min.css",
				"https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"
			);

			$data['javascripts'] = array(
				"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js",
				"https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js",
				"https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js",
				"https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js",
				"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js",
				"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js",
				"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"
			);

			$data['final_script'] = "
			 	$(document).ready(function() {
			     
				});	
			";
			
			$this->load->view('themes/template', $data);

		}
		else 
		{

			$i 	= $this->input;

			$data = array(
				
				'name'		=> $i->post('name'),
				'address'	=> $i->post('address'),
				'logo'		=> $i->post('logo'),
				'phone'		=> $i->post('phone'),
				'pic'		=> $i->post('pic'),
			);

			$save = $this->company_model->save('p_company', $data);
			if ($save == true){
				$this->session->set_flashdata('success','Data company has been added');
				redirect('company/');
			}
			else 
			{
				$this->session->set_flashdata('error','Something is wrong!');
				redirect('company/save/');
			}	
		

		}

	}

	public function edit () {
		
		$this->require_min_level(1);
		$id  = $this->uri->segment(3);
    	// cek id exist
    	$ci = $this->_model->edit($id);
    	if ($ci != false){

			$this->form_validation->set_rules('a_companyNo','Nomor company','required');

			if($this->form_validation->run() == FALSE) {

	   				$data = array(	

						'title'		=> 'Edit Data company',
						'data' 		=> 	$ci,
						'main_view'	=> 'company/edit'
					);

					$data['stylesheet'] = array(
						"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css",
						"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"

					);

					$data['javascripts'] = array(
						"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js",
						base_url('assets/js/my.js'),
						"https://code.jquery.com/ui/1.12.1/jquery-ui.js"
					);


					$data['final_script'] = "
					$(document).ready(function() {
		    			$('.js-example-basic-multiple').select2();
		    			$('#date1').datepicker({
		    				changeMonth: true,
     						changeYear: true,
							'dateFormat': 'dd-M-yy',
							'showAnim': 'blind',
							'altField': '#date1-alternate',
			  				'altFormat': 'yy-mm-dd'
						});
						$('#date2').datepicker({
							changeMonth: true,
     						changeYear: true,
							'dateFormat': 'dd-M-yy',
							'showAnim': 'blind',
							'altField': '#date2-alternate',
			  				'altFormat': 'yy-mm-dd'
						});
					});		
					";

					$this->load->view('themes/template',$data);

	   		}
	   		else 
	   		{

				$id  = $this->uri->segment(3);
				$i 	= $this->input;

				$data = array(

					'a_companyNo'		=> $i->post('a_companyNo'),
					'a_Loc'			=> $i->post('a_Loc'),
					'a_Weight'		=> $i->post('a_Weight'),
					'a_Exp'			=> $i->post('a_Exp'),
					'a_Price'		=> $i->post('a_Price'),
					
				);

				$where = array('ID'	=> $id );

				$update = $this->company_model->update('p_company', $data, $where);
				if ($update == true){
					$this->session->set_flashdata('success','Data company has been edited');
				}
				else
				{
					$this->session->set_flashdata('info','Data company still same');
				}
				
				redirect('company/');

	    	}
	    }	
    	else
    	{
    		$this->session->set_flashdata('error','Data company does not exists');
    		redirect('company/');
    	}
		    
    }

    // Delete
	public function deleteC() {
		$id = $this->uri->segment(3);
		//var_dump($id);
		$n = 1;
		$i 	= $this->input;
			
		$data  = array('discard'		=> $n,);
		$where = array('ID'	=> $id);

		$update = $this->Company_model->update('company', $data, $where);
		redirect('company/');
	}

	public function deleteP() {
		$id = $this->uri->segment(3);
		//var_dump($id);
		$n = 1;
		$i 	= $this->input;
			
		$data  = array('discard'		=> $n,);
		$where = array('ID'	=> $id);

		$update = $this->Company_model->update('pic', $data, $where);
		redirect('company/pic/');
	}
	
}
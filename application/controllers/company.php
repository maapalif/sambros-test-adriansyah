<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Apar extends MY_Controller {

	public function __construct()
	{
		parent ::__construct();

		$this->load->model('Company_model');	
	}

	public function index()
	{
		$this->require_min_level(1);

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
		
		$this->breadcrumb->add('Home', site_url('pga/'));
		$this->breadcrumb->add('APAR', site_url('apar/'));
		$this->load->view('themes/template', $data);

  		
	}

	public function PIC()
	{
		$this->require_min_level(1);

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
		
		$this->breadcrumb->add('Home', site_url('company/'));
		$this->breadcrumb->add('PIC', site_url('company/pic'));
		$this->load->view('themes/template', $data);

  		
	}


	
}
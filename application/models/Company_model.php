<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model
{

	public function getCompany(){

		$query = $this->db->query('SELECT a.*, b.name_PIC from company a LEFT JOIN PIC b ON a.id_PIC = b.id_PIC ')

		return $query;

	}

	public function getPIC() {

		$query = $this->db->query('SELECT * from PIC')
	}


}
?>
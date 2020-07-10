<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function getCompany(){

		$query = $this->db->query('SELECT a.name as name, a.phone as phone, a.address as address, a.logo as logo, b.name_PIC as PIC from company a LEFT JOIN PIC b ON a.id_PIC = b.id_PIC ');

		return $query;

	}

	public function getPIC() {

		$query = $this->db->query('SELECT b.name_PIC as name, b.phone_PIC as phone,b.email_PIC as email, b.address_PIC as address,  a.name as company from company a LEFT JOIN PIC b ON a.id_PIC = b.id_PIC ');
			return $query;
	}


}
?>
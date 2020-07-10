<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Apar_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll () {

    	$query = $this->db3->from('p_apar')
    					   ->where('discard', 0)
    					   ->order_by('ID')
    					   ->get();

   		return $query;
    }

    public function edit ($id) {

        $query = $this->db3->from('p_apar')
                           ->where('discard', 0)
                           ->where('ID', $id)
                           ->get();

        if($query){
            return $query->row();
        }else{
            return false;
        }
    }

    public function cek_reminder () {

        $query = $this->db3->from('p_apar_r')
                           ->order_by('ra_Exp', 'ASC')
                           ->get();

        return $query;
    }

    // Tambah
    public function save ($table, $data) {
        
        $this->db3->insert($table, $data);
        
        if($this->db3->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function update ($table, $data, $where) {
        
        $this->db3->update($table, $data, $where);
        
        if($this->db3->affected_rows()){
            return true;
        }else{
            return false;
        }

    }
}
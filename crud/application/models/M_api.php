<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2015-07-09 14:49:12
	**/
	
	public function ambilSemua(){
		$query = $this->db->get('buku_tamu');
		$query = $query->result_array();

		return $query;
	}

	public function ambilSatu($where=array()){
		$query = $this->db->get_where('buku_tamu',$where);
		$query = $query->result_array();

		if($query){
			return $query[0];
		}
	}

	public function simpan($inp=array()){
		$query = $this->db->insert('buku_tamu',$inp);
		return $query;
	}

	public function ubah($inp=array(),$id=array()){
		$query = $this->db->update('buku_tamu',$inp,$id);
		return $query;
	}

	public function hapus($inp=array()){
		$query = $this->db->delete('buku_tamu',$inp);
		return $query;
	}

}
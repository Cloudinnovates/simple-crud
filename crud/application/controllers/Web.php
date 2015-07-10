<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2015-07-09 15:15:27
	**/

	function __construct(){
		parent::__construct();
		// Load model 
		$this->load->model('m_api');
		// Load helper url
		$this->load->helper('url');
	}

	public function index(){
		// if button simpan clicked
		if($this->input->post('simpan')){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$pesan = $this->input->post('pesan');

			$input = array(
				'nama'	=> $nama,
				'email'	=> $email,
				'pesan'	=> $pesan
			);

			// Query model save
			$this->m_api->simpan($input);
		}

		// Query from model m_api
		$piew['dataTamu'] = $this->m_api->ambilSemua();

		// Load view and inject variable piew[]
		$this->load->view('list',$piew);
	}

	public function detail(){
		// get id from url
		$id = $this->uri->segment(3);

		if(!empty($id)){
			$piew['dataTamu'] = $this->m_api->ambilSatu(array('buku_id'=>$id));

			// Load view and inject variable piew[]
			$this->load->view('detail',$piew);
		}
	}

	public function ubah(){
		// get id from url
		$id = $this->uri->segment(3);

		// if button ubah clicked
		if($this->input->post('ubah')){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$pesan = $this->input->post('pesan');

			$input = array(
				'nama'	=> $nama,
				'email'	=> $email,
				'pesan'	=> $pesan
			);

			$idna['buku_id'] = $id;

			// Query model update
			$ubah = $this->m_api->ubah($input,$idna);
			if($ubah){
				// if ubah true, then redirect to page web
				redirect(site_url('web'));
			}
		}

		if(!empty($id)){
			$piew['dataTamu'] = $this->m_api->ambilSatu(array('buku_id'=>$id));

			// Load view and inject variable piew[]
			$this->load->view('form',$piew);
		}
	}

	public function hapus(){
		// get id from url
		$id = $this->uri->segment(3);
		if(!empty($id)){
			// Query delete
			$hapus = $this->m_api->hapus(array('buku_id'=>$id));

			if($hapus){
				// if hapus true, then redirect to page web
				redirect(site_url('web'));
			}
		}
	}
	
}
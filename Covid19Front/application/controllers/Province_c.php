<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	session_start();

	class Province_c extends CI_Controller {

		public function province_info()
		{	 
            $data['province'] = $_GET['province'];

			$this->load->model('Actualites_f');
			$data['actualites']=$this->Actualites_f->getActualites();

            $this->load->view('templates/header');
			$this->load->view('Province',$data);
            $this->load->view('templates/footer');
		}	
    }
?>
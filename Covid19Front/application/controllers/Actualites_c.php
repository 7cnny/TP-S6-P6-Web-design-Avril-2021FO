<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	session_start();

	class Actualites_c extends CI_Controller {

		public function details_actu()
		{	 
			$this->load->model('Actualites_f');
            $id_actu = $_GET['id_actu'];	

			$data['details_actualite']=$this->Actualites_f->getActualitesById($id_actu);
			$data['actualites']=$this->Actualites_f->getActualites();

            $this->load->view('templates/header');
			$this->load->view('Actualites',$data);
            $this->load->view('templates/footer');
		}	
    }
?>
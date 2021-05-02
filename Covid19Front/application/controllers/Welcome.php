<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	session_start();

	class Welcome extends CI_Controller {

		public function index()
		{	 
			$this->load->model('Fonctions');
			$this->load->model('Actualites_f');

			$data['evolutionPays']=$this->Fonctions->getEvolutionParPays();
			$data['actualites']=$this->Actualites_f->getActualites();

			$this->load->view('templates/header');
			$this->load->view('World',$data);
			$this->load->view('templates/footer');
		}	

		public function to_world()
		{	
			$this->load->model('Fonctions');
			$this->load->model('Actualites_f');

			$data['evolutionPays']=$this->Fonctions->getEvolutionParPays();
			$data['actualites']=$this->Actualites_f->getActualites();

			$this->load->view('templates/header');
			$this->load->view('World',$data);
			$this->load->view('templates/footer');
		}

		public function to_madagascar()
		{
			$this->load->model('Fonctions');
			$this->load->model('Actualites_f');

			$data['evolutionProvinces']=$this->Fonctions->getEvolutionParProvince("madagascar");
			$data['actualites']=$this->Actualites_f->getActualites();

			$this->load->view('templates/header');
			$this->load->view('Madagascar',$data);
			$this->load->view('templates/footer');
		}
	}
?>
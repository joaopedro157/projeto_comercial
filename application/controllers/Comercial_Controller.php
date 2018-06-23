<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Comercial_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Comercial_model');
		$this->load->helper('pipedrive_api');
		
		
	} 
	
	public function dash()
	{
		$request['valor'] 			= $this->Comercial_model->mrr();
		$request['nConta'] 			= $this->Comercial_model->count();
		$request['closers'] 		= $this->Comercial_model->closer();
		$request['mrrRankin'] 		= $this->Comercial_model->mrrRankin();
		$request['tktMedio'] 		= $this->Comercial_model->tktMedio();
		$request['ciclo_medio'] 	= $this->Comercial_model->ciclo_medio();
		$request['media_do_ciclo'] 	= $this->Comercial_model->media_ciclo();
		$request['grafico'] 		= $this->Comercial_model->grafico_mrr();

		
		//print_r($request['grafico'] );exit;

		$this->load->view('templates/header');
		$this->load->view('templates/pagina_inicial',$request);
		$this->load->view('templates/footer');
		
		

	}

	public function clientes()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/clientes');
		$this->load->view('templates/footer');
	}


	public function index()
	{
		$request['weslei'] = $this->Comercial_model->closer_weslei();
		$request['contas_weslei'] = $this->Comercial_model->contas_weslei();
		
		//print_r($request['contas_weslei']);exit;


		$this->load->view('templates/header');
		$this->load->view('templates/perfil_weslei',$request);
		$this->load->view('templates/footer_profile');
	}
    
    public function perfil_francis()
	{
		$request['vendedor'] = $this->Comercial_model->closer_francis();
		$request['contas_vendedor'] = $this->Comercial_model->contas_francis();
		
		//print_r($request['vendedor']);exit;


		$this->load->view('templates/header');
		$this->load->view('templates/perfil_francis',$request);
		$this->load->view('templates/footer_profile');
	}

}



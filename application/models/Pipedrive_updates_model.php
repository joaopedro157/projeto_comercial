<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pipedrive_updates_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();

	}

	public function salvar($dados)
	{
		$verifica_cadastro = $this->db->get_where("deal", array("id" =>  $dados['id'] ));

		if ($verifica_cadastro->num_rows() > 0) {
			$this->db->update('deal',$dados, array("id" => $dados['id']));

			if($this->db->affected_rows() > 0){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else {
			$this->db->insert('deal', $dados);
				if($this->db->affected_rows() > 0){
					return TRUE;
				}
				else{
					return FALSE;
				}
		}
	}

	public function salvar_avulso($dados)
	{
		$verifica_cadastro = $this->db->get_where("deal_avulso", array("id" => $dados['id'] ));
		
		if ($verifica_cadastro->num_rows() > 0){
			$this->db->update('deal_avulso', $dados, array("id" => $dados['id']));
			
			if($this->db->affected_rows() > 0){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}

		else {
			$this->db->insert('deal_avulso',$dados);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}

		}
	}

	public function salvar_won($dados)
	{
		$verifica_cadastro = $this->db->get_where("deal_won", array("id" =>  $dados['id'] ));


		if ($verifica_cadastro->num_rows() > 0){
			$this->db->update('deal_won', $dados, array("id" => $dados['id']));
			
			if($this->db->affected_rows() > 0){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}

		else {
			$this->db->insert('deal_won',$dados);
			
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}

		}


	}
}




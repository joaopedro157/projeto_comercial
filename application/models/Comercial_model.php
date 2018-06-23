<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comercial_model extends CI_Model {


	public function __construct()
	{
		$this->load->database();

	}


	public function buscar_db()
	{
		$this->db->select('user.name' , 'deal.title');
		$this->db->from('deal');
		$this->db->join('user', 'user.user_id = deal.user_id');
		$query = $this->db->get();

		$dados = $query->result_array();

		return $dados;

	}

	public function bd_query()
	{
		$clientes = $this->db->query
		("SELECT
	    dw.title,
	    ( SELECT NAME FROM USER u WHERE u.user_id = dw.closer) AS 'closer',
	    ( SELECT NAME FROM USER u WHERE u.user_id = dw.sdr) AS 'sdr',
	    ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.mercado) AS 'mercado',
	    ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.origem) AS 'origem',
	    dw.value,
	    dw.ciclo_venda,
	    dw.produto,
	    dw.condicao_fechamento,
	    dw.resumo_fechamento,
	    dw.quant_colaboradores,
	    dw.data_ganho
		FROM
		    USER u
		INNER JOIN deal_won dw ON
		    u.user_id = dw.closer
		INNER JOIN campos_pipe cp ON
		    dw.mercado = cp.id  ");

   return $clientes->result_array(); 
	}

	
	public function mrr()
	{
		$mrr = $this->db->query
		("SELECT SUM(value) FROM deal_won");

	return $mrr->result_array();
	}

	public function count()
	{
		$numeroConta = $this->db->query
		("SELECT count(id) FROM deal_won");

	return $numeroConta->result_array();
	}

	public function closer()
	{
		$closers = $this->db->query
		("SELECT
	    ( SELECT NAME FROM USER u WHERE u.user_id = dw.closer) AS 'closer',
	    ( SELECT SUM(value) FROM deal_won dw WHERE u.user_id = dw.closer) AS 'Total Vendido',
	    ( SELECT COUNT(id) FROM deal_won dw WHERE u.user_id = dw.closer) AS 'Total de Contas',
	    ( SELECT SUM(ciclo_venda) FROM deal_won dw WHERE u.user_id = dw.closer) AS 'Ciclo de Venda'
        FROM
            USER u
        INNER JOIN deal_won dw ON
            u.user_id = dw.closer
        INNER JOIN campos_pipe cp ON
            dw.mercado = cp.id 
        GROUP BY name");
	
		return $closers->result_array();

	}

	public function mrrRankin()
	{
		$mrrRankin = $this->db->query
		("SELECT
    	( SELECT NAME FROM USER u WHERE u.user_id = dw.closer) AS 'closer',
    	( SELECT SUM(value) FROM deal_won dw WHERE u.user_id = dw.closer ) AS 'Total Vendido'
		FROM
    		user u 
		INNER JOIN deal_won dw ON
    		u.user_id = dw.closer
 		GROUP BY name 
 		order by ( SELECT SUM(value) FROM deal_won dw WHERE u.user_id = dw.closer ) desc");

		return $mrrRankin->result_array();
	}

	public function tktMedio()
	{
		$tktMedio = $this->db->query 
		("SELECT
		    ( SELECT NAME FROM USER u WHERE u.user_id = dw.closer) AS 'closer',
		    ( SELECT SUM(value)/COUNT(id) FROM deal_won dw WHERE u.user_id = dw.closer ) AS 'tkt medio'
		FROM
		    user u 
		INNER JOIN deal_won dw ON
		    u.user_id = dw.closer
		 GROUP BY name 
		 order by ( SELECT SUM(value)/COUNT(id) FROM deal_won dw WHERE u.user_id = dw.closer ) desc");
	
		return $tktMedio->result_array();
	}

	public function ciclo_medio()
	{
		$ciclo_medio = $this->db->query
		("SELECT
		    ( SELECT NAME FROM USER u WHERE u.user_id = dw.closer) AS 'closer',
		    ( SELECT SUM(ciclo_venda)/COUNT(id) FROM deal_won dw WHERE u.user_id = dw.closer ) AS 'ciclo'
		FROM
		    user u 
		INNER JOIN deal_won dw ON
		    u.user_id = dw.closer
		 GROUP BY name 
		 order by ( SELECT SUM(ciclo_venda)/COUNT(id) FROM deal_won dw WHERE u.user_id = dw.closer ) asc");

		return $ciclo_medio->result_array();
	}

	public function media_ciclo()
	{
		$media_ciclo = $this->db->query ("SELECT SUM(ciclo_venda)/COUNT(id) FROM deal_won dw" );

		return $media_ciclo->result_array();
	}

	public function grafico_mrr()
	{
		$grafico_mrr = $this->db->query
		("SELECT SUM(value), data_ganho
		FROM deal_won dw
		group by data_ganho");

		return $grafico_mrr->result_array();
	}

	public function closer_weslei()
	{
		$closer_weslei = $this->db->query
		("SELECT
		dw.id,
	    dw.title,
	    ( SELECT NAME FROM USER u WHERE u.user_id = dw.sdr) AS 'sdr',
	    ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.mercado) AS 'mercado',
	    ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.origem) AS 'origem',
	    dw.value,
	    dw.ciclo_venda,
	    dw.produto,
	    dw.condicao_fechamento,
	    dw.resumo_fechamento,
	    dw.quant_colaboradores,
	    dw.data_ganho,
		dw.cenario_lead,
        dw.quant_colaboradores,
        ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.cargo) AS 'cargo'
        FROM
		    USER u
        INNER JOIN deal_won dw ON
		    u.user_id = dw.closer
		INNER JOIN campos_pipe cp ON
		    dw.mercado = cp.id
		WHERE
			dw.closer=687163
		ORDER BY
			data_ganho");
	
	return $closer_weslei->result_array();
	}

	public function contas_weslei()
	{
		$contas_weslei = $this->db->query
		("SELECT 
	       count(id) as 'contas_vendidas',		
           SUM(value) as 'total_vendido'
        FROM 
	       deal_won 
        WHERE 
	       closer=687163");

		return $contas_weslei->result_array();
	}
    	public function closer_francis()
	{
		$closer_weslei = $this->db->query
		("SELECT
		dw.id,
	    dw.title,
	    ( SELECT NAME FROM USER u WHERE u.user_id = dw.sdr) AS 'sdr',
	    ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.mercado) AS 'mercado',
	    ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.origem) AS 'origem',
	    dw.value,
	    dw.ciclo_venda,
	    dw.produto,
	    dw.condicao_fechamento,
	    dw.resumo_fechamento,
	    dw.quant_colaboradores,
	    dw.data_ganho,
		dw.cenario_lead,
        dw.quant_colaboradores,
        ( SELECT campo FROM campos_pipe cp WHERE cp.id = dw.cargo) AS 'cargo'
        FROM
		    USER u
        INNER JOIN deal_won dw ON
		    u.user_id = dw.closer
		INNER JOIN campos_pipe cp ON
		    dw.mercado = cp.id
		WHERE
			dw.closer=2818142
		ORDER BY
			data_ganho");
	
	return $closer_weslei->result_array();
	}

	public function contas_francis()
	{
		$contas_weslei = $this->db->query
		("SELECT 
	       count(id) as 'contas_vendidas',		
           SUM(value) as 'total_vendido'
        FROM 
	       deal_won 
        WHERE 
	       closer=2818142");

		return $contas_weslei->result_array();
	}
    


}
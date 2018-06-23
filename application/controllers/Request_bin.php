<?php

class Request_bin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pipedrive_updates_model');
		$this->load->helper('pipedrive_api_helper');
		
		
	} 
	
	public function pipedrive_post()
	{
		$json = '{"v":1,"matches_filters":{"current":[]},"meta":{"v":1,"action":"updated","object":"deal","id":104442,"company_id":414912,"user_id":3093840,"host":"solides.pipedrive.com","timestamp":1529350673,"timestamp_micro":1529350673042200,"permitted_user_ids":[687163,587264,687160,687168,687172,687176,687180,709259,770038,847108,856378,856382,906078,1137407,1137412,1223014,1628479,1637928,1655726,1718175,1745963,1824485,1851563,1851575,1851599,1980157,2057883,2111290,2111293,2111298,2111311,2116335,2116340,2319191,2319202,2413476,2458545,2458552,2493071,2605397,2688527,2688534,2765925,2765929,2765931,2807038,2818142,2860785,2861731,2929617,2930904,2930908,3093835,3093840,3251927,3251937,3275510,3984333,3986688,3986714,3986736,5032774,5032799,5032810,5032821,5032829,5032833,5032847,5046700,5134352,5189946,5190023,5190032,5190033],"trans_pending":false,"is_bulk_update":false,"pipedrive_service_name":false,"matches_filters":{"current":[]},"webhook_id":"55572"},"current":{"id":104442,"creator_user_id":709259,"user_id":687163,"person_id":87053,"org_id":67759,"stage_id":134,"title":"Demarco","value":1000,"currency":"BRL","add_time":"2018-05-27 23:57:47","update_time":"2018-06-18 19:37:53","stage_change_time":"2018-06-18 17:34:49","active":false,"deleted":false,"status":"won","probability":null,"next_activity_date":null,"next_activity_time":null,"next_activity_id":null,"last_activity_id":300246,"last_activity_date":"2018-06-14","lost_reason":null,"visible_to":"3","close_time":"2018-06-18 19:37:52","pipeline_id":21,"won_time":"2018-06-18 19:37:52","first_won_time":"2018-06-18 19:37:52","lost_time":null,"products_count":1,"files_count":0,"notes_count":3,"followers_count":3,"email_messages_count":0,"activities_count":5,"done_activities_count":5,"undone_activities_count":0,"reference_activities_count":0,"participants_count":1,"expected_close_date":"2018-06-29","ad52fb6c63280806e3734c32e61038d28039f580":687176,"3e2991df07a25c776a7f11e2c6782a1b0c4064de":"------------","last_incoming_mail_time":null,"last_outgoing_mail_time":null,"fbce0df9598463f9c9c748683188adbf25828fdd":"157","f799f9afba9b4ed83438c0262510d4985c27481b":"http://demarco.com.br/","62d0e5a5cd8225310ea8c044063ff94da18fd015":"Trial","186d11b7fb863185058271b52128fa7752d4410c":"182","99a82cb0e29b3b998f491c05af8a55094e4cc701":"196","8adc4874811c46505565954840ca710306d0e559":"198","6175b85ba04c1348f87d5b7f5961a54ab179c483":"256","336eec072dc37308f8f0458ad19680292efca387":100,"b06f7f49f90950900be0bc1c7e1600096af9b7cd":"-----------","48359c2b9e6663f1f515a48b0a6c766f2370b5bc":687163,"253ef3d8c4d47ac1a0ab30f37e9e0be1371899c4":"---------------","0f87e7ba22be8358c8aeb8e246884917d788628e":"2018-05-27","39c4d1dd7451c3623d29d8bbfbb41bdb0b4b49e9":"Página: rh-melhor - Trial Profiler Gestão","ca4a85fd80f7679c9bf9917788cfb349ccc0c406":"31 99925-9704","719eae8cbead5f3730910de201e856f365df8d9d":"Douglas conhece o Profiler, fez curso de coaching, interesse em mapear os colaboradores estão na cadeira certa. Tem 3 empresa, uma de TI, uma de consultoria de legislação trabalhista e uma de desenho de processos. Interesse em indicar para clientes.","4f109e9b8021e112f28b913f289a7956ae3de425":"410","b82f187d09350ac8e4dc29c80cd643cb0158eb5d":"400","081534d03763b105f7afe606f3139c00e1947247":"405","efe9464ddbd0eecb8459a544df00934c71a594c7":null,"b60415d151377ed2b507aecb15dd1bd31d188579":"lead_scoring_perfil_a,levantada de mão trial","f55147bd2d1ac441ce1fb865d7a9d93d7e4637cf":null,"90f1861d44c16250f4809fc83480182e31eb7a36":"De 50 a 99 funcionários - trial","cc94fd9932bc053bb36ba768f53d4b77007ab5f8":"https://www.linkedin.com/in/douglas-demarco-808301128/","4679f896a7accaed359932edd6319330604180f4":"441","stage_order_nr":4,"person_name":"Douglas DEMARCO","org_name":"GENTE E GESTÃO - SISTEMAS E SERVIÇOS LTDA","next_activity_subject":null,"next_activity_type":null,"next_activity_duration":null,"next_activity_note":null,"formatted_value":"R$1.000","weighted_value":1000,"formatted_weighted_value":"R$1.000","weighted_value_currency":"BRL","rotten_time":null,"owner_name":"C- Weslei Amorim","cc_email":"solides+deal104442@pipedrivemail.com","org_hidden":false,"person_hidden":false},"previous":{"id":104442,"creator_user_id":709259,"user_id":687163,"person_id":87053,"org_id":67759,"stage_id":134,"title":"Demarco","value":1000,"currency":"BRL","add_time":"2018-05-27 23:57:47","update_time":"2018-06-18 17:37:02","stage_change_time":"2018-06-18 17:34:49","active":true,"deleted":false,"status":"open","probability":null,"next_activity_date":null,"next_activity_time":null,"next_activity_id":null,"last_activity_id":300246,"last_activity_date":"2018-06-14","lost_reason":null,"visible_to":"3","close_time":null,"pipeline_id":21,"won_time":null,"first_won_time":null,"lost_time":null,"products_count":1,"files_count":0,"notes_count":3,"followers_count":3,"email_messages_count":0,"activities_count":5,"done_activities_count":5,"undone_activities_count":0,"reference_activities_count":0,"participants_count":1,"expected_close_date":"2018-06-29","ad52fb6c63280806e3734c32e61038d28039f580":687176,"3e2991df07a25c776a7f11e2c6782a1b0c4064de":"------------","last_incoming_mail_time":null,"last_outgoing_mail_time":null,"fbce0df9598463f9c9c748683188adbf25828fdd":"157","f799f9afba9b4ed83438c0262510d4985c27481b":"http://demarco.com.br/","62d0e5a5cd8225310ea8c044063ff94da18fd015":"Trial","186d11b7fb863185058271b52128fa7752d4410c":"182","99a82cb0e29b3b998f491c05af8a55094e4cc701":"196","8adc4874811c46505565954840ca710306d0e559":"198","6175b85ba04c1348f87d5b7f5961a54ab179c483":"256","336eec072dc37308f8f0458ad19680292efca387":100,"b06f7f49f90950900be0bc1c7e1600096af9b7cd":"-----------","48359c2b9e6663f1f515a48b0a6c766f2370b5bc":687163,"253ef3d8c4d47ac1a0ab30f37e9e0be1371899c4":"---------------","0f87e7ba22be8358c8aeb8e246884917d788628e":"2018-05-27","39c4d1dd7451c3623d29d8bbfbb41bdb0b4b49e9":"Página: rh-melhor - Trial Profiler Gestão","ca4a85fd80f7679c9bf9917788cfb349ccc0c406":"31 99925-9704","719eae8cbead5f3730910de201e856f365df8d9d":"Douglas conhece o Profiler, fez curso de coaching, interesse em mapear os colaboradores estão na cadeira certa. Tem 3 empresa, uma de TI, uma de consultoria de legislação trabalhista e uma de desenho de processos. Interesse em indicar para clientes.","4f109e9b8021e112f28b913f289a7956ae3de425":"410","b82f187d09350ac8e4dc29c80cd643cb0158eb5d":"400","081534d03763b105f7afe606f3139c00e1947247":"405","efe9464ddbd0eecb8459a544df00934c71a594c7":null,"b60415d151377ed2b507aecb15dd1bd31d188579":"lead_scoring_perfil_a,levantada de mão trial","f55147bd2d1ac441ce1fb865d7a9d93d7e4637cf":null,"90f1861d44c16250f4809fc83480182e31eb7a36":"De 50 a 99 funcionários - trial","cc94fd9932bc053bb36ba768f53d4b77007ab5f8":"https://www.linkedin.com/in/douglas-demarco-808301128/","4679f896a7accaed359932edd6319330604180f4":"441","stage_order_nr":4,"person_name":"Douglas DEMARCO","org_name":"GENTE E GESTÃO - SISTEMAS E SERVIÇOS LTDA","next_activity_subject":null,"next_activity_type":null,"next_activity_duration":null,"next_activity_note":null,"formatted_value":"R$1.000","weighted_value":350,"formatted_weighted_value":"R$350","weighted_value_currency":"BRL","rotten_time":"2018-07-28 17:37:02","owner_name":"C- Weslei Amorim","cc_email":"solides+deal104442@pipedrivemail.com","org_hidden":false,"person_hidden":false},"indexable_fields":["efe9464ddbd0eecb8459a544df00934c71a594c7","336eec072dc37308f8f0458ad19680292efca387","90f1861d44c16250f4809fc83480182e31eb7a36","719eae8cbead5f3730910de201e856f365df8d9d","62d0e5a5cd8225310ea8c044063ff94da18fd015","253ef3d8c4d47ac1a0ab30f37e9e0be1371899c4","cc94fd9932bc053bb36ba768f53d4b77007ab5f8","3e2991df07a25c776a7f11e2c6782a1b0c4064de","ca4a85fd80f7679c9bf9917788cfb349ccc0c406","f799f9afba9b4ed83438c0262510d4985c27481b","b06f7f49f90950900be0bc1c7e1600096af9b7cd","0f87e7ba22be8358c8aeb8e246884917d788628e","39c4d1dd7451c3623d29d8bbfbb41bdb0b4b49e9","b60415d151377ed2b507aecb15dd1bd31d188579"],"event":"updated.deal","retry":0}';


		$request = json_decode($json,1);

		//print_r($request);exit;

		if($request['current']['status'] == "open"){

			if($request['meta']['object'] == "deal"){

				
				switch ($request['current']['pipeline_id']){
					case "20":
						self::_updates($request);
						break;
					
					case "21":
						self::_updates($request);
						break;
					
					case "25":
						self::_updates_avulso($request);
						break;
	 				
	 				default:
	 					 
						break;
				}		
		
			}

			else{
				return false;
			}
		}		

		elseif ($request['current']['status'] == "won") {
		 	
		 	self::_updates_won($request);
		 

		 } 
	
	}
	private function _updates($request)
	{

		$current_stage =  $request['current']['stage_id'];
		$previous_stage =  $request['previous']['stage_id'];
		$sdr = pipedrive_get_usuario($request['current'][PIPEDRIVE_QUALIFICADOR_FIELD]);
		$closer = pipedrive_get_usuario($request['current'][PIPEDRIVE_CLOSER_FIELD]); 
		$deal = pipedrive_get_deal($request['meta']['id']); 
		


		$dados_deal = array(			
			'id' 					=> $request['meta']['id'],
			'user_id' 				=> $request['current']['user_id'],
			'title' 				=> $request['current']['title'],
			'value' 				=> $request['current']['value'],
			'status' 				=> $request['current']['status'],
			'stage_change_time' 	=> $request['current']['stage_change_time'],
			'next_activity_date' 	=> $request['current']['next_activity_date'],
			'last_activity_date' 	=> $request['current']['last_activity_date'],
			'sdr' 					=> $request['current'][PIPEDRIVE_QUALIFICADOR_FIELD],
			'mercado' 				=> $request['current'][PIPEDRIVE_FIELD_MERCADO],
			'localizacao' 			=> $request['current'][PIPEDRIVE_FIELD_LOCALIZACAO],
			'cargo' 				=> $request['current'][PIPEDRIVE_FIELD_CARGO],
			'quant_colaboradores' 	=> $request['current'][PIPEDRIVE_FIELD_QUANT_COLABORADOR],
			'closer'				=> $request['current'][PIPEDRIVE_CLOSER_FIELD],
			'cenario_lead' 			=> $request['current'][PIPEDRIVE_FIELD_CENARIO],
			'origem' 				=> $request['current'][PIPEDRIVE_FIELD_ORIGEM],
			'stage_id' 				=> $request['current']['stage_id'],
		);
	
	$this->Pipedrive_updates_model->salvar($dados_deal);
	}

	private function _updates_avulso($request)
	{			
		$current_stage 	= $request['current']['stage_id'];
		$previous_stage =  $request['previous']['stage_id'];
		$deal 			= pipedrive_get_deal($request['meta']['id']); 

		$dados_deal = array(
			'id' => $request['meta']['id'],
			'user_id' => $request['current']['user_id'],
			'value' => $request['current']['value'],
			'last_activity' =>$request['current']['last_activity'],
		);

	$this->Pipedrive_updates_model->salvar_avulso($dados_deal);


	}

	private function _updates_won($request)
	{

		$org = pipedrive_get_organization($request['current']['org_id']);
		$deal = pipedrive_get_deal($request['meta']['id']);
		$deal_activitys = pipedrive_get_deal_updates($request['meta']['id']);
		$produto = pipedrive_get_deal_products($request['meta']['id']);

        print_r($org);exit;

		foreach ($deal_activitys['data'] as $data) {
			if(isset($data['data']['type']) && $data['data']['type'] == 'demonstrao_agendada'){
				$data_diagnostico = $data['data']['due_date'];

				if($deal['data']['won_time'] == null) { //subtração das datas
					$data6 = "-1";
				}
				
				else {
				$data1 = date_create($deal['data']['won_time']);
				$data2 = date_format($data1 , 'Y-m-d'); 
							

				$data3 = new DateTime($data_diagnostico);
				$data4 = new DateTime($data2);

				$data5 = date_diff($data3,$data4); 
				$data6 = $data5->format("%a");
			    
			    }
			}		
			

		   	if(isset($data_diagnostico)){

		   		

			   	$dados_deal = array(			
					'id' 					=> $request['meta']['id'],
					'title' 				=> $request['current']['title'],
					'value' 				=> $request['current']['value'],
					'sdr' 					=> $request['current'][PIPEDRIVE_QUALIFICADOR_FIELD],
					'pessoa_contato'        => $request['current']['person_name'],
                    'mercado' 				=> $request['current'][PIPEDRIVE_FIELD_MERCADO],
					'localizacao' 			=> $request['current'][PIPEDRIVE_FIELD_LOCALIZACAO],
					'cargo' 				=> $request['current'][PIPEDRIVE_FIELD_CARGO],
					'quant_colaboradores' 	=> $request['current'][PIPEDRIVE_FIELD_QUANT_COLABORADOR],
					'closer'				=> $request['current'][PIPEDRIVE_CLOSER_FIELD],
					'cenario_lead' 			=> $request['current'][PIPEDRIVE_FIELD_CENARIO],
					'origem' 				=> $request['current'][PIPEDRIVE_FIELD_ORIGEM],
					'condicao_fechamento'	=> $org['data'][PIPEDRIVE_FIELD_CONDICAO_FECHAMENTO],
					'resumo_fechamento'		=> $org['data'][PIPEDRIVE_FIELD_RESUMO_FECHAMENTO],
					'data_vencimento'       => $org['data'][PIPEDRIVE_FIELD_DATA_VENCIMENTO],
                    'ciclo_venda'			=> $data6,
					'produto'				=> $produto['data']['0']['name'],
					'data_ganho'			=> $data2,
                );
		   		

		   		$this->Pipedrive_updates_model->salvar_won($dados_deal);
				return true;

		   	
		   	}
		}
		
		
	}



}
<?php
class Tempatmakan_m extends MY_Model
{
	protected $_table_name = 'tempatmakan';
	protected $_order_by = 'id';
	public $rules = array(
		'NamaResto' => array(
			'field' => 'NamaResto', 
			'label' => 'NamaResto', 
			'rules' => 'trim|required|max_length[100]|xss_clean'
		),
                'AlamatResto' => array(
			'field' => 'AlamatResto', 
			'label' => 'AlamatResto', 
			'rules' => 'trim|required|max_length[200]|xss_clean'
		),
		'NomorResto' => array(
			'field' => 'NomorResto', 
			'label' => 'NomorResto', 
			'rules' => 'trim|required|max_length[20]||xss_clean'
		),
		'EmailResto' => array(
			'field' => 'EmailResto', 
			'label' => 'EmailResto', 
			'rules' => 'trim|required|max_length[50]|valid_email|callback__unique_email|xss_clean'
		),
	);

	public function get_new ()
	{
		$tempatmakan = new stdClass();
		$tempatmakan->NamaResto = '';
		$tempatmakan->AlamatResto = '';
		$tempatmakan->NomorResto = '';
                $tempatmakan->EmailResto = '';
		return $tempatmakan;
	}
}
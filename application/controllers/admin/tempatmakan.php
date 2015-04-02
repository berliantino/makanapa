<?php
class Tempatmakan extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('tempatmakan_m');
	}

	public function index ()
	{
		// Fetch all tempatmakans
		$this->data['tempatmakan'] = $this->tempatmakan_m->get(); 
		
		// Load view
		$this->data['subview'] = 'admin/tempatmakan/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit ($id = NULL)
	{
		// Fetch a tempatmakan or set a new one
		if ($id) {
			$this->data['tempatmakan'] = $this->tempatmakan_m->get($id);
			count($this->data['tempatmakan']) || $this->data['errors'][] = 'tempatmakan could not be found';
		}
		else {
			$this->data['tempatmakan'] = $this->tempatmakan_m->get_new();
		}
		
		// Set up the form
		$rules = $this->tempatmakan_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->tempatmakan_m->array_from_post(array('NamaResto', 'AlamatResto', 'NomorResto','EmailResto'));
			$this->tempatmakan_m->save($data, $id);
			redirect('admin/tempatmakan');
		}
		
		// Load the view
		$this->data['subview'] = 'admin/tempatmakan/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function delete ($id)
	{
		$this->tempatmakan_m->delete($id);
		redirect('admin/tempatmakan');
	}

	public function _unique_NamaResto ($str)
	{
		// Do NOT validate if restoran already exists
		// UNLESS it's the slug for the current tempatmakan
		
		$id = $this->uri->segment(4);
		$this->db->where('NamaResto', $this->input->post('NamaResto'));
		!$id || $this->db->where('id !=', $id);
		$tempatmakan = $this->tempatmakan_m->get();
		
		if (count($tempatmakan)) {
			$this->form_validation->set_message('_unique_NamaResto', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}
}
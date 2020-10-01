<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('StudentModel');
		$this->load->helper('form');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('StudentModel','stdModel',true);
		$data['std'] = $this->StudentModel->getList();
		$this->load->view('studentForm',$data);
		$this->load->view('stdList',$data);
	}

	/**
	*Save Function
	*/

	public function stdSave()
	{
		$std = array(

			'stdName' => $this->input->post('stdName'),
			'stdClass' => $this->input->post('stdClass'),
			'stdPercentage' => $this->input->post('stdPercentage')

		);

		$data = $this->StudentModel->stdSave($std);
		redirect('http://localhost/studentDemo/Student');
	}

	/**
	Edit Function
	*/

	public function stdEdit($id = null)
	{
		$this->load->model('StudentModel', 'stdModel', true);
		$data['std'] = $this->stdModel->searchById($id);
		$this->load->view('stdEdit', $data);
	}

	/**
	Update Function
	*/ 

	public function stdUpdate()
	{
		$input = $this->input->post();

		$this->load->model('StudentModel','myStd', true);

		$id 		= $input['stdId'];
		$inputData 	= [
			'stdName' 			=> $input['stdName'],
			'stdClass' 	        => $input['stdClass'],
			'stdPercentage' 	=> $input['stdPercentage']
			
		];

		$status = $this->StudentModel->update($id, $inputData);

		if($status)
		{
			redirect('Student', 'refresh');
		}

		redirect('/', 'refresh');
	}

	/**
	*Delete Function
	*/

	public function stdDelete($id)
	{
	    $this->load->model('StudentModel', 'myStd' ,true);
	    $this->StudentModel->delete($id);
	    redirect('Student', 'refresh');
	}
}


?>
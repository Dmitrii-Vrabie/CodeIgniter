<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller
{
	public function index()
	{
	    $this->load->model('Region_model', 'region');
	    $data['regions'] = $this->region->get_entries();

		$this->load->view('header');
		$this->load->view('region/list', $data);
		$this->load->view('footer');
	}

    public function create()
    {
        $this->load->model('Region_model', 'region');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('area', 'Area', 'required|max_length[15]');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[35]');
        $this->form_validation->set_rules('pastures_area', 'Pastures area', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [];
        } else {
            $data = array(
                'area' => $this->input->post('area'),
                'name' => $this->input->post('name'),
                'pastures_area' => $this->input->post('pastures_area'),
                'population' => $this->input->post('population'),
                'students' => $this->input->post('students'),
                'teachers' => $this->input->post('teachers'),
                'pensioners' => $this->input->post('pensioners'),
                'employed' => $this->input->post('employed'),
            );
            $this->region->insert_entry($data);
            $data['message'] = 'Data Inserted Successfully';
        }

        $this->load->view('header');
        $this->load->view('region/create', $data);
        $this->load->view('footer');
	}

    public function detail($id)
    {
        $this->load->model('Region_model', 'region');
        $data['region'] = $this->region->get_entry($id);
        if (!$data['region']) {
            echo 'Region not found';
            return false;
        }

        $this->load->view('header');
        $this->load->view('region/detail', $data);
        $this->load->view('footer');
	}
}

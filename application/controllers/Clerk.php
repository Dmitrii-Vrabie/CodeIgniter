<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clerk extends CI_Controller
{
    const MODEL = 'Clerk_model';

	public function index()
	{
	    $this->load->model(self::MODEL, 'clerk');
	    $data['clerks'] = $this->clerk->get_entries();

		$this->load->view('header');
		$this->load->view('clerk/list', $data);
		$this->load->view('footer');
	}

    public function create()
    {
        $this->load->model(self::MODEL, 'clerk');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('region_id', 'Region', 'required');

        $data['regions'] = $this->getRegionsArray();

        if ($this->form_validation->run() !== FALSE) {
            $data += [
                'area' => $this->input->post('area'),
                'pastures_area' => $this->input->post('pastures_area'),
                'population' => $this->input->post('population'),
                'students' => $this->input->post('students'),
                'teachers' => $this->input->post('teachers'),
                'pensioners' => $this->input->post('pensioners'),
                'employed' => $this->input->post('employed'),
            ];
            $this->clerk->insert_entry($data);
            $data['message'] = 'Data Inserted Successfully';
        }

        $this->load->view('header');
        $this->load->view('clerk/create', $data);
        $this->load->view('footer');
	}

    public function detail($id)
    {
        $this->load->model(self::MODEL, 'clerk');
        $data['clerk'] = $this->clerk->get_entry($id);
        $data['regions'] = $this->getRegionsArray();
        if (!$data['clerk']) {
            echo 'Clerk not found';
            return false;
        }

        $this->load->view('header');
        $this->load->view('clerk/detail', $data);
        $this->load->view('footer');
	}

    private function getRegionsArray()
    {
        $this->db->select(['id', 'name']);
        $this->db->from('region');
        $query = $this->db->get();
        $regions = ['' => '---'];
        foreach ($query->result() as $region) {
            $regions[$region->id] = $region->name;
        };

        return $regions;
	}
}

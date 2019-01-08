<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Controller
{
    const MODEL = 'Budget_model';

	public function index()
	{
        $this->load->model(self::MODEL, 'budget');
        $data['budgets'] = $this->budget->get_entries();
		$this->load->view('header');
		$this->load->view('budget/list', $data);
		$this->load->view('footer');
	}

    public function create()
    {
        $this->load->model(self::MODEL, 'budget');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('region_id', 'Region', 'required');

        $data['regions'] = $this->getRegionsArray();

        if ($this->form_validation->run() !== FALSE) {
            $data += [
                'region' => $this->input->post('region_id'),
                'year' => $this->input->post('year'),
                'budget' => $this->input->post('budget'),
                'outlay' => $this->input->post('outlay'),
                'gain' => $this->input->post('gain'),
                'transfer' => $this->input->post('transfer'),
            ];
            $this->budget->insert_entry($data);
            $data['message'] = 'Data Inserted Successfully';
        }

        $this->load->view('header');
        $this->load->view('budget/create', $data);
        $this->load->view('footer');
	}

    public function detail($id)
    {
        $this->load->model(self::MODEL, 'budget');
        $data['budget'] = $this->budget->get_entry($id);
        $data['regions'] = $this->getRegionsArray();
        if (!$data['budget']) {
            echo 'Clerk not found';
            return false;
        }

        $this->load->view('header');
        $this->load->view('budget/detail', $data);
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

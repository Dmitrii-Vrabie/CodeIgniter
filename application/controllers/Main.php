<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
	    $this->load->model('Region_model', 'region');
	    $data['data'] = $this->getData();
        echo $this->db->last_query();

		$this->load->view('header');
		$this->load->view('main/list', $data);
		$this->load->view('footer');
	}

    private function getData()
    {
        $data['data'] = $this->db->select('*, region.id as reg_id');
        $this->db->from('region');
        $this->db->join('clerks', 'region.id = clerks.region_id', 'left');
        $this->db->join('budget', 'region.id = budget.region_id', 'left');
        return $this->db->get()->result();
    }
}

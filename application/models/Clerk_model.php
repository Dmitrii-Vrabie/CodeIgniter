<?php


class Clerk_model extends CI_Model
{
    const TABLE = 'clerks';

    public $region_id;
    public $clerks;
    public $salary_fund_month;
    public $salary_fund_year;
    public $reform;

    public function get_entry($id)
    {
        $this->db->select('*');
        $this->db->from(self::TABLE);
        $this->db->where("id = {$id}");
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result()[0] ?? false;
    }

    public function get_entries()
    {
        $query = $this->db->get(self::TABLE);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->load();
        $this->db->insert(self::TABLE, $this);
    }

    public function update_entry()
    {
        $this->load();
        $this->db->update(self::TABLE, $this, ['id' => $_POST['id']]);
    }

    private function load()
    {
        $this->region_id = $_POST['region_id'];
        $this->clerks = $_POST['clerks'];
        $this->salary_fund_month = $_POST['salary_fund_month'];
        $this->salary_fund_year = $_POST['salary_fund_year'];
        $this->reform = $_POST['reform'];
    }
}
<?php


class Region_model extends CI_Model
{
    const TABLE = 'region';

    public $area;
    public $pastures_area;
    public $population;
    public $students;
    public $teachers;
    public $pensioners;
    public $employed;

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
        $query = $this->db->get('region');
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
        $this->area = $_POST['area'];
        $this->pastures_area = $_POST['pastures_area'];
        $this->population = $_POST['population'];
        $this->students = $_POST['students'];
        $this->teachers = $_POST['teachers'];
        $this->pensioners = $_POST['pensioners'];
        $this->employed = $_POST['employed'];
    }
}
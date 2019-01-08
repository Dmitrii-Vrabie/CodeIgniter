<?php

class Migration_add_budget extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
            array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
                ),
                'region_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                ),
                'year' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),
                'budget' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'salary_fund_year' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'outlay' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'gain' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'transfer' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
            )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('budget');
    }

    public function down()
    {
        $this->dbforge->drop_table('budget');
    }
}

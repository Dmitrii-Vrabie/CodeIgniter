<?php

class Migration_add_clerks extends CI_Migration
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
                'clerks' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),
                'salary_fund_month' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'salary_fund_year' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'reform' => array(
                    'type' => 'BOOL',
                ),
            )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('clerks');
    }

    public function down()
    {
        $this->dbforge->drop_table('clerks');
    }
}

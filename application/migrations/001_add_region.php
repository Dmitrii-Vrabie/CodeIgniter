<?php

class Migration_add_region extends CI_Migration
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
                'area' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'pastures_area' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '10,2',
                    'null' => true,
                ),
                'population' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),
                'students' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),
                'teachers' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),
                'pensioners' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),
                'employed' => array(
                    'type' => 'INT',
                    'constraint' => '10',
                    'null' => true,
                ),

            )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('region');
    }

    public function down()
    {
        $this->dbforge->drop_table('region');
    }
}

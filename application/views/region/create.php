<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <?= form_open('region/create'); ?>
        <div class="form-group">
        <label for="exampleInputEmail1">Area</label>
            <?= form_input(['name' => 'area', 'id' => 'area', 'class' => 'form-control']) ?>
            <?php echo form_error('area'); ?>
        </div>
        <div class="form-group">
            <label for="pastures_area">Pastures area</label>
                <?= form_input(['name' => 'pastures_area', 'id' => 'pastures_area', 'class' => 'form-control']) ?>
                <?php echo form_error('pastures_area'); ?>
        </div>
        <div class="form-group">
            <label for="population">Population</label>
            <?= form_input(['name' => 'population', 'id' => 'population', 'class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <label for="students">Students</label>
                <?= form_input(['name' => 'students', 'id' => 'students', 'class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <label for="teachers">Teachers</label>
                <?= form_input(['name' => 'teachers', 'id' => 'teachers', 'class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <label for="pensioners">Pensioners</label>
                <?= form_input(['name' => 'pensioners', 'id' => 'pensioners', 'class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <label for="employed">Employed</label>
                <?= form_input(['name' => 'employed', 'id' => 'employed', 'class' => 'form-control']) ?>
        </div>
        <?= form_submit(['id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary']) ?>
    <?= form_close(); ?>
</div>

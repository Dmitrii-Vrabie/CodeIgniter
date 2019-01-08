<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <?= form_open('budget/create'); ?>
    <div class="form-group">
        <label for="region_id">Region</label>
        <?= form_dropdown(['name' => 'region_id', 'id' => 'region_id', 'class' => 'form-control'], $regions, $budget->region_id) ?>
        <?php echo form_error('clerk'); ?>
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <?= form_input(['name' => 'year', 'id' => 'year', 'class' => 'form-control'], $budget->year) ?>
    </div>
    <div class="form-group">
        <label for="budget">Budget</label>
        <?= form_input(['name' => 'budget', 'id' => 'budget', 'class' => 'form-control'], $budget->budget) ?>
    </div>
    <div class="form-group">
        <label for="outlay">Outlay</label>
        <?= form_input(['name' => 'outlay', 'id' => 'outlay', 'class' => 'form-control'], $budget->outlay) ?>
    </div>
    <div class="form-group">
        <label for="gain">Gain</label>
        <?= form_input(['name' => 'gain', 'id' => 'gain', 'class' => 'form-control'], $budget->gain) ?>
    </div>
    <div class="form-group">
        <label for="transfer">Trasnfer</label>
        <?= form_input(['name' => 'transfer', 'id' => 'transfer', 'class' => 'form-control'], $budget->transfer) ?>
    </div>
    <?= form_submit(['id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary']) ?>
    <?= form_close(); ?>
</div>

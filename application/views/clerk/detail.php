<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <?= form_open('clerk/create'); ?>
    <div class="form-group">
        <label for="region_id">Region</label>
        <?= form_dropdown(['name' => 'region_id', 'id' => 'region_id', 'class' => 'form-control'], $regions, $clerk->region_id) ?>
        <?php echo form_error('clerk'); ?>
    </div>
    <div class="form-group">
        <label for="clerks">Clerks</label>
        <?= form_input(['name' => 'clerks', 'id' => 'clerks', 'class' => 'form-control'], $clerk->clerks) ?>
    </div>
    <div class="form-group">
        <label for="population">Salary fund month</label>
        <?= form_input(['name' => 'salary_fund_month', 'id' => 'salary_fund_month', 'class' => 'form-control'], $clerk->salary_fund_month) ?>
    </div>
    <div class="form-group">
        <label for="students">Salary fund year</label>
        <?= form_input(['name' => 'salary_fund_year', 'id' => 'salary_fund_year', 'class' => 'form-control'], $clerk->salary_fund_year) ?>
    </div>
    <div class="form-group">
        <label for="teachers">Reform</label>
        <?= form_input(['name' => 'reform', 'id' => 'reform', 'class' => 'form-control'], $clerk->reform) ?>
    </div>
    <?= form_submit(['id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary']) ?>
    <?= form_close(); ?>
</div>

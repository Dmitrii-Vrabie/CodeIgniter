<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Area</th>
        <th scope="col">Pastures area</th>
        <th scope="col">Population</th>
        <th scope="col">Students</th>
        <th scope="col">Teachers</th>
        <th scope="col">Pensioners</th>
        <th scope="col">Employed</th>

        <th scope="col">Clerks</th>
        <th scope="col">Salary fund month</th>
        <th scope="col">Salary fund year</th>
        <th scope="col">Reform</th>

        <th scope="col">Year</th>
        <th scope="col">Budget</th>
        <th scope="col">Outlay</th>
        <th scope="col">Gain</th>
        <th scope="col">Transfer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $index => $row) { ?>
        <tr>
            <th scope="row"><?= $row->reg_id ?></th>
            <td><?= $row->name ?></td>
            <td><?= $row->area ?></td>
            <td><?= $row->pastures_area ?></td>
            <td><?= $row->population ?></td>
            <td><?= $row->students ?></td>
            <td><?= $row->teachers ?></td>
            <td><?= $row->pensioners ?></td>
            <td><?= $row->employed ?></td>

            <td><?= $row->clerks ?></td>
            <td><?= $row->salary_fund_month ?></td>
            <td><?= $row->salary_fund_year ?></td>
            <td><?= $row->reform ?></td>

            <td><?= $row->year ?></td>
            <td><?= $row->budget ?></td>
            <td><?= $row->outlay ?></td>
            <td><?= $row->gain ?></td>
            <td><?= $row->transfer ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Region</th>
        <th scope="col">Year</th>
        <th scope="col">Budget</th>
        <th scope="col">Outlay</th>
        <th scope="col">Gain</th>
        <th scope="col">Transfer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($budgets as $index => $budget) { ?>
    <tr>
        <th scope="row"><?= anchor("budget/detail/{$budget->id}", ++$index) ?></th>
        <td><?= $budget->region_id ?></td>
        <td><?= $budget->year ?></td>
        <td><?= $budget->budget ?></td>
        <td><?= $budget->outlay ?></td>
        <td><?= $budget->gain ?></td>
        <td><?= $budget->transfer ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>


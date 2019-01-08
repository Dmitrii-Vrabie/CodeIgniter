<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Region</th>
        <th scope="col">Clerks</th>
        <th scope="col">Salary fund month</th>
        <th scope="col">Salary fund year</th>
        <th scope="col">Reform</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clerks as $index => $clerk) { ?>
    <tr>
        <th scope="row"><?= anchor("clerk/detail/{$clerk->id}", ++$index) ?></th>
        <td><?= $clerk->region_id ?></td>
        <td><?= $clerk->clerks ?></td>
        <td><?= $clerk->salary_fund_month ?></td>
        <td><?= $clerk->salary_fund_year ?></td>
        <td><?= $clerk->reform ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>


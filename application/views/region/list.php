<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Area</th>
        <th scope="col">Pastures area</th>
        <th scope="col">Population</th>
        <th scope="col">Students</th>
        <th scope="col">Teachers</th>
        <th scope="col">Pensioners</th>
        <th scope="col">Employed</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($regions as $index => $region) { ?>
    <tr>
        <th scope="row"><?= anchor("region/detail/{$region->id}", ++$index) ?></th>
        <td><?= $region->area ?></td>
        <td><?= $region->pastures_area ?></td>
        <td><?= $region->population ?></td>
        <td><?= $region->students ?></td>
        <td><?= $region->teachers ?></td>
        <td><?= $region->pensioners ?></td>
        <td><?= $region->employed ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>


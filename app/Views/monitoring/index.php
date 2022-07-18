<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h5 class="mt-5">Project Monitoring</h5>
            </center>
            <?php if (session()->getFlashdata('Message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('Message'); ?>
                </div>
            <?php endif; ?>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">PROJECT NAME</th>
                        <th scope="col">CLIENT</th>
                        <th scope="col">PROJECT LEADER</th>
                        <th scope="col">START DATE</th>
                        <th scope="col">END DATE</th>
                        <th scope="col">PROGRESS</th>
                        <th scope="col">ACTIOIN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($project as $p) : ?>

                        <tr>
                            <td><?= $p['p-name']; ?></td>
                            <td><?= $p['client']; ?></td>
                            <td><?= $p['pleader-photo']; ?> <?= $p['pleader']; ?></td>
                            <td><?= $p['start-date']; ?></td>
                            <td><?= $p['end-date']; ?></td>
                            <td>
                                <div class="progressbar">
                                    <div class="progress">
                                        <?php if ($p['progress'] == 100) {
                                        ?> <div class="progress-bar bg-success" style="width: 100%;" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            </div> <?php
                                                } else {
                                                    ?> <div class="progress-bar" style="width: <?= $p['progress']; ?>%;" role="progressbar" aria-valuenow="<?= $p['progress']; ?>" aria-valuemin="0" aria-valuemax="100">
                                            </div> <?php
                                                } ?>
                                    </div>
                                    <?= $p['progress']; ?>%
                                </div>
                            </td>
                            <td><a href="/project-monitoring/delete/<?= $p['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a> <a href="/project-monitoring/edit/<?= $p['id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
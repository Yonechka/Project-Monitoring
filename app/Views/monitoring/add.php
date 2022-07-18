<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h2 class="mt-5">Add Data Project Monitoring</h2>
            </center>
            <form action="/promo/save" method="POST">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="p-name" class="form-label">Project Name</label>
                    <input type="text" class="form-control" id="p-name" name="p-name">
                </div>
                <div class="mb-3">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" class="form-control" id="client" name="client">
                </div>
                <div class="mb-3">
                    <label for="pleader" class="form-label">Project Leader</label>
                    <input type="text" class="form-control" id="pleader" name="pleader">
                </div>
                <div class="mb-3">
                    <label for="pleader-photo" class="form-label">Photo</label>
                    <input type="text" class="form-control" id="pleader-photo" name="pleader-photo">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="start-date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start-date" name="start-date">
                    </div>
                    <div class="col">
                        <label for="end-date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end-date" name="end-date">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="progress" class="form-label">Progress</label>
                    <input type="number" class="form-control" id="progress" name="progress">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
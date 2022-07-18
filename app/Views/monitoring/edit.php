<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h2 class="mt-5">Add Data Project Monitoring</h2>
            </center>
            <form action="/project-monitoring/update/<?= $project['id']; ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="p-name" class="form-label">Project Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('p-name')) ? 'is-invalid' : ''; ?>" id="p-name" name="p-name" autofocus value="<?= (old('p-name')) ? old('p-name') : $project['p-name'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('p-name'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="client" class="form-label">Client</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('client')) ? 'is-invalid' : ''; ?>" id="client" name="client" autofocus value="<?= (old('client')) ? old('client') : $project['client'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('client'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pleader" class="form-label">Project Leader</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pleader')) ? 'is-invalid' : ''; ?>" id="pleader" name="pleader" autofocus value="<?= (old('pleader')) ? old('pleader') : $project['pleader'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('pleader'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pleader-photo" class="form-label">Photo</label>
                    <input type="text" class="form-control <?= ($validation->hasError('pleader-photo')) ? 'is-invalid' : ''; ?>" id="pleader-photo" name="pleader-photo" autofocus value="<?= (old('pleader-photo')) ? old('pleader-photo') : $project['pleader'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('pleader-photo'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="start-date" class="form-label">Start Date</label>
                        <input type="text" class="form-control <?= ($validation->hasError('start-date')) ? 'is-invalid' : ''; ?>" id="start-date" name="start-date" autofocus value="<?= (old('start-date')) ? old('start-date') : $project['start-date'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('start-date'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="end-date" class="form-label">End Date</label>
                        <input type="text" class="form-control <?= ($validation->hasError('end-date')) ? 'is-invalid' : ''; ?>" id="end-date" name="end-date" autofocus value="<?= (old('end-date')) ? old('end-date') : $project['end-date'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('end-date'); ?>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="progress" class="form-label">Progress</label>
                    <input type="text" class="form-control <?= ($validation->hasError('progress')) ? 'is-invalid' : ''; ?>" id="progress" name="progress" autofocus value="<?= (old('progress')) ? old('progress') : $project['progress'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('progress'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
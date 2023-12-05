<?= $this->extend('layout/template'); ?>


<?= $this->section('conten'); ?>
<h1 class="text-center mb-4 fst-italic fw-lighter " style="margin-top: 50px;">Details Anime</h1>
<div class="container d-flex justify-content-center">
    <div class="card w-75">
        <div class="card-body">
            <form action="/anime/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input value="<?= old('judul'); ?>" type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" id="judul" placeholder="judul" autocomplete="off" autofocus>
                    <label for=" judul">Judul Anime</label>
                    <div class="invalid-feedback fst-italic">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input value="<?= old('produser'); ?>" type="text" class="form-control" name="produser" id="produser" placeholder="produser" required autocomplete="off">
                    <label for="produser">Produser</label>
                </div>
                <div class="form-floating mb-3">
                    <input value="<?= old('studio'); ?>" type="text" class="form-control" name="studio" id="studio" placeholder="studio" required autocomplete="off">
                    <label for="studio">Studio</label>
                </div>
                <div class="row g-3">
                    <div class="col form-floating">
                        <input value="<?= old('genre'); ?>" type="text" class="form-control" name="genre" id="genre" placeholder="genre" required autocomplete="off">
                        <label class="ms-2" for="genre">Genre</label>
                    </div>
                    <div class="col input-group">
                        <input type="file" class="form-control <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>  d-flex m-auto" name="cover" id="cover">
                        <label class="input-group-text" for="cover">Cover</label>
                        <img src="/img/anime/default.jpg" alt="" class="img-thumbnail img-tampil">
                        <div class="invalid-feedback fst-italic">
                            <?= $validation->getError('cover'); ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Add Anime</button>
        </div>
        </form>
        <a href="/anime" class="tambah-data fixed-bottom"> <i class="bi bi-arrow-bar-left"></i></a>

    </div>
</div>

<?= $this->endSection(); ?>
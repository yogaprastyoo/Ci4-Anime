<?= $this->extend('layout/template'); ?>


<?= $this->section('conten'); ?>
<h1 class="text-center mb-4 fst-italic fw-lighter " style="margin-top: 50px;">Edit Anime</h1>
<div class="container d-flex justify-content-center">
    <div class="card w-75">
        <div class="card-body">
            <form action="/anime/update/<?= $anime['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $anime['slug']; ?>">
                <div class="form-floating mb-3">
                    <input value="<?= (old('judul')) ? old('judul') : $anime['judul']; ?>" type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" id="judul" placeholder="judul" autocomplete="off" autofocus>
                    <label for=" judul">Judul Anime</label>
                    <div class="invalid-feedback fst-italic">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input value="<?= (old('produser')) ? old('produser') : $anime['produser']; ?>" type="text" class="form-control" name="produser" id="produser" placeholder="produser" autocomplete="off">
                    <label for="produser">Produser</label>
                </div>
                <div class="form-floating mb-3">
                    <input value="<?= (old('studio')) ? old('studio') : $anime['studio']; ?>" type="text" class="form-control" name="studio" id="studio" placeholder="studio" autocomplete="off">
                    <label for="studio">Studio</label>
                </div>
                <div class="row g-3">
                    <div class="col form-floating">
                        <input value="<?= (old('genre')) ? old('genre') : $anime['genre']; ?>" type="text" class="form-control" name="genre" id="genre" placeholder="genre" autocomplete="off">
                        <label class="ms-2" for="genre">Genre</label>
                    </div>
                    <div class="col form-floating">
                        <input value="<?= (old('cover')) ? old('cover') : $anime['cover']; ?>" type="text" class="form-control" name="cover" id="cover" placeholder="cover" autocomplete="off">
                        <label class="ms-2" for="cover">Cover</label>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ubah Anime</button>
        </div>
        </form>
        <a href="/anime" class="tambah-data fixed-bottom"> <i class="bi bi-arrow-bar-left"></i></a>

    </div>
</div>
<?= $this->endSection(); ?>
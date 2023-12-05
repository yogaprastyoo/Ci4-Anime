<?= $this->extend('layout/template'); ?>


<?= $this->section('conten'); ?>
<h1 class="text-center mb-4 fst-italic fw-lighter " style="margin-top: 50px;">Add Anime</h1>
<form class=" d-flex justify-content-center" action="/anime/save" method="post" enctype="multipart/form-data">
    <div class=" card border-dark mt-4 mb-3 bg-transparent" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/anime/default.jpg" class="img-fluid rounded-start img-tampil" width="600px" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body mt-3">
                    <h5 style="border-bottom: 2px solid black; padding-bottom: 8px; " class="card-title"><input value="<?= old('judul'); ?>" type="text" class="form-add fw-5 <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" id="judul" autocomplete="off" placeholder="Judul" required autofocus> <a class="float-end" href="/anime"><i class="bi bi-arrow-bar-left"></i></span></a>

                        <div class=" invalid-feedback fst-italic alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $validation->getError('judul'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    </h5>
                    <div class="invalid-feedback fst-italic">
                        <?= $validation->getError('judul'); ?>
                    </div>

                    <table class="table mt-3">
                        <tbody>
                            <tr>
                                <th scope="row"><label for="produser">Produser</label></th>
                                <td>
                                    :
                                    <input value="<?= old('produser'); ?>" type="text" class="form-add" name="produser" id="produser" required autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="studio">Studio</label></th>
                                <td>
                                    :
                                    <input value="<?= old('studio'); ?>" type="text" class="form-add" name="studio" id="studio" required autocomplete="off">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="genre">Genre</label></th>
                                <td>
                                    :
                                    <input value="<?= old('genre'); ?>" type="text" class="form-add" name="genre" id="genre" required autocomplete="off">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="cover">Genre</label></th>
                                <td>
                                    :
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" name="cover" id="cover" onchange="previewImg">
                                    <div class=" ms-2 invalid-feedback fst-italic">
                                        <?= $validation->getError('cover'); ?>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div style="position: absolute ; bottom: 0; right: 0;">
                        <button type="reset" class="btn btn-outline-dark">Reset</button>
                        <button type="submit" class="btn btn-outline-primary m-2">Add Anime</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
<?= $this->endSection(); ?>
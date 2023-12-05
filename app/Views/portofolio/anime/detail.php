<?= $this->extend('layout/template'); ?>


<?= $this->section('conten'); ?>
<h1 class="text-center mb-4 fst-italic fw-lighter " style="margin-top: 50px;">Details Anime</h1>
<div class=" d-flex justify-content-center ">
    <div class=" card border-dark mt-4 mb-3 bg-transparent" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/anime/<?= $anime['cover']; ?>" class="img-fluid rounded-start" width="600px" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body mt-3">
                    <h5 style="border-bottom: 2px solid black ; padding-bottom: 8px ; ;" class="card-title"><?= $anime['judul']; ?><a class="float-end" href="/anime"><i class="bi bi-arrow-bar-left"></i></span></a></h5>

                    <table class="table mt-3">
                        <tbody>
                            <tr>
                                <th scope="row">Produser </th>
                                <td>: <?= $anime['produser']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Studio </th>
                                <td>: <?= $anime['studio']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Genre </th>
                                <td>: <?= $anime['genre']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="position: absolute ; bottom: 0; right: 0;">
                        <form class="d-inline" action="/anime/<?= $anime['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button style="width: 80px;" class="btn btn-outline-danger mb-2 me-2" type="submit" onclick="return confirm('Apakah anda yakin mau menghapus data ini ?')">Hapus</button>
                        </form>

                        <a href="/anime/edit/<?= $anime['slug']; ?>" style="width: 80px;" width="10px" class="btn btn-outline-primary mb-2 me-2">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
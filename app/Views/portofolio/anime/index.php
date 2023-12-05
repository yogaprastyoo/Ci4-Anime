<?= $this->extend('layout/template'); ?>


<?= $this->section('conten'); ?>
<div class="container">
    <h1 class="text-center mb-5 fst-italic fw-lighter " style="margin-top: 50px;">Anime</h1>


    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <div>
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        </div>
    <?php endif ?>
    <button class="btn btn-outline-dark">Tambah Data</button>
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cover</th>
                <th scope="col">Name</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $a = 1; ?>
            <?php foreach ($anime as $anim) : ?>
                <tr>
                    <th scope="row"><?= $a; ?></th>
                    <td><img src="/img/anime/<?= $anim['cover']; ?>" alt=""></td>
                    <td><?= $anim['judul']; ?></td>
                    <td><?= $anim['genre']; ?></td>

                    <td><a href="/anime/<?= $anim['slug']; ?>" class="btn btn-outline-dark">Details</a></td>
                </tr>
                <?php $a++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- <a href="/anime/add" class="tambah-data fixed-bottom"> <i class="bi bi-plus-circle"></i></a> -->
    <!-- <a href="/anime/add" class="tambah-data fixed-bottom"> Add</a> -->
</div>



<?= $this->endSection(); ?>
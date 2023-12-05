<?= $this->extend('layout/template'); ?>


<?= $this->section('conten'); ?>
<main>
    <img data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" src="/img/WEB DEVELOPER.svg" alt="" />
    <div class="content container-md">
        <h1>Project <br />Me <span class="ketik">..</span></h1>
        <a href="/anime">
            <button type="button" style="border-radius: 0px; " class="btn ms-1 mt-2 btn-outline-dark">See My Project</button>
        </a>

    </div>
</main>
<?= $this->endSection(); ?>
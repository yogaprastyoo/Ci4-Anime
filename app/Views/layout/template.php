<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <!-- Contents--------------------------------- -->

    <?= $this->renderSection('conten'); ?>


    <script src="/js/aos.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        const inpFile = document.getElementById('cover');
        const previewContainer = document.getElementById('imagePreview');
        const previewImage = document.querySelector(".image-preview__image")

        inpFile.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();
                console.log(this);
                reader.addEventListener("load", function() {
                    previewImage.setAttribute("src", this.result)
                });

                reader.readAsDataURL(file);
            }
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            window.setTimeout(function() {
                $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 5000);

        });
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="containe d-flex">
        <div class=" m-auto">
            <h1>Image Preview on Upload File</h1>
            <input type="file" id="cover">
            <div class="image-preview" id="imagePreview">
                <img src="/img/anime/default.jpg" width="200px" alt="" class="img-thumbnail image-preview__image">
                <!-- <span class="image-preview__default-text">Image Preview</span> -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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

</body>

</html>
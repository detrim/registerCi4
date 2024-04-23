<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .full-height {
        height: 100vh;
        /* Memastikan div memenuhi tinggi viewport */
    }
    </style>
    <title>Landing page</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center full-height">
        <!-- Flexbox untuk posisi -->
        <?php foreach ($user as $key => $value) :?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('img/' . $value['photo_profile']); ?>" class="card-img-top"
                alt="Example Image">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $value['username']; ?></li>
                <li class="list-group-item"><?= $value['email']; ?></li>
            </ul>
            <div class="card-body">
                <a href="/logout" class="card-link" onclick="return confirmLogout();">Logout</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
    function confirmLogout() {
        return confirm("Apakah Anda ingin logout?"); // Menampilkan pesan konfirmasi
    }
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
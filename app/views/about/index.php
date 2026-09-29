<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman About</title>
</head>
<body>
<div class="container">
    <h1 class="mt-4">About Me</h1>
    <img src="<?php echo BASEURL; ?>/img/images.jpg" width="200" class="rounded-circle shadow">
    <p>Halo, saya <?php echo $data['nama']; ?>, dan pekerjaan saya adalah <?php echo $data['pekerjaan']; ?> </p>
</div>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Pencarian Data</h1>
    <div class="container">
        <form action="" method="GET">
            <div class="mb-3">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan keyword">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_GET['keyword'])) {
        // jalankan pencarian data ke tabel camaba
        include 'koneksi.php';
        $sql = "
        SELECT * FROM camaba
        WHERE nama LIKE '%" . $_GET['keyword'] . "%'
        ";
        $search = mysqli_query($con, $sql);
        if ($search) {
            echo '<table class="table table-bordered">';
            echo '<tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            </tr>';
            $nomor = 1;
            while ($data = mysqli_fetch_array($search)) {
                echo '<tr>
                <td>' . $nomor . '</td>
                <td>' . $data['nama'] . '</td>
                <td>' . $data['email'] . '</td>
                </tr>';
                $nomor++;
            }
            echo '</table>';
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
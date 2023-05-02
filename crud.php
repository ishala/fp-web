<!--Koneksi-->
<?php
$user   = "root";
$pass   = "";
$host   = "localhost";
$db     = "barang";

$con = mysqli_connect($host, $user, $pass, $db) or die("Koneksi Gagal");


$id = "";
$kode = "";
$nama = "";
$harga = "";


$sukses = false;
$urut = 1;
$error = "";

//UNTUK UPDATE
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'edit') {
    $id = $_GET['id'];
    $sql1 = "select * from stuff where id = '$id'";
    $q1 = mysqli_query($con, $sql1);

    $r1 = mysqli_fetch_array($q1);
    if (isset($r1)) {
        $kode = $r1['kode_barang'];
        $nama = $r1['nama_barang'];
        $harga = $r1['harga'];

        if ($kode == "") {
            $error = "Data tidak ditemukan";
        }
    }
} else if ($op == 'delete'){
    $id = $_GET['id'];
    $sql1 = "delete from stuff where id = '$id'";
    $q1 = mysqli_query($con, $sql1); 

    if($q1){
        $sukses = !$sukses;
    } else {
        $sukses = $sukses;
    }
}

//INPUT DATA
if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    if ($kode && $nama && $harga) {
        if ($op == "edit") { //UPDATE
            $id = $_GET['id'];
            $sql = "update stuff set kode_barang = '$kode', nama_barang = '$nama', harga = '$harga' where id = '$id'";
            $r1 = mysqli_query($con, $sql);

            if ($r1) {
                $sukses = !$sukses;
            } else {
                $sukses = $sukses;
            }
        } else { //INSERT
            $check = "select kode_barang from stuff";
            $q_check = mysqli_query($con, $check);
            $arr_check = mysqli_fetch_array($q_check);
            if (isset($arr_check['kode_barang'])) {
                if ($arr_check['kode_barang'] == $kode) {
                    $sukses = $sukses;
                } else {
                    $sql = "insert into stuff(kode_barang, nama_barang, harga) values ('$kode', '$nama', '$harga')";
                    $q = mysqli_query($con, $sql);
                    if ($q) {
                        $sukses = !$sukses;
                    } else {
                        $sukses = $sukses;
                    }
                }
            }
        }
    } else {
        $sukses = !$sukses;
    }
}





?>
<!--Tampilan UI-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Canteen : Jual Beli Makanan Jadi Lebih Mapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="card container">
        <div class="card-header bg-primary text-white fw-2">
            Buat / Edit Data Barang
        </div>
        <div class="card-body">
            <?php
            if ($sukses == false) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "Data tidak ditemukan" ?>
                </div>
            <?php
            } else if ($sukses == true) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?php echo "Data berhasil diinputkan" ?>
                </div>
            <?php
            }
            ?>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $kode ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga ?>">
                </div>
                <div class="container d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary fs-4" name="submit" id="submit" value="Simpan Data">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card container mt-3">
        <div class="card-header bg-primary text-white fw-2">
            Data Tersimpan
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from stuff order by id asc";
                    $q1 = mysqli_query($con, $sql);

                    while ($r2 = mysqli_fetch_array($q1)) {
                        $id = $r2['id'];
                        $kode = $r2['kode_barang'];
                        $nama = $r2['nama_barang'];
                        $harga = $r2['harga'];

                    ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <td scope="row"><?php echo $kode ?></td>
                            <td scope="row"><?php echo $nama ?></td>
                            <td scope="row"><?php echo $harga ?></td>
                            <td scope="row">
                                <a href="crud.php?op=edit&id=<?php echo $id ?>">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="crud.php?op=delete&id=<?php echo $id ?>">
                                    <button type="button" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?')">Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <!-- Tambahkan link CSS Bootstrap di bawah ini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Input</a>
        <h2 class="text-center">Tampilan Database</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Indonesia</th>
                    <th>Inggris</th>
                    <th>Pipas</th>
                    <th>MTK</th>
                    <th>Produktif</th>
                    <th>Sejarah</th>
                    <th>total</th>
                    <th>Rata-Rata</th>
                    <th>Max</th>
                    <th>Min</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
<?php
                //menghubungkan ke file conn 
                require "conn.php";
                // Query untuk mendapatkan data dari database
                $query = "SELECT * FROM db_nilai";
                // digunakan untuk menjalankan pernyataan SQL ke database menggunakan objek koneksi $conn dan mengembalikan hasilnya dalam bentuk objek mysqli_result.
                $result = mysqli_query($conn, $query);

                //Looping untuk menampilkan data menggunakan perulangan while
                //digunakan dalam sebuah perulangan while untuk mengambil setiap baris data dari objek mysqli_result yang disimpan dalam variabel $result. 
                while ($wadah = mysqli_fetch_assoc($result)) { 
                    echo "<tr>";
                    echo "<td>" . $wadah["id"] . "</td>";
                    echo "<td>" . $wadah["nis"] . "</td>";
                    echo "<td>" . $wadah["nama"] . "</td>";
                    echo "<td>" . $wadah["indonesia"] . "</td>";
                    echo "<td>" . $wadah["inggris"] . "</td>";
                    echo "<td>" . $wadah["pipas"] . "</td>";
                    echo "<td>" . $wadah["mtk"] . "</td>";
                    echo "<td>" . $wadah["produktif"] . "</td>";
                    echo "<td>" . $wadah["sejarah"] . "</td>";
                    echo "<td>" . $wadah["total"] . "</td>";
                    echo "<td>" . $wadah["rata"] . "</td>";
                    echo "<td>" . $wadah["max"] . "</td>";
                    echo "<td>" . $wadah["min"] . "</td>";
                    echo "<td><a href='hapus.php?id=" . $wadah["id"] . "' class='btn btn-danger'>Hapus</a></td>";
                    echo "<td><a href='ubah.php?id=" . $wadah["id"] . "' class='btn btn-primary'>Ubah</a></td>";
                    echo "</tr>";
                }

                // Menutup koneksi
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan skrip JavaScript Bootstrap di bawah ini (opsional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

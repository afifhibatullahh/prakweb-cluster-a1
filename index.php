<?php
require("koneksi.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Web</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="testbox">
        <form method="POST" id="form_tambah">
            <div class="banner">
                <h1>Minggu 6 Praktikum</h1>
            </div>
            <div class="item">
                <p>NIM</p>
                <input type="text" name="nim" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Nama</p>
                <input type="text" name="nama" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Angkatan</p>
                <input type="text" name="angkatan" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Program Studi</p>
                <select name="prodi" required>
                    <option value="1">Teknik Informatika</option>
                    <option value="2">Teknik Sipil</option>
                    <option value="3">Matematika</option>
                    <option value="4">Kedokteran</option>
                </select>
            </div>
            <div class="btn-block">
                <button type="submit" id="tambah_data" name="tambah">Tambah Data</button>
            </div>
        </form>
    </div>
    <div id="show" class="testbox"></div>
    <script>
        $(document).ready(function() {
            $('#show').load("show.php");
            $('#tambah_data').click(function() {
                var data = $('#form_tambah').serialize();
                $.ajax({
                    type: 'POST',
                    url: "add.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $('#show').load("show.php");
                    }
                });
            });
        });
    </script>
</body>

</html>
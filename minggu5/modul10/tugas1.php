<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Modul 10</title>
</head>
<body>
    <input type="text" name="new" id="new">
    <button onclick="tambah()">Tambah</button>
    <ul id="ul">
        <li id="1">Pena | <a onclick="edit('1')">Edit</a> | <a onclick="hapus(1)">Hapus</a></li>
        <li id="2">Buku Tulis | <a onclick="edit('2')">Edit</a> | <a onclick="hapus(2)">Hapus</a></li>
        <li id="3">Pena | <a onclick="edit('3')">Edit</a> | <a onclick="hapus(3)">Hapus</a></li>
    </ul>
</body>
<script src="tugas1.js"></script>
</html>
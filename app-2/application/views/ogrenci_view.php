<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Not Sistemi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:#f3f3f3;
            margin:0;
            padding:0;
            display:flex;
            justify-content:center;
            align-items:flex-start;
            min-height:100vh;
        }
        .container {
            background:white;
            width:90%;
            max-width:900px;
            margin-top:40px;
            padding:25px;
            border-radius:12px;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align:center;
            margin-bottom:20px;
        }
        form {
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:15px;
            margin-bottom:30px;
        }
        input, select {
            padding:10px;
            border:1px solid #ccc;
            border-radius:6px;
            width:100%;
        }
        button {
            grid-column:span 2;
            padding:12px;
            border:none;
            background:#007bff;
            color:white;
            border-radius:6px;
            cursor:pointer;
            font-size:16px;
        }
        table {
            width:100%;
            border-collapse:collapse;
        }
        table th, table td {
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }
        table th {
            background:#007bff;
            color:white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Öğrenci Not Hesaplama</h2>

    <form method="post" action="">
        <input type="text" name="ogrenci_adi" placeholder="Öğrenci Adı" required>
        <input type="text" name="ders_adi" placeholder="Ders Adı" required>
        <input type="number" name="vize" placeholder="Vize Notu" required>
        <input type="number" name="final" placeholder="Final Notu" required>

        <button type="submit">Kaydet</button>
    </form>

    <h3>Öğrenci Listesi</h3>
    <table>
        <tr>
            <th>Ad</th>
            <th>Ders</th>
            <th>Vize</th>
            <th>Final</th>
            <th>Geçme Notu</th>
        </tr>
        <?php if (!empty($liste)) foreach ($liste as $row): ?>
        <tr>
            <td><?= $row->ogrenci_adi ?></td>
            <td><?= $row->ders_adi ?></td>
            <td><?= $row->vize ?></td>
            <td><?= $row->final ?></td>
            <td><?= $row->gecme_notu ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Öğrenci Not Sistemi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f5f5f5;
        }
        .container {
            margin-top: 40px;
        }
        .card {
            border-radius: 10px;
        }
        table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background: #0d6efd;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card shadow p-4 mb-5">
        <h3 class="text-center mb-4">Öğrenci Not Hesaplama</h3>

        <form method="post">

            <div class="mb-3">
                <label class="form-label">Öğrenci Adı</label>
                <input type="text" class="form-control" name="ogrenci_adi" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ders Seçiniz</label>
                <select name="ders_adi" class="form-select" required>
                    <option value="">Ders Seç</option>
                    <option>Matematik</option>
                    <option>Fizik</option>
                    <option>Kimya</option>
                    <option>Biyoloji</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Vize (%40)</label>
                <input type="number" class="form-control" name="vize" min="0" max="100" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Final (%60)</label>
                <input type="number" class="form-control" name="final" min="0" max="100" required>
            </div>

            <button class="btn btn-primary w-100">Kaydet</button>

        </form>
    </div>

    <h4 class="mb-3">Kayıtlı Öğrenciler</h4>

    <table class="table table-bordered table-striped shadow">
        <tr>
            <th>ID</th>
            <th>Öğrenci Adı</th>
            <th>Ders</th>
            <th>Vize</th>
            <th>Final</th>
            <th>Geçme Notu</th>
        </tr>

        <?php if (!empty($liste)): ?>
            <?php foreach ($liste as $row): ?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->ogrenci_adi ?></td>
                    <td><?= $row->ders_adi ?></td>
                    <td><?= $row->vize ?></td>
                    <td><?= $row->final ?></td>
                    <td><b><?= $row->gecme_notu ?></b></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center text-muted">Henüz kayıt yok.</td>
            </tr>
        <?php endif; ?>

    </table>
</div>


</body>
</html>

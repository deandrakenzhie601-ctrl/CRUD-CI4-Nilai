
<!-- filepath: c:\xampp2\htdocs\appnilai\app\Views\grades\edit.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>
</head>
<body>
    <h2>Edit Nilai</h2>

    <form method="post" action="<?= base_url('grades/update/' . ($grade['id'] ?? '')) ?>">
        <?= csrf_field() ?>

        <p>
            <label for="score">Nilai</label><br>
            <input type="number" id="score" name="score"
                   value="<?= esc($grade['score'] ?? '') ?>" required>
        </p>

        <p>
            <label for="semester">Semester</label><br>
            <input type="text" id="semester" name="semester"
                   value="<?= esc($grade['semester'] ?? '') ?>" required>
        </p>

        <p>
            <label for="academic_year">Tahun Akademik</label><br>
            <input type="text" id="academic_year" name="academic_year"
                   value="<?= esc($grade['academic_year'] ?? '') ?>" required>
        </p>

        <button type="submit">Simpan</button>
        <a href="<?= base_url('grades') ?>">Batal</a>
    </form>
</body>
</html>
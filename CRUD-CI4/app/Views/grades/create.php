<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h2 class="mb-4">Input Nilai Siswa</h2>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="<?= site_url('grades/create') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Siswa</label>
                <select name="student_id" class="form-select" required>
                    <option value="">-- Pilih Siswa --</option>
                    <?php foreach ($students as $student): ?>
                        <option value="<?= $student['id'] ?>"><?= $student['nis'] ?> - <?= $student['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Mata Pelajaran</label>
                <select name="subject_id" class="form-select" required>
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    <?php foreach ($subjects as $subject): ?>
                        <option value="<?= $subject['id'] ?>"><?= $subject['subject_name'] ?> (KKM: <?= $subject['passing_grade'] ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nilai Akhir</label>
                <input type="number" step="0.01" min="0" max="100" name="score" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Semester</label>
                    <select name="semester" class="form-select" required>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tahun Ajaran</label>
                    <input type="text" name="academic_year" placeholder="misal: 2023/2024" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan Nilai</button>
            <a href="<?= site_url('grades') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
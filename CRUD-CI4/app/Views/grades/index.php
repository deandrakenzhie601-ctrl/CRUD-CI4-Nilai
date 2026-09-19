<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Nilai Siswa</h2>
    <a href="<?= site_url('grades/new') ?>" class="btn btn-primary">Input Nilai</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                    <th>KKM</th>
                    <th>Status</th>
                    <th>Semester / T.A.</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grades as $grade): ?>
                <tr>
                    <td><?= $grade['nis'] ?></td>
                    <td><?= $grade['student_name'] ?></td>
                    <td><?= $grade['subject_name'] ?></td>
                    <td><b><?= $grade['score'] ?></b></td>
                    <td><?= $grade['passing_grade'] ?></td>
                    <td>
                        <?php if ($grade['score'] >= $grade['passing_grade']): ?>
                            <span class="badge bg-success">Lulus</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Remidial</span>
                        <?php endif; ?>
                    </td>
                    <td><?= $grade['semester'] ?> (<?= $grade['academic_year'] ?>)</td>
                    <td>
                        <a href="<?= site_url('grades/edit/' . $grade['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= site_url('grades/delete/' . $grade['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data nilai ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
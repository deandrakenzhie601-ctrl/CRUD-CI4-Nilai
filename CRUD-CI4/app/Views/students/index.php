<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Siswa</h2>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($students)): ?>
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data siswa.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?= esc($student['nis']) ?></td>
                                <td><?= esc($student['name']) ?></td>
                                <td><?= esc($student['gender']) ?></td>
                                <td><?= esc($student['pob']) ?>, <?= esc($student['dob']) ?></td>
                                <td><?= esc($student['class_name']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

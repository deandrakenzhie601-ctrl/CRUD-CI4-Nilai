<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem Sekolah' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Aplikasi Sekolah</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('students') ?>">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('classes') ?>">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('teachers') ?>">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('subjects') ?>">Mata Pelajaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('subjectteachers') ?>">Pengampu</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('grades') ?>">Nilai</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
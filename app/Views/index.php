<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <h1>Hello, <?= $name ? $name : "World!" ?></h1>
    <h2>umur lu <?= $umur ? $umur : "umur" ?></h2>
<?= $this->endSection() ?>
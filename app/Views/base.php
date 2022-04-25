<html>
    <head>
        <?= $this->include('layouts/head') ?>
    </head>
    <body>
        <?= $this->include('layouts/navbar') ?>

        <main role="main " class="container">
            <?= $this->include('layouts/header') ?>

            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('layouts/footer') ?>

        <?= $this->include('layouts/scripts') ?>
    </body>
</html>
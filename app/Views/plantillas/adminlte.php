<!DOCTYPE html>
<html lang="en" style="height: auto;"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Blank Page</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <body class="sidebar-mini" style="height: auto;">

        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <?= $this->include('common/navbar') ?>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <?= $this->include('common/sidebar') ?>
            </aside>

            <div class="content-wrapper" style="min-height: 1604.8px;">

                <section class="content-header">
                    <div class="container-fluid">
                        <?= $this->renderSection('page_title') ?>
                    </div>
                </section>
                    
                <section class="content">
                    <?= $this->renderSection('content') ?>
                </section>

            </div>

            <footer class="main-footer">
                <?= $this->include('common/footer') ?>
            </footer>

        <script src="../../plugins/jquery/jquery.min.js"></script>
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
        <script src="../../dist/js/demo.js"></script>
    </body>
</html>


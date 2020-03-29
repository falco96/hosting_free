<?php
    include 'config.php';
    include 'fns/fns.php';
    $fns = new hosting_free();
    $fns->input();
    // $fns->debugForm();
?>

<html>
<?php $fns->head(); ?>

<body>
    <!-- import navbar -->
    <?php $fns->navbar(); ?>

    <div class="flex mb-4">
        <?php $fns->body(); ?>
    </div>

    <!-- import footer -->
    <?php $fns->footer(); ?>
</body>

</html>
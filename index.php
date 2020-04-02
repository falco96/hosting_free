<?php
    include 'config.php';
    include 'fns/fns.php';

    $fns = new hosting_free();

    $fns->input();
?>

<html>
<!-- import head -->
<?php $fns->head(); ?>

<body>
    <!-- import navbar -->
    <?php $fns->navbar(); ?>

    <!-- import header -->
    <?php $fns->header(); ?>

    <div class="flex flex-wrap p-5">
        <!-- import presentation -->
        <?php $fns->presentation(); ?>

        <!-- import form-signup -->
        <?php $fns->formSignUp(); ?>
    </div>

    <!-- import footer -->
    <?php $fns->footer(); ?>
</body>

</html>
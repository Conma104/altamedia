<?php if(\System\Core\Session::has('success'))  { ?>

<div class="alert alert-success" role="alert">
    <?=\System\Core\Session::get('success')?>
    <?=\System\Core\Session::remove('success')?>
</div>

<?php } ?>


<?php if(\System\Core\Session::has('error')) {?>

<div class="alert alert-danger" role="alert">
<?=\System\Core\Session::get('error')?>
<?=\System\Core\Session::remove('error')?>
</div>

<?php } ?>
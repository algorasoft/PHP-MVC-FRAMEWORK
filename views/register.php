<?php
/** @var $model \app\models\User */;
?>


<h1>Create an account</h1>
<?php $form = \algorasoft\garden\form\Form::begin('', 'POST');?>
<div class="row">
    <div class="col"><?=$form->field($model, 'firstName');?></div>
    <div class="col"><?=$form->field($model, 'lastName');?></div>
</div>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<?php echo $form->field($model, 'passwordConfirm')->passwordField(); ?>

<button type="submit" class="btn btn-primary">Register</button>

<?php \algorasoft\garden\form\Form::end();?>
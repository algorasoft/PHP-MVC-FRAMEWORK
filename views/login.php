<?php
/** @var $model \app\models\User */;
?>

<h1>Login to your account</h1>
<?php $form = \algorasoft\garden\form\Form::begin('', 'POST');?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<button type="submit" class="btn btn-primary">Login</button>

<?php \algorasoft\garden\form\Form::end();?>
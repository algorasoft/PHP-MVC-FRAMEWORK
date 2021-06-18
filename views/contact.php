<?php
/** @var $this \algorasoft\garden\View */
/** @var $model \app\models\ContactForm */

use algorasoft\garden\form\TextareaField;

$this->title = 'Contact Us';
?>
<h1>Contact</h1>
<?php $form = \algorasoft\garden\form\Form::begin('', 'POST');?>
<?=$form->field($model, 'subject');?>
<?=$form->field($model, 'email');?>
<?=new TextareaField($model, 'body');?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \algorasoft\garden\form\Form::end();?>
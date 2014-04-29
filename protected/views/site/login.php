<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div id="login">
    <div id="log">
        <h1>Login</h1>
    </div>

    <div class="form">
	<div id="logincenter">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>


        <div class="row">
            <?php echo $form->labelEx($model, 'username'); ?>
<?php echo $form->textField($model, 'username'); ?>
<?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password'); ?>
<?php echo $form->error($model, 'password'); ?>

          
        </div>

        <div class="row rememberMe">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
<?php echo $form->label($model, 'rememberMe'); ?>
<?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="row buttons">
<?php echo CHtml::submitButton('Login'); ?>
        </div>
    </div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

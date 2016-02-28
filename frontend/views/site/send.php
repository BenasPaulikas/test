<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SendForm */
/* @var $users \common\models\User[] */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Send money';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-send">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'send-form']); ?>

            <?= $form->field($model, 'user_id')->dropDownList($users) ?>

            <?= $form->field($model, 'amount') ?>

            <div class="form-group">
                <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

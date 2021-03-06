<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = Html::encode($model->username);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username:ntext',
            'email:email',
            'balance',
            [
                'attribute' => 'status',
                'value' => $model->status == $model::STATUS_DELETED ? 'Deleted' : 'Active'
            ],
            [
                'attribute' => 'created_at',
                'value' => Yii::$app->formatter->asDate($model->created_at),
            ],
            [
                'attribute' => 'updated_at',
                'value' => Yii::$app->formatter->asDate($model->updated_at),
            ]
        ],
    ]) ?>

</div>

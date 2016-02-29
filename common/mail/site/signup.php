<?php

use yii\helpers\Html;

/* @var $user common\models\User */

$link = Yii::$app->urlManager->createAbsoluteUrl(['site/confirm', 'email' => $user->email, 'token' => $user->token]);
?>

Hello <?= $user->username ?>,

<p>Thanks for registering at <b><?= Yii::$app->params['project'] ?></b></p>
<p>In order to start using our bank You need to confirm this email address by clicking link below:<br></p>
<p><?= Html::a($link, $link) ?><br></p>

<p>If you didn't made this request just ignore this letter.</p>
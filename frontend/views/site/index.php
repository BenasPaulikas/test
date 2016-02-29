<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->params['project'];
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Your money in SAFE bank!</h1>

        <p class="lead">#1 bank in West Europe</p>

        <?php if (Yii::$app->user->isGuest): ?>
            <p><?= Html::a('Sign UP', ['signup'], ['class' => 'btn btn-lg btn-success']) ?></p>
        <?php else: ?>
            <p><?= Html::a('Send money', ['send'], ['class' => 'btn btn-lg btn-success']) ?></p>
        <?php endif ?>
    </div>


    <center><h2>Three reasons why you will love us</h2></center>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>No sending fees</h2>

                <p>That's right! Send money without any fees or hidden terms and conditions. This was and will be
                    forever.</p>
            </div>
            <div class="col-lg-4">
                <h2>24/7</h2>

                <p>Your money can be sent or received 24/7 without any delays or holidays.</p>
            </div>
            <div class="col-lg-4">
                <h2>Top notch security</h2>

                <p>Our bank systems are protected and monitored every second. We always use SSLv3 protocol.</p>
            </div>
        </div>

    </div>
</div>

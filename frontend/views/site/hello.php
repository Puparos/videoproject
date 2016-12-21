<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hello, Yii2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= $sentence ?></p>

    <code><?= __FILE__ ?></code>
</div>

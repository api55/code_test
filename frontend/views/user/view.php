<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$avatar_url = 'images/avatar/' . ((empty($model->avatar)) ? 'default-200.png': $model->avatar) ;
?>
<div class="user-view">
    <?php
    echo Html::img($avatar_url, ['class'=>'img-responsive center-block']);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>



    <?php
    $details = [
        'model' => $model,
        'attributes' => [
            'username:text:Username',
            'email:email:Email',
            'created_at:datetime:Member since',
            ['label'=> 'Status', 'value'=> ($model->status == 10) ? 'Active':'Deleted'],
        ],
    ];
    echo DetailView::widget($details) ?>
    <p>
        <?= Html::a('Edit Profile', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>
</div>

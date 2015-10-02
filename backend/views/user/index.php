<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Members Index';
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',
            'mobile_num:text:Mobile Number',
            ['attribute'=>'status','label'=> 'Status', 'value'=> function($model) { return ($model->status == 10) ? 'Active':'Deleted';}],
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{update}{delete}{activate}',
                'buttons'=>[
                    'activate' => function ($url, $model) {
                            return ($model->status == 0 ? Html::a('<span class="glyphicon glyphicon-refresh"></span>' , $url, [
                                'title' => Yii::t('yii', 'Reactivate'),]): '');

                        },
                    'delete' => function ($url, $model) {
                            return ($model->status == 10 ? Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('yii', 'Delete'),
                                'data-confirm' => Yii::t('yii', 'Are you sure to delete this profile?'),
                                'data-method' => 'post',
                            ]):'');

                        }
                ]                    ],
        ],
    ]); ?>

</div>

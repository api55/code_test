<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Edit  ' . ' ' . $model->username . "'s profile " ;
$avatar_url = 'images/avatar/' . ((empty($model->oldAttributes['avatar'])) ? 'default-200.png':$model->oldAttributes['avatar']) ;
?>
<div class="user-update">
    <?php
    echo Html::img($avatar_url, ['class'=>'img-responsive center-block']);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?= Html::a('Delete', ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger',
    'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
    ],
]) ?>
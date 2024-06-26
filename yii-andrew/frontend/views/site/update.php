<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Users $model */

$this->title = 'Update Users: ' . $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->first_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'citys' => $citys,
    ]) ?>

</div>

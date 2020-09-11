<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Comments';
?>
<div class="row">
    <?php foreach($comments as $comment): ?>
        <div class="row comment">
            <div class="row">
                <div class="col-lg-6">
                    <span class="name"><?=Html::encode($comment->name)?></span> <span class="date"><?=Html::encode($comment->date)?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="comment-text"><?=Html::encode($comment->text)?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <hr>
</div>

<div class="row send-comment">
    <div class="col-lg-6">
        <label for="send">
            <p class="send-comment-title">Оставить комментарий</p>

        </label>
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => 33])->label('Ваше имя'); ?>
        <?= $form->field($model, 'text')->textarea(['maxlength' => 255])->label('Ваш комментарий'); ?>
        <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-send pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>




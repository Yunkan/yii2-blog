<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['action' => 'add']);

if(isset($model)) {
    echo $form->field($model, 'title')->textInput(['autofocus' => true]);
    echo $form->field($model, 'body')->textarea(['rows' => 6]);
    echo $form->field($model, 'date')->input('date');
}

echo Html::submitButton('Submit');

ActiveForm::end();
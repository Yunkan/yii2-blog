<?php


namespace app\models;


use yii\base\Model;

class AddPostsForm extends Model
{
    public $title;
    public $body;
    public $date;

    public function rules()
    {
        return [
            [['title', 'body', 'date'], 'required']
        ];
    }
}
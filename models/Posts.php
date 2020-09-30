<?php


namespace app\models;


use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{
    public function addPost($arr)
    {
        $this->title = $arr['title'];
        $this->body = $arr['body'];
        $this->date = $arr['date'];
        $this->save();
    }
}
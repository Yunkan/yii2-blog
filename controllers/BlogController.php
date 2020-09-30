<?php


namespace app\controllers;


use app\models\AddPostsForm;
use app\models\Posts;
use Yii;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionIndex()
    {
        $posts = Posts::find()->all();
        return $this->render('index', compact('posts'));
    }

    public function actionAdd() {
        $model = new AddPostsForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $posts = new Posts();
            $posts->addPost($model);
            return $this->redirect('index');
        }

        return $this->render('addNewPost', compact('model'));
    }

    public function actionDelete($id) {
        Posts::findOne($id)->delete();
        return $this->redirect('index');
    }
}
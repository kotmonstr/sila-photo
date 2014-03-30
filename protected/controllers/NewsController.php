<?php

class NewsController extends Controller {

    public $news_text = 'news text';
    public $news2 = 'news2';
    
    public function actionIndex() {
        $data = News::model()->findAll();

        $this->render('index', array(
            "news" => $this->news_text,
            "data" => $data
        ));
    }
    public function actionForm() {
       $data = News::model()->findAll();
       $this->render('Form',array("data" => $data)); 
    }

}

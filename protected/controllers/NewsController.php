<?php

class NewsController extends Controller
{
    public $news_text='news text';
    public $news2='news2';
    
	public function actionIndex()
	{
		$this->render('index',array(
                    "news" => $this->news_text
                        ));
	} 

	
}
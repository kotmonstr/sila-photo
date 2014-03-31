<?php

class News extends CActiveRecord {

    public function tableName() {
        return 'news';
    }

    public function attributeLabels() {
        return array(
            'news_id' => 'news_id',
            'news_name' => 'news_name',
            'news_content' => 'news_content',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function rules() {
            return array(
        array('news_name,news_content', 'required'),
   
    );
    }


    public function safeAttributes() {
        return array(
            'news_id',
            'news_name',
            'news_content',
            
        );
    }

}

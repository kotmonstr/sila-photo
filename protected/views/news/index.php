<?php
/* @var $this NewsController */

$this->breadcrumbs=array(
	'News',
);
echo $news;
echo $this->news2;

foreach ($data as $row ) {
    echo $row->news_name.'--'.$row->news_content.'<br>';
}

?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>

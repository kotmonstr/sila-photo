<?php

$Array=array();
$i=0;

foreach($data as $row){
    $i++;
    $Array[$i]=$row->news_name;
}
$data2=$Array;





$model=new News;
?>
<center>
<div class="form">
    
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'Name'); ?>
<?php echo CHtml::activeTextField($model,'news_name'); ?>
<?php echo CHtml::error($model,'news_name'); ?>

</div>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'Content'); ?>
<?php echo CHtml::activeTextField($model,'news_content'); ?>
    
</div>
<div class="row">
<?php //echo CHtml::activeLabel($model,'Dropdown'); ?>
<?php //echo CHtml::activeDropDownList($model,'news_content',array($data2)); ?>
</div>
 

 
<div class="row submit">
<?php echo CHtml::submitButton('Send',array('color'=>TbHtml::BUTTON_COLOR_PRIMARY)); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<div>
<object type="application/x-shockwave-flash" id="flash_player" align="middle" name="flash_player" data="http://source.mmi.bemobile.ua/video/player-4.181-r49675.swf" width="420" height="336" style="visibility: visible;"><param name="menu" value="false"><param name="quality" value="best"><param name="scale" value="noscale"><param name="salign" value="tl"><param name="devicefont" value="true"><param name="swliveconnect" value="true"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="allownetworking" value="all"><param name="wmode" value="opaque"><param name="bgcolor" value="#000000"><param name="flashvars" value="debug=true&amp;poster=http://inter.ua/images/logo_420x337.jpg&amp;autostart=true&amp;streamer=rtmpe%3A%2F%2Flb1.itcons.net.ua%2Finters-redir&amp;mediacontent=%5B%7B%22url%22%3A%22inter_3%22%2C%22bitrate%22%3A1024%2C%22width%22%3A720%7D%2C%7B%22url%22%3A%22inter_2%22%2C%22bitrate%22%3A512%2C%22width%22%3A720%7D%2C%7B%22url%22%3A%22inter_1%22%2C%22bitrate%22%3A256%2C%22width%22%3A720%7D%5D&amp;pt=o&amp;ads=%7B%22showSkipButton%22%3Atrue%2C%22skipButtonCaption%22%3A%22%D0%9F%D1%80%D0%BE%D0%BF%D1%83%D1%81%D1%82%D0%B8%D1%82%D1%8C%22%2C%22prerolls%22%3A%7B%22delayForShowSkipButton%22%3A6%2C%22providers%22%3A%5B%7B%22provider%22%3A%22adriver%22%2C%22url%22%3A%22http%3A%2F%2Fad.adriver.ru%2Fcgi-bin%2Ferle.cgi%3Fsid%3D171674%26target%3Dblank%26bt%3D54%26pz%3D1%26rnd%3D!%5Brnd%5D%22%7D%5D%7D%2C%22preroll2s%22%3A%7B%22delayForShowSkipButton%22%3A6%2C%22providers%22%3A%5B%7B%22provider%22%3A%22adriver%22%2C%22url%22%3A%22http%3A%2F%2Fad.adriver.ru%2Fcgi-bin%2Ferle.cgi%3Fsid%3D171674%26target%3Dtop%26bt%3D54%26pz%3D6%26rnd%3D!%5Brnd%5D%22%7D%5D%7D%2C%22middlerolls%22%3A%7B%22showSkipButton%22%3Atrue%2C%22delayForShowSkipButton%22%3A6%2C%22providers%22%3A%5B%7B%22provider%22%3A%22adriver%22%2C%22url%22%3A%22http%3A%2F%2Fad.adriver.ru%2Fcgi-bin%2Ferle.cgi%3Fsid%3D171674%26target%3Dblank%26bt%3D54%26pz%3D2%26rnd%3D!%5Brnd%5D%22%7D%5D%7D%2C%22middleroll2s%22%3A%7B%22showSkipButton%22%3Atrue%2C%22delayForShowSkipButton%22%3A6%2C%22providers%22%3A%5B%7B%22provider%22%3A%22adriver%22%2C%22url%22%3A%22http%3A%2F%2Fad.adriver.ru%2Fcgi-bin%2Ferle.cgi%3Fsid%3D171674%26target%3Dblank%26bt%3D54%26pz%3D4%26rnd%3D!%5Brnd%5D%22%7D%5D%7D%2C%22postrolls%22%3A%7B%22showSkipButton%22%3Atrue%2C%22delayForShowSkipButton%22%3A6%2C%22providers%22%3A%5B%7B%22provider%22%3A%22adriver%22%2C%22url%22%3A%22http%3A%2F%2Fad.adriver.ru%2Fcgi-bin%2Ferle.cgi%3Fsid%3D171674%26target%3Dblank%26bt%3D54%26pz%3D3%26rnd%3D!%5Brnd%5D%22%7D%5D%7D%7D&amp;version=4.181"></object>
</div>
</center>




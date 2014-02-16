<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Магазин</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

</head>
<body>
<div id="header">

  <div id="logo"> 
  <p> <a href="/index.php"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ford.png" width="200" height="100" /> </a></p>
  </div>
  
  <div id="menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Ассортимент', 'url'=>array('/avto/index')),
				array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Контакты', 'url'=>array('/site/contact')),
                array('label'=>'Регистрация', 'url'=>array('/site/registration'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Логин', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Админка', 'url'=>array('/admin/car'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
  </div>
</div>
<div id="splash"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/img4.jpg" alt="" width="877" height="331" /></div>
<div id="content">
  <div id="colOne">
    <?php echo $content; ?>
    
  </div>
  <div id="colTwo">
    <h3>Search</h3>
    <form id="form1" method="get" action="">
      <div>
        <input name="textfield1" type="text" id="textfield1" />
        <input name="submit1" type="submit" id="submit1" value="Search" />
      </div>
    </form>
    <p></p>
   
  </div>
  <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
  <p>(c) <?php echo date( 'Y', time() ); ?> <?php echo CHtml::encode( Yii::app()->name )?>. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
</body>
</html>

<?php

class AvtoController extends Controller
{
	public function actionIndex()
	{
		$models = Avto::model()->findAllByAttributes(array('Cod_c=>$id'));
		
		$this->render('index',array('models' => $models));
	}

}
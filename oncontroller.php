public function actionGetlistforquote()
	{
		$data=State::model()->findAll('state_country=:state_country',
				array(':state_country'=>(int) $_POST['Quote']['quote_country']));
	
		$data=CHtml::listData($data,'state_id','state_name');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($name),true);
		}
	}

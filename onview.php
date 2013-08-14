<?php 
			    		echo $form->dropDownList($model,'quote_country', CHtml::listData(Country::model()->findAll(), 'country_id', 'country_name'),
						array(
								'ajax' => array(
										'type'=>'POST', //request type
										'url'=>CController::createUrl('state/getlistforquote'), //url to call.
										'update'=>'#Quote_quote_state', //selector to update
						),
								'empty'=>'Please Select'
)); 
?>
					<?php echo $form->dropDownList($model,'quote_state',
							CHtml::listData(State::model()->findAll("state_country='$model->quote_country'"), 'state_id', 'state_name'),
							array('empty'=>'Please Select')); ?>

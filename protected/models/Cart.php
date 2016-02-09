<?php

class Cart extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $c_id
	 * @var string $c_name
	 * @var string $c_email
	 * @var string $c_subject
	 * @var string $c_body
	 */

	public $crt_id;
	public $crt_order_id;
	public $crt_group_id;
	public $crt_product_id;
	public $crt_quantitiy;
	public $crt_price;
	public $crt_discount;
	public $crt_discounted_price;


	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName(){
		return '{{cart}}';
	}
	
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'c_created_on',
				'updateAttribute' => 'c_updated_on',
				'setUpdateOnCreate'=> true
			)
		);
	}

	public function getDiscountedAmount(){
		// perform some calculation
		return $this->crt_price * $this->crt_discount/100;
	}
}	

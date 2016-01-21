<?php

class Contact extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $c_id
	 * @var string $c_name
	 * @var string $c_email
	 * @var string $c_subject
	 * @var string $c_body
	 */

	public $c_id;
	public $c_name;
	public $c_email;
	public $c_subject;
	public $c_body;

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
		return '{{contact}}';
	}
	
	/*public function search($role=0) {

		$this->u_role = '';

		$criteria=new CDbCriteria;		
		$criteria->compare('u_username',$this->u_username,true);
		$criteria->compare('u_email',$this->u_email,true);
		$criteria->compare('u_shopname',$this->u_shopname,true);
		$criteria->addCondition("u_role = '$role'");
		$criteria->addCondition("u_status != '2'");
		$data =  new CActiveDataProvider($this, array(
			'pagination' => array( 'pageSize' => Yii::app()->user->getState('userPageSize',Yii::app()->params['defaultPageSize']), ),  
			'criteria'=>$criteria,
			'sort'=>array( 'defaultOrder'=>'u_id DESC', ),
		));
		return $data;
	}*/

	/**
	 * @return array validation rules for model attributes.
	 */
	/*public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.		
		$rules = array(
			
			array('u_username, u_shopname, u_email', 'safe', 'on'=>'search'),
			array('u_first_name, u_last_name, u_username, u_shopname, u_dob, u_role', 'length', 'min'=>1, 'max'=>50),
			array('temp_password', 'length', 'min'=>8, 'max'=>32,'tooShort'=>Yii::t('translator', 'Password is too short (maximum is 32 characters).'),'tooLong'=>Yii::t('translator', '{attribute} is too long (maximum is 32 characters).')),
			array('u_repeat_password', 'length', 'min'=>8, 'max'=>32,'tooShort'=>Yii::t('translator', 'Confirm Password is too short (maximum is 32 characters).'),'tooLong'=>Yii::t('translator', '{attribute} is too long (maximum is 32 characters).')),
			array('u_old_password', 'length', 'min'=>8, 'max'=>32,'tooShort'=>Yii::t('translator', '{attribute} is too short (maximum is 32 characters).'),'tooLong'=>Yii::t('translator', '{attribute} is too long (maximum is 32 characters).')),
			array('temp_password', 'compare', 'compareAttribute'=>'u_repeat_password','message'=>Yii::t('translator', 'Password must be repeated exactly.')),
			array('u_email', 'email'),
			array('u_email', 'unique','message'=>Yii::t('translator', 'This email already regiesterd.')),
			array('u_email', 'length',  'max'=>100),
			array('u_username', 'unique','message'=>Yii::t('translator', 'This username already exist.')),
			array('u_image', 'file','types'=>'jpg, jpeg, png', 'allowEmpty' => true,'message'=>'Valid only jpg, jpeg and png.'),	
			array('u_comment', 'length',  'max'=>255),
			array('u_country_id, u_username, u_email, u_shopname, temp_password, u_repeat_password, u_image', 'required','on'=>'businessadd'),
			array('u_country_id, u_username, u_email, u_shopname, temp_password, u_repeat_password ', 'required','on'=>'csvbusinessadd'),
			array('u_country_id, u_username, u_email, u_shopname', 'required','on'=>'businessedit'),
			array('u_country_id, u_username, u_email, temp_password, u_repeat_password', 'required','on'=>'useradd'),
			array('u_country_id, u_username, u_email, ', 'required','on'=>'useredit'),
			array('u_country_id, u_username, u_email, temp_password, u_repeat_password', 'required','on'=>'signup'),
			array('u_country_id, u_username, u_email, u_shopname, temp_password, u_image, u_repeat_password', 'required','on'=>'businesssignup'),
			array('u_password, u_repeat_password, u_old_password', 'required','on'=>'changepassword'),
			array('temp_password, u_repeat_password', 'required','on'=>'resetpassword'),
			array('u_deactivate_reason', 'length',  'max'=>255),
			array('username, password','required','on'=>'login'),
			array('u_email, u_social_site_username','required','on'=>'sociallogin'),
			array('u_user_type, u_first_name, u_username, u_shopname, u_email, u_gender, u_user_type, u_status, u_role, u_dob, u_old_password, verifyCode, temp_password, u_repeat_password, username, password,u_display_social_link, cropping_image_name','safe'),
			array('verifyCode', 'checkCaptcha','on'=>'signup'),
			array('verifyCode', 'checkCaptcha','on'=>'businesssignup'),
			array('terms_conditions','required','message'=>Yii::t('translator', 'Term and condition required field.'),'on'=>'signup'),
			array('terms_conditions','required','message'=>Yii::t('translator', 'Term and condition required field.'),'on'=>'businesssignup'),
			array('password', 'authenticate','on'=>'login'),

		);
		return $rules;
	}*/

	/**
	 * @return array relational rules.
	 */
	/*public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'country'=>array(self::BELONGS_TO, 'Country', 'u_country_id'),
			'apirequest'=>array(self::HAS_ONE, 'ApiRequest','ar_user_id'),
			'businessproductrequest'=>array(self::HAS_ONE, 'BusinessProductRequest','bpr_user_id'),
			'productrequestvote'=>array(self::HAS_MANY, 'ProductRequestVote','prv_user_id'),
			'votelist'=>array(self::HAS_MANY, 'VoteList','vl_user_id'),
			'userimage'=>array(self::HAS_MANY, 'UserImage','ui_user_id'),
			'favorite'=>array(self::HAS_MANY, 'Favorites','f_user_id'),
			'businessproduct'=>array(self::HAS_MANY,'businessproduct','bp_user_id'),
			'product'=>array(self::HAS_ONE,'products','p_requested_user_id'),
			'usersharedimage'=>array(self::HAS_MANY, 'UserImage','ui_user_id', 'on'=>"usersharedimage.ui_status=1", 'order' => 'usersharedimage.ui_image_shared_on desc', 'limit'=>2),
			// 'userimage'=>array(self::HAS_MANY, 'UserImage','ui_user_id','on'=>"userimage.ui_user_id=109 AND userimage.ui_status=1", 'order'=>'ui_image_shared_on desc', 'limit'=>2),
			// 'sharedimage'=>array(self::HAS_MANY, 'UserImage','ui_user_id', 'on'=>"abuseimage.al_user_id=$userId"),

			'subscriptionLogUser' => array(self::HAS_MANY, 'SubscriptionLog', 'sl_user_id'),
		);
	}*/

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	/*public function attributeLabels()
	{
		return array(
			'u_id' => 'Id',
			'u_first_name' => 'First Name',
			'u_last_name' => 'Last Name',
			'u_username' => 'Username',		
			'u_password' => 'Password',
			'u_repeat_password' => 'Confirm Password',
			'u_email' => 'Email',			
			'u_dob' => 'Date of Birth',
			'u_gender' => 'Gender',
			'u_city' => 'City',
			'u_country_id' => 'Country',
			'u_about' => 'About',
			'u_image' => 'Profile Image',
			'verifyCode'=> 'Security Code',
			'terms_conditions'=>'<p class="help-block">'.Yii::t("translator","I agree").'</p>',
			// 'terms_conditions'=>'I agree',
			'u_status'=> 'Deactivate',
			'u_user_type'=> 'Subscription Type',
			'u_comment'=> 'Introduction Comment',
			'u_shopname'=> 'Shop Name',
			'u_deactivate_reason'=> 'Deactivate Reason',
			'u_old_password'=>'Old Password',
			'company_logo'=>'Company Logo',
			'username'=> 'Email',
			'temp_password'=> 'Password',
			'u_display_social_link'=> Yii::t("translator",'View social profile link'),
			'rememberMe' => Yii::t("translator",'Remember Me'),
		);
	}*/

	
	/*
	* Change password before saving
	*/
	
	/*protected function beforeSave(){
		//hash password on before saving the record: 		
		if($this->isNewRecord){
			$this->u_role = ($this->u_role==2)?'member':'business';
			$this->u_encrypt_password = $this->hashPassword($this->temp_password);
		}
		if(!empty($this->temp_password)){
			$this->u_password = $this->temp_password;
			$this->u_encrypt_password = $this->hashPassword($this->u_password);
		}
		if($this->u_user_type && ('0000-00-00'==$this->u_subscription_expired_on || !(date('Y-m-d')<=$this->u_subscription_expired_on) )){
			$this->u_subscription_expired_on = date("Y-m-d",strtotime("+1 month")); ;
		}

		return parent::beforeSave();
	}*/

	/*
	*assign role in authassignment
	*/
	
	
	/*protected function afterSave(){
		if ($this->isNewRecord){
			$auth = Yii::app()->authManager;
			$auth->assign($this->u_role,$this->u_id);			
			$slug = strtolower($this->u_first_name).'-'.strtolower($this->u_last_name);
		}
		parent::afterSave();
	}*/

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
}

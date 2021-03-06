<?php

/**
 * This is the model class for table "{{Users}}".
 *
 * The followings are the available columns in table '{{Users}}':
 * @property integer $User_id
 * @property string $UserName
 * @property string $password
 * @property string $Created
 * @property integer $Role
 * @property string $Email
 */
class Users extends CActiveRecord
{
    
    const ROLE_ADMIN = 'admin';
    //const ROLE_MODER = 'moderator';
    const ROLE_USER = 'user';
    //const ROLE_BANNED = 'banned';
    public $verifyCode;
	
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{Users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserName','password','Role', 'required'),
			array('Role', 'numerical', 'integerOnly'=>true),
			array('UserName, password, Email', 'length', 'max'=>255),
			array('Created', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'on' => 'registration'),
			array('User_id, UserName, password, Created, Role, Email', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'User_id' => 'User',
			'UserName' => 'User Name',
			'password' => 'Password',
			'Created' => 'Created',
			'Role' => 'Role',
			'Email' => 'Email',
            'verifyCode' => 'Verify_Code'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('User_id',$this->User_id);
		$criteria->compare('UserName',$this->UserName,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('Created',$this->Created,true);
		$criteria->compare('Role',$this->Role);
		$criteria->compare('Email',$this->Email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function beforeSave()
	{
	   if ($this->isNewRecord)
        $this->Role = 2;
	   $this->password = md5($this->password);
		return parent::beforeSave();
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

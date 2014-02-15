<?php

/**
 * This is the model class for table "{{Purchase}}".
 *
 * The followings are the available columns in table '{{Purchase}}':
 * @property integer $Cod_p
 * @property integer $p_number
 * @property integer $Cod_c
 * @property integer $User_id
 * @property string $Guest
 * @property integer $Status
 */
class Purchase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{Purchase}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p_number, Cod_c, User_id, Status', 'numerical', 'integerOnly'=>true),
			array('Guest', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_p, p_number, Cod_c, User_id, Guest, Status', 'safe', 'on'=>'search'),
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
            'Users' =>array(self::BELONGS_TO,'Users','User_id'),
            'car' =>array(self::BELONGS_TO,'car','Cod_c'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_p' => 'Cod P',
			'p_number' => 'P Number',
			'Cod_c' => 'Cod C',
			'User_id' => 'User',
			'Guest' => 'Guest',
			'Status' => 'Status',
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

		$criteria->compare('Cod_p',$this->Cod_p);
		$criteria->compare('p_number',$this->p_number);
		$criteria->compare('Cod_c',$this->Cod_c);
		$criteria->compare('User_id',$this->User_id);
		$criteria->compare('Guest',$this->Guest,true);
		$criteria->compare('Status',$this->Status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Purchase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

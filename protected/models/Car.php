<?php

/**
 * This is the model class for table "{{car}}".
 *
 * The followings are the available columns in table '{{car}}':
 * @property integer $Cod_c
 * @property string $Mark_c
 * @property string $Model_c
 * @property string $Year_c
 * @property string $Nomer_c
 * @property string $Type_c
 * @property string $Custom_c
 * @property string $Text_c
 * @property integer $Articul_c
 * @property double $Price_c
 * @property integer $Image_c
 */
class Car extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{car}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Articul_c, Image_c', 'numerical', 'integerOnly'=>true),
			array('Price_c', 'numerical'),
			array('Mark_c, Model_c, Nomer_c, Type_c, Custom_c', 'length', 'max'=>20),
			array('Year_c, Text_c', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_c, Mark_c, Model_c, Year_c, Nomer_c, Type_c, Custom_c, Text_c, Articul_c, Price_c, Image_c', 'safe', 'on'=>'search'),
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
			'Cod_c' => 'Cod C',
			'Mark_c' => 'Mark C',
			'Model_c' => 'Model C',
			'Year_c' => 'Year C',
			'Nomer_c' => 'Nomer C',
			'Type_c' => 'Type C',
			'Custom_c' => 'Custom C',
			'Text_c' => 'Text C',
			'Articul_c' => 'Articul C',
			'Price_c' => 'Price C',
			'Image_c' => 'Image C',
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

		$criteria->compare('Cod_c',$this->Cod_c);
		$criteria->compare('Mark_c',$this->Mark_c,true);
		$criteria->compare('Model_c',$this->Model_c,true);
		$criteria->compare('Year_c',$this->Year_c,true);
		$criteria->compare('Nomer_c',$this->Nomer_c,true);
		$criteria->compare('Type_c',$this->Type_c,true);
		$criteria->compare('Custom_c',$this->Custom_c,true);
		$criteria->compare('Text_c',$this->Text_c,true);
		$criteria->compare('Articul_c',$this->Articul_c);
		$criteria->compare('Price_c',$this->Price_c);
		$criteria->compare('Image_c',$this->Image_c);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Car the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
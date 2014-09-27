<?php

/**
 * This is the model class for table "disabilityr02".
 *
 * The followings are the available columns in table 'disabilityr02':
 * @property string $disabtype
 * @property string $total
 * @property string $congenital
 * @property string $injury
 * @property string $disease
 */
class Disabilityr02 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disabilityr02';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('disabtype', 'length', 'max'=>1),
			array('total', 'length', 'max'=>20),
			array('congenital, injury, disease', 'length', 'max'=>23),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('disabtype, total, congenital, injury, disease', 'safe', 'on'=>'search'),
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
			'disabtype' => 'ระดับความรุนแรงของผู้พิการ',
			'total' => 'จำนวนทั้งหมด',
			'congenital' => 'พิการตั้งแต่กำเนิด',
			'injury' => 'พิการจากการบาดเจ็บ',
			'disease' => 'พิการจากโรค',
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

		$criteria->compare('disabtype',$this->disabtype,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('congenital',$this->congenital,true);
		$criteria->compare('injury',$this->injury,true);
		$criteria->compare('disease',$this->disease,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Disabilityr02 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

class Disabilityr01 extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'disabilityr01';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('distcode', 'length', 'max' => 2),
            array('hospcode', 'length', 'max' => 5),
            array('hosname', 'length', 'max' => 255),
            array('total', 'length', 'max' => 20),
            array('Visible, Hear, Movement, Behavior, Wisdom, Learning, Autism', 'length', 'max' => 23),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('distcode, hosname,hospcode, total, Visible, Hear, Movement, Behavior, Wisdom, Learning, Autism', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'distcode' => 'อำเภอ',
            'hospcode' => 'รหัสสถานบริการ',
            'hosname' => 'สถานบริการ',
            'total' => 'ผู้พิการทั้งหมด',
            'Visible' => 'การมองเห็น',
            'Hear' => 'การได้ยิน',
            'Movement' => 'การเคลื่อนไหว',
            'Behavior' => 'พฤติกรรม',
            'Wisdom' => 'สติปัญญา',
            'Learning' => 'การเรียนรู้',
            'Autism' => 'ออทิสติก',
        );
    }

    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('distcode', $this->distcode, true);
        $criteria->compare('hosname', $this->hosname, true);
        $criteria->compare('hospcode', $this->hospcode, true);
        $criteria->compare('total', $this->total, true);
        $criteria->compare('Visible', $this->Visible, true);
        $criteria->compare('Hear', $this->Hear, true);
        $criteria->compare('Movement', $this->Movement, true);
        $criteria->compare('Behavior', $this->Behavior, true);
        $criteria->compare('Wisdom', $this->Wisdom, true);
        $criteria->compare('Learning', $this->Learning, true);
        $criteria->compare('Autism', $this->Autism, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Disabilityr01 the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

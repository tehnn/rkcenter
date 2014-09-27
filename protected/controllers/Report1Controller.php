<?php

class Report1Controller extends Controller {
    public function actionRpt1(){
    $sql = "SELECT p.HOSPCODE ,c.hosname , COUNT(DISTINCT p.CID) as total
        from person p
        left join chospital c on p.HOSPCODE = c.hoscode 
        GROUP BY p.HOSPCODE";

    $dataReader = Yii::app()->db->createCommand($sql)->queryAll();
    //CVarDumper::dump($dataReader);

    $dataProvider = new CArrayDataProvider($dataReader, array(
    'totalItemCount' => count($dataReader),
    'keyField' => 'HOSPCODE',//'HOSPCODE',
    'pagination' => array(
    'pageSize' => 10
    ),
    ));

    $this->render('Rpt1', array(
    'model' => $dataProvider
    ));
    }
}

<?php

class PopController extends Controller {

    public function actionPopr01() {
        $sql = "
        select distcode,hospcode,chospital.hosname as hosname,count(pid)as total,
sum(if(age = 0 and sex='1',1,0)) 'mless_01', sum(if(age = 0 and sex='2',1,0)) 'fless_01', 
sum(if(age between 1 and 4 and sex='1',1,0)) m01_04, sum(if(age between 1 and 4 and sex='2',1,0)) f01_04, 
sum(if(age between 5 and 9 and sex='1',1,0)) m05_09, sum(if(age between 5 and 9 and sex='2',1,0)) f05_09, 
sum(if(age between 10 and 14 and sex='1',1,0)) m10_14, sum(if(age between 10 and 14 and sex='2',1,0)) f10_14, 
sum(if(age between 15 and 19 and sex='1',1,0)) m15_19, sum(if(age between 15 and 19 and sex='2',1,0)) f15_19, 
sum(if(age between 20 and 24 and sex='1',1,0)) m20_24, sum(if(age between 20 and 24 and sex='2',1,0)) f20_24, 
sum(if(age between 25 and 29 and sex='1',1,0)) m25_29, sum(if(age between 25 and 29 and sex='2',1,0)) f25_29, 
sum(if(age between 30 and 34 and sex='1',1,0)) m30_34, sum(if(age between 30 and 34 and sex='2',1,0)) f30_34, 
sum(if(age between 35 and 39 and sex='1',1,0)) m35_39, sum(if(age between 35 and 39 and sex='2',1,0)) f35_39, 
sum(if(age between 40 and 44 and sex='1',1,0)) m40_44, sum(if(age between 40 and 44 and sex='2',1,0)) f40_44, 
sum(if(age between 45 and 49 and sex='1',1,0)) m45_49, sum(if(age between 45 and 49 and sex='2',1,0)) f45_49, 
sum(if(age between 50 and 54 and sex='1',1,0)) m50_54, sum(if(age between 50 and 54 and sex='2',1,0)) f50_54, 
sum(if(age between 55 and 59 and sex='1',1,0)) m55_59, sum(if(age between 55 and 59 and sex='2',1,0)) f55_59, 
sum(if(age between 60 and 199 and sex='1',1,0)) 'm60_more', sum(if(age between 60 and 199 and sex='2',1,0)) 'f60_more' 
from (
	select *,TIMESTAMPDIFF(year,birth, NOW()) age from person 
	where typearea in ('1','3') and discharge='9' 
	group by cid) pn 
left join chospital on pn.hospcode=chospital.hoscode 
where distcode is not null
group by distcode,hospcode";

        if (isset($_POST['data'])) {
            $sql = "
            select distcode,hospcode,chospital.hosname as hosname,count(pid) as total,
sum(if(age = 0 and sex='1',1,0)) 'mless_01', sum(if(age = 0 and sex='2',1,0)) 'fless_01', 
sum(if(age between 1 and 4 and sex='1',1,0)) m01_04, sum(if(age between 1 and 4 and sex='2',1,0)) f01_04, 
sum(if(age between 5 and 9 and sex='1',1,0)) m05_09, sum(if(age between 5 and 9 and sex='2',1,0)) f05_09, 
sum(if(age between 10 and 14 and sex='1',1,0)) m10_14, sum(if(age between 10 and 14 and sex='2',1,0)) f10_14, 
sum(if(age between 15 and 19 and sex='1',1,0)) m15_19, sum(if(age between 15 and 19 and sex='2',1,0)) f15_19, 
sum(if(age between 20 and 24 and sex='1',1,0)) m20_24, sum(if(age between 20 and 24 and sex='2',1,0)) f20_24, 
sum(if(age between 25 and 29 and sex='1',1,0)) m25_29, sum(if(age between 25 and 29 and sex='2',1,0)) f25_29, 
sum(if(age between 30 and 34 and sex='1',1,0)) m30_34, sum(if(age between 30 and 34 and sex='2',1,0)) f30_34, 
sum(if(age between 35 and 39 and sex='1',1,0)) m35_39, sum(if(age between 35 and 39 and sex='2',1,0)) f35_39, 
sum(if(age between 40 and 44 and sex='1',1,0)) m40_44, sum(if(age between 40 and 44 and sex='2',1,0)) f40_44, 
sum(if(age between 45 and 49 and sex='1',1,0)) m45_49, sum(if(age between 45 and 49 and sex='2',1,0)) f45_49, 
sum(if(age between 50 and 54 and sex='1',1,0)) m50_54, sum(if(age between 50 and 54 and sex='2',1,0)) f50_54, 
sum(if(age between 55 and 59 and sex='1',1,0)) m55_59, sum(if(age between 55 and 59 and sex='2',1,0)) f55_59, 
sum(if(age between 60 and 199 and sex='1',1,0)) 'm60_more', sum(if(age between 60 and 199 and sex='2',1,0)) 'f60_more' 
from (
	select *,TIMESTAMPDIFF(year,birth, NOW()) age from person 
	where typearea in ('1','3') and discharge='9' 
	group by cid) pn 
left join chospital on pn.hospcode=chospital.hoscode 
where distcode is not null and hospcode = '$_POST[data2]'
group by distcode,hospcode";
        }

        $dataReader = Yii::app()->db->createCommand($sql)->queryAll();
        
        $dataProvider = new CArrayDataProvider($dataReader, array(
        'totalItemCount' => count($dataReader),
        'keyField' => 'hospcode', //'HOSPCODE',
        'pagination' => false
            ));

        $this->render('Pop_report01', array(
            'model' => $dataReader,
        ));
    }

    public function actionPopr02() {

        $sql = "SELECT p.HOSPCODE ,c.hosname , COUNT(DISTINCT p.CID) as total
        from person p
        left join chospital c on p.HOSPCODE = c.hoscode 
        GROUP BY p.HOSPCODE";

        $dataReader = Yii::app()->db->createCommand($sql)->queryAll();

        $dataProvider = new CArrayDataProvider($dataReader, array(
            'totalItemCount' => count($dataReader),
            'keyField' => 'HOSPCODE', //'HOSPCODE',
            'pagination' => false//array(
                //'pageSize' => 20
                //),
        ));

        $this->render('Pop_report02', array(
            'model' => $dataProvider
        ));
    }

    public function actionPopr03() {

        $sql = "
        select distcode,hospcode,chospital.hosname as hosname,count(pid)as total,
sum(if(age = 0 and sex='1',1,0)) 'mless_01', sum(if(age = 0 and sex='2',1,0)) 'fless_01', 
sum(if(age between 1 and 4 and sex='1',1,0)) m01_04, sum(if(age between 1 and 4 and sex='2',1,0)) f01_04, 
sum(if(age between 5 and 9 and sex='1',1,0)) m05_09, sum(if(age between 5 and 9 and sex='2',1,0)) f05_09, 
sum(if(age between 10 and 14 and sex='1',1,0)) m10_14, sum(if(age between 10 and 14 and sex='2',1,0)) f10_14, 
sum(if(age between 15 and 19 and sex='1',1,0)) m15_19, sum(if(age between 15 and 19 and sex='2',1,0)) f15_19, 
sum(if(age between 20 and 24 and sex='1',1,0)) m20_24, sum(if(age between 20 and 24 and sex='2',1,0)) f20_24, 
sum(if(age between 25 and 29 and sex='1',1,0)) m25_29, sum(if(age between 25 and 29 and sex='2',1,0)) f25_29, 
sum(if(age between 30 and 34 and sex='1',1,0)) m30_34, sum(if(age between 30 and 34 and sex='2',1,0)) f30_34, 
sum(if(age between 35 and 39 and sex='1',1,0)) m35_39, sum(if(age between 35 and 39 and sex='2',1,0)) f35_39, 
sum(if(age between 40 and 44 and sex='1',1,0)) m40_44, sum(if(age between 40 and 44 and sex='2',1,0)) f40_44, 
sum(if(age between 45 and 49 and sex='1',1,0)) m45_49, sum(if(age between 45 and 49 and sex='2',1,0)) f45_49, 
sum(if(age between 50 and 54 and sex='1',1,0)) m50_54, sum(if(age between 50 and 54 and sex='2',1,0)) f50_54, 
sum(if(age between 55 and 59 and sex='1',1,0)) m55_59, sum(if(age between 55 and 59 and sex='2',1,0)) f55_59, 
sum(if(age between 60 and 199 and sex='1',1,0)) 'm60_more', sum(if(age between 60 and 199 and sex='2',1,0)) 'f60_more' 
from (
	select *,TIMESTAMPDIFF(year,birth, NOW()) age from person 
	where typearea in ('1','3') and discharge='9' 
	group by cid) pn 
left join chospital on pn.hospcode=chospital.hoscode 
where distcode is not null
group by distcode,hospcode";
        
        $dataReader = Yii::app()->db->createCommand($sql)->queryAll();

        $dataProvider = new CArrayDataProvider($dataReader, array(
            'totalItemCount' => count($dataReader),
            'keyField' => 'hospcode', //'HOSPCODE',
            'pagination' => false//array(
                //'pageSize' => 20
                //),
        ));

        $this->render('Pop_report09', array(
            'model' => $dataProvider
        ));
    }

}

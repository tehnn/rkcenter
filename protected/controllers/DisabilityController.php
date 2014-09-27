<?php

class DisabilityController extends Controller {

    public function actionDisabilityr01() {
        /* แบบ ของ อุเทน ซึ่งก็ใช้ได้เหมือนกัน 
          $model = new Disabilityr01();

          $model->unsetAttributes();  // clear any default values
          if (isset($_GET['Disabilityr01']))
          $model->attributes = $_GET['Disabilityr01'];



          $this->render('Dis_report01', array(
          'model' => $model
          ));
         */
        $model = new Disabilityr01();

        $Disabilityr01s = new CActiveDataProvider($model);
        $Disabilityr01s->setPagination(FALSE);


        $this->render('Dis_report01', array(
            'Disabilityr01s' => $Disabilityr01s
        ));
    }

    public function actionDisabilityr02() {

        $model = new Disabilityr02();

        $Disabilityr02s = new CActiveDataProvider($model, array(
            "pagination" => array(
                "pageSize" => 10
            )
        ));


        $this->render('Dis_report02', array(
            'Disabilityr02s' => $Disabilityr02s
        ));
    }

    public function actionDisabilityr03() {

        $model = new Disabilityr03();

        $Disabilityr03s = new CActiveDataProvider($model);
        $Disabilityr03s->setPagination(FALSE);


        $this->render('Dis_report03', array(
            'Disabilityr03s' => $Disabilityr03s
        ));
    }

    public function actionDisabilityr04() {

          $this->render('v_Rpt4');
    }
       
    public function actionDisabilityr06() {

          $this->render('Dis_report05');
    }

}

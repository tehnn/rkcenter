<div class="well-sm" style="float: left;">
    <?php
    $data = $UcAlls->getData();

    $piedata = array();

    foreach ($data as $key) {

        array_push($piedata, array($key['ucname'], intval($key['population'])));
    }
    //print_r($data);

    $this->widget('booster.widgets.TbHighCharts', array(
        //'htmlOptions' => array('style' => 'width: 450px;'),
        'options' => array(
            'chart' => array(
                'type' => 'pie',
            ),
            'title' => array(
                'text' => 'ผู้มีสิทธิ์หลักประกันสุขภาพ ',
            ),
            //'subtitle' => array(
            //'text' => 'อำเภอร้องกวาง ปีงบประมาณ 2557',
            //),
            'tooltip' => array(
                'pointFormat' => 'จำนวน {point.y}คน คิดเป็น {point.percentage:.1f} %'
            ),
            'plotOptions' => array(
                'pie' => array(
                    'allowPointSelect' => true,
                    'cursor' => 'pointer',
                    'dataLabels' => array(
                        'enabled' => true, //true,false                      
                        'format'=>'{point.name} {point.percentage:.1f} %',
                    ),
                    'showInLegend'=>True
                )
            ),
            'series' => array(array(
                    'name' => 'จำนวน',
                    'data' => $piedata
                )),
            'htmlOptions' => array(
                'style' => 'width: 450px; min-width: 310px; height: 400px; margin: 0 auto'
            )
)))
    ;
    ?>
</div>
<div class="well-sm" style="float: left; width: 350px;">
    <?php /*
      echo "*" .$ucname[0]."  <b>" .number_format($population[0]) ."</b> คน". "<br>";
      echo "*" .$ucname[1]."  <b>" .number_format($population[1]) ."</b> คน". "<br>";
      echo "*" .$ucname[2]."  <b>" .number_format($population[2]) ."</b> คน". "<br>";
      echo "*" .$ucname[3]."  <b>" .number_format($population[3]) ."</b> คน". "<br>";
      echo "" .$ucname[4]."  <b>" .number_format($population[4]) ."</b> คน". "<br>"; */
    ?>
</div>
<div class="well-sm" style="alignment-adjust:left; width: 350px;" >
    ข้อมูล ณ วันที่ 31 สิงหาคม 2557
</div>



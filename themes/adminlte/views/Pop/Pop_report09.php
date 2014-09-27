<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนประชากร แยกตามกลุ่มอายุและรายสถานบริการ'; ?></h4>

<div class="well">
    <!--เริ่มต้นส่วนของการแสดงผล การเลือกเงื่อนไขการแสดง-->
    <!--<a class="search-button btn btn-primary" >เงื่อนไข <i class="glyphicon glyphicon-question-sign"></i></a> -->
    <!--
        <div class="search-form form well" <!--style="display:none; margin-top: 50px">
             <form method="POST">
                <select class="btn btn-default" data-style="btn-primary" name="data2">
                 //<?php
    /*
      $i = 0;
      foreach ($model as $key => $value):
      $i++;
      ?>
      <option value=<?php echo $value['HOSPCODE'] ?>><?php echo $value['HOSPCODE'] . " " . $value['hosname'] ?></option>
      <?php
      endforeach;
      ?> */
    // </select>
    // <input type="hidden" name="data">  <!-- -->
    //  <input type="submit" class="btn btn-default" value="แสดงเฉพาะสถานบริการที่เลือก">
    //  </form>
    // </div>
    ?>
    <!--สิ้นสุดส่วนของการแสดงผล การเลือกเงื่อนไขการแสดง-->


    <!--เริ่มต้นส่วนของการแสดงผล กราฟ-->
    <div class="well" style="width: 950px;">
        <?php
        //CVarDumper::dump($model);
        $data = $model->getData();

        $hospcode = array();
        $total = array();
        $mless_01 = array();
        $fless_01 = array();
        /* $m01_04 = array();
          $f01_04 = array();
          $m05_09 = array();
          $f05_09 = array();
          $m10_14 = array();
          $f10_14 = array();
          $m15_19 = array();
          $f15_19 = array();
          $m20_24 = array();
          $f20_24 = array();
          $m25_29 = array();
          $f25_29 = array();
          $m30_34 = array();
          $f30_34 = array();
          $m35_39 = array();
          $f35_39 = array();
          $m40_44 = array();
          $f40_44 = array();
          $m45_49 = array();
          $f45_49 = array();
          $m50_54 = array();
          $f50_54 = array();
          $m55_59 = array();
          $f55_59 = array();
          $m60_more = array();
          $f60_more = array(); */

        foreach ($data as $d) {
            array_push($hospcode, $d['hospcode']);
            //array_push($total, intval($d['total']));
            array_push($mless_01, intval($d['mless_01']));
            array_push($fless_01, intval($d['fless_01']));
            /* array_push($m01_04, intval($d['$m01_04']));
              array_push($f01_04, intval($d['f01_04']));
              array_push($m05_09, intval($d['m05_09']));
              array_push($f05_09, intval($d['f05_09']));
              array_push($m10_14, intval($d['m10_14']));
              array_push($f10_14, intval($d['f10_14']));
              array_push($m15_19, intval($d['m15_19']));
              array_push($f15_19, intval($d['f15_19']));
              array_push($m20_24, intval($d['m20_24']));
              array_push($f20_24, intval($d['f20_24']));
              array_push($m25_29, intval($d['m25_29']));
              array_push($f25_29, intval($d['f25_29']));
              array_push($m30_34, intval($d['m30_34']));
              array_push($f30_34, intval($d['f30_34']));
              array_push($m35_39, intval($d['m35_39']));
              array_push($f35_39, intval($d['f35_39']));
              array_push($m40_44, intval($d['m40_44']));
              array_push($f40_44, intval($d['f40_44']));
              array_push($m45_49, intval($d['m45_49']));
              array_push($f45_49, intval($d['f45_49']));
              array_push($m50_54, intval($d['m50_54']));
              array_push($f50_54, intval($d['f50_54']));
              array_push($m55_59, intval($d['m55_59']));
              array_push($f55_59, intval($d['f55_59']));
              array_push($m60_more, intval($d['m60_more']));
              array_push($f60_more, intval($d['f60_more'])); */
        }

        $this->widget(
                'booster.widgets.TbHighCharts', array(
            'options' => array(
                'chart' => array(
                    'type' => 'line'),
                'title' => array(
                    'text' => 'กราฟเส้นแสดงประชากรตามกลุ่มอายุ ',
                    'x' => -20 //center
                ),
                'subtitle' => array(
                    'text' => 'ปีงบประมาณ 2557',
                    'x' - 20
                ),
                'xAxis' => array(
                    'categories' => $hospcode
                ),
                'yAxis' => array(
                    'min' => 0,
                    'title' => array(
                        'text' => 'จำนวนประชากร (คน)',
                    ),
                    'plotLines' => [
                        [
                            'value' => 0,
                            'width' => 1,
                            'color' => '#808080'
                        ]
                    ],
                ),
                'tooltip' => array(
                    'valueSuffix' => 'คน'
                ),
                'legend' => array(
                    'layout' => 'vertical',
                    'align' => 'right',
                    'verticalAlign' => 'middle',
                    'borderWidth' => 1
                ),
                'series' => array(
                    //[
                   //     'name' => 'จำนวนทั้งหมด',
                   //     'data' => $total
                   // ],
                [
                  'name' => 'ผู้พิการทั้งหมด',
                  'data' => $mless_01
                  ],
                  [
                  'name' => 'การมองเห็น',
                  'data' => $fless_01
                  ],
                 /*  [
                  'name' => 'การได้ยิน',
                  'data' => $m01_04
                  ],
                  [
                  'name' => 'การเคลื่อนไหว',
                  'data' => $f01_04
                  ],
                  [
                  'name' => 'ด้านพฤติกรรม',
                  'data' => $m05_09
                  ],
                  [
                  'name' => 'สติปัญญา',
                  'data' => $f05_09
                  ],
                  [
                  'name' => 'การเรียนรู้',
                  'data' => $m10_14
                  ],
                  [
                  'name' => 'ออทิสติก',
                  'data' => $f10_14
                  ] */
                )
            ),
            'htmlOptions' => array(
                'style' => 'min-width: 310px; height: 400px; margin: 0 auto'
            )
                )
        );
        ?>


    </div>
    <!--สิ้นสุดส่วนของการแสดงผล กราฟ-->
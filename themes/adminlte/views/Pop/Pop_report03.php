<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนประชากร แยกตามกลุ่มอายุและรายสถานบริการ'; ?></h4>

    <!--เริ่มต้นส่วนของการแสดงผล กราฟ-->
    <div class="well" style="width: 950px;">
        <?php
        //CVarDumper::dump($model);
        $data = $model->getData();
        $hospcode = array();
        $total = array();
 
        foreach ($data as $d) {
            array_push($hospcode, $d['HOSPCODE']);
            array_push($total, intval($d['total']));
            }

        $this->widget(
                'booster.widgets.TbHighCharts', array(
            'options' => array(
                'chart' => array(
                    'type' => 'column'),
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
                    [
                        'name' => 'จำนวนทั้งหมด',
                        'data' => $total
                    ],
                /* [
                  'name' => 'ผู้พิการทั้งหมด',
                  'data' => $mless_01
                  ],
                  [
                  'name' => 'การมองเห็น',
                  'data' => $fless_01
                  ],
                  [
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
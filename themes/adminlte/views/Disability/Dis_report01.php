<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนผู้พิการ แยกตามรายสถานบริการ'; ?></h4>

<style>
    .odd td {
        background-color: #B7F1C4;
    }
    .even td {
        background-color: #FFFFFF;
    }
</style>

<div class="well">
    <?php
    CVarDumper::dump($Disabilityr01s);
    $data = $Disabilityr01s->getData();

    $hospcode = array();
    $total = array();
    $Visible = array();
    $Hear = array();
    $Movement = array();
    $Behavior = array();
    $Wisdom = array();
    $Learning = array();
    $Autism = array();
    foreach ($data as $d) {
        array_push($hospcode, $d['hospcode']);
        array_push($total, intval($d['total']));
        array_push($Visible, intval($d['Visible']));
        array_push($Hear, intval($d['Hear']));
        array_push($Movement, intval($d['Movement']));
        array_push($Behavior, intval($d['Behavior']));
        array_push($Wisdom, intval($d['Wisdom']));
        array_push($Learning, intval($d['Learning']));
        array_push($Autism, intval($d['Autism']));
    }

    $this->widget(
            'booster.widgets.TbHighCharts', array(
        'options' => array(
            'chart' => array(
                'type' => 'column'),
            'title' => array(
                'text' => 'กราฟแสดงจำนวนผู้พิการ ',
                'x' => -20 //center
            ),
            'subtitle' => array(
                'text' => 'แยกตามรายสถานบริการและประเภท ปีงบประมาณ 2557',
                'x' - 20
            ),
            'xAxis' => array(
                'categories' => $hospcode
            ),
            'yAxis' => array(
                'min' => 0,
                'title' => array(
                    'text' => 'จำนวนผู้พิการ (คน)',
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
                    'name' => 'ผู้พิการทั้งหมด',
                    'data' => $total
                ],
                [
                    'name' => 'การมองเห็น',
                    'data' => $Visible
                ],
                [
                    'name' => 'การได้ยิน',
                    'data' => $Hear
                ],
                [
                    'name' => 'การเคลื่อนไหว',
                    'data' => $Movement
                ],
                [
                    'name' => 'ด้านพฤติกรรม',
                    'data' => $Behavior
                ],
                [
                    'name' => 'สติปัญญา',
                    'data' => $Wisdom
                ],
                [
                    'name' => 'การเรียนรู้',
                    'data' => $Learning
                ],
                [
                    'name' => 'ออทิสติก',
                    'data' => $Autism
                ]
            )
        ),
        'htmlOptions' => array(
            'style' => 'min-width: 310px; height: 400px; margin: 0 auto'
        )
            )
    );
    ?>
    <hr>
    <div class="well">
        <?php
//CVarDumper::dump($model);
// นำเข้าส่วนที่ใช้ส่งออก excel
        $dir = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile($dir . '/js/excellentexport.js');

        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'Disabilityr01',
            'dataProvider' => $Disabilityr01s,
            'template' => "{pager}\n{items}",
            //'htmlOptions' => array('style' => 'width: 700px;'),
            'rowCssClass' => array('odd', 'even'),
            'columns' => array(
                array('name' => 'hosname',
                    'htmlOptions' => array('style' => 'text-align: left; color:blue; font-weight: bold;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'total',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Visible',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Hear',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Movement',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Behavior',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Wisdom',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Learning',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'Autism',
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
            /*
              'hosname',
              'total',
              'Visible',
              'Hear',
              'Movement',
              'Behavior',
              'Wisdom',
              'Learning',
              'Autism'
             */
        )));
        ?>
    </div>
    <!--ส่วนของการส่งออก excel-->
    <a download = "Disabilityr01.xls" href = "#" onclick = "return ExcellentExport.excel(this, 'Disabilityr01', 'Disabilityr01');" class = "btn btn-twitter">ส่งออก Excel</a>
    <!--ส่วนของปุ่ม-->
    <?php echo ' '; ?>
    <a href = "#" class = "btn btn-tumblr">กลับไปด้านบน</a>
</div>
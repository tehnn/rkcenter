<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนผู้พิการ แยกตามสาเหตุความพิการและระดับความรุนแรง'; ?></h4>

<style>
    .odd td {
        background-color: #B7F1C4;
    }
    .even td {
        background-color: #FFFFFF;
    }
</style>

<div class="well" style="width: 1000px;">
    <?php
    $data = $Disabilityr02s->getData();

    $level = array();
    $total = array();
    $congenital = array();
    $injury = array();
    $disease = array();
    foreach ($data as $d) {
        array_push($level, $d['disabtype']);
        array_push($total, intval($d['total']));
        array_push($congenital, intval($d['congenital']));
        array_push($injury, intval($d['injury']));
        array_push($disease, intval($d['disease']));
    }

    $this->widget(
            'booster.widgets.TbHighCharts', array(
        'options' => array(
            'chart' => array(
                'type' => 'column'),
            'title' => array(
                'text' => 'กราฟจำนวนผู้พิการ แยกตามสาเหตุความพิการและระดับความรุนแรง',
                'x' => -20 //center
            ),
            'subtitle' => array(
                'text' => 'ปีงบประมาณ 2557',
                'x' - 20
            ),
            'xAxis' => array(
                'categories' => $level
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
                    'name' => 'พิการแต่กำเนิด',
                    'data' => $congenital
                ],
                [
                    'name' => 'พิการจากการบาดเจ็บ',
                    'data' => $injury
                ],
                [
                    'name' => 'พิการจากโรค',
                    'data' => $disease
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
<div class="well" style="width: 950px;">
    <?php
//CVarDumper::dump($model);
// นำเข้าส่วนที่ใช้ส่งออก excel
    $dir = Yii::app()->theme->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($dir . '/js/excellentexport.js');


    $this->widget('booster.widgets.TbGridView', array(
        'id' => 'Disabilityr02',
        'dataProvider' => $Disabilityr02s,
        //'summaryText' => 'แสดงข้อมูล {start}-{end} จากจำนวนทั้งหมด {count}',
        'template' => "{pager}\n{items}", //ใช้ในการแสดงรายละเอียด{summary}\n
        'htmlOptions' => array('style' => 'width: 700px;'),
        'rowCssClass' => array('odd', 'even'),
        'columns' => array(
            array('name' => 'disabtype',
                'htmlOptions' => array('style' => 'text-align: center; color:blue; font-weight: bold;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
            array('name' => 'total',
                'htmlOptions' => array('style' => 'text-align: center;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
            array('name' => 'congenital',
                'htmlOptions' => array('style' => 'text-align: center;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
            array('name' => 'injury',
                'htmlOptions' => array('style' => 'text-align: center;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
            array('name' => 'disease',
                'htmlOptions' => array('style' => 'text-align: center;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
        /*
          'disabtype',
          'total',
          'congenital',
          'injury',
          'disease', */
    )));
    ?>
</div>
<!--ส่วนของการส่งออก excel-->
<a download = "Disabilityr02.xls" href = "#" onclick = "return ExcellentExport.excel(this, 'Disabilityr02', 'Disabilityr02');" class = "btn btn-twitter">ส่งออก Excel</a>
<!--ส่วนของปุ่ม-->
<?php echo ' '; ?>
<a href = "#" class = "btn btn-tumblr">กลับไปด้านบน</a>
</div>
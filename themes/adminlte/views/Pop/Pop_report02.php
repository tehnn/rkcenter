<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนประชากร แยกตามรายสถานบริการ'; ?></h4>

<style>
    .odd td {
        background-color: #B7F1C4;
    }
    .even td {
        background-color: #FFFFFF;
    }
</style>

<?php
CVarDumper::dump($model);
// นำเข้าส่วนที่ใช้ส่งออก excel
$dir = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($dir . '/js/excellentexport.js');

/* $this->breadcrumbs = array(
  'บริหารจัดการข้อมูล' => $this->createUrl('Site/index'),
  'รายงานตัวที่ 1'
  ); */
?>

<!-- ในส่วนของ กราฟ -->
<div class="well" style="width: 950px;">

    <?php
    $data = $model->getData();

    $hos = array();
    $val = array();
    $hosname = array();
    foreach ($data as $d) {
        array_push($hos, $d['HOSPCODE']);
        array_push($hosname, $d['hosname']);
        array_push($val, intval($d['total']));
    }

    $this->widget('booster.widgets.TbHighCharts', array(
        'htmlOptions' => array('style' => 'width: 900px;'),
        'options' => array(
            'colors' => array('#2E9AFE'),
            'credits' => array('enabled' => false),
            'chart' => array(
                'type' => 'column',
                //'type' => 'line',
                'plotBackgroundColor' => 'white',
                'plotBorderWidth' => 1,
                'plotShadow' => FALSE,
            ),
            'tooltip' => array(
                'valueSuffix' => ' คน'
            ),
            'title' => array(
                'text' => 'แสดงจำนวนประชากรในเขตรับผิดชอบ'
            ),
            'subtitle' => array(
                'text' => 'แยกตามสถานบริการ'
            ),
            'yAxis' => array(
                'title' => array('text' => 'จำนวน (คน)'),
                'min' => 0
            ),
            'xAxis' => array(
                'categories' => $hos,
            ),
            'series' => array(
                array(
                    'name' => 'จำนวนคน',
                    'data' => $val,
                )
            ),
        )
            )
    );
    ?>
</div>
<hr>
<div class="well" style="width: 950px;">
    <?php
    $this->widget('booster.widgets.TbGridView', array(
        'id' => 'Pop_report02',
        'dataProvider' => $model,
        'htmlOptions' => array('style' => 'width: 900px;'),
        'rowCssClass' => array('odd', 'even'),
        'template' => "{pager}\n{items}",
        //'filter' => $model,ใช้ไม่ได้ จะ error
//'summaryText' => 'Displaying {start}-{end} of {count} results.',
//'template' => "{summary}\n{pager}\n{items}",
        'columns' => array(
            array('name' => 'HOSPCODE',
                'header' => 'รหัสสถานบริการ',
                'htmlOptions' => array('style' => 'text-align: center; color:blue; font-weight: bold;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
            array('name' => 'hosname',
                'header' => 'ชื่อสถานบริการ',
                'htmlOptions' => array('style' => 'text-align: left; color:blue; font-weight: bold;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')),
            array('name' => 'total',
                'header' => 'จำนวนประชากรที่รับผิดชอบ',
                'type' => 'number', // format as number
                'htmlOptions' => array('style' => 'text-align: center; color:blue; font-weight: bold;'),
                'headerHtmlOptions' => array('style' => 'text-align: center;')
            // 'footer'=>'Total: ' . $model->getTotal($model->search()->getData(), 'total')
    ))));
    ?>
</div>
<br>
<!--ส่วนของการส่งออก excel-->
<a download = "Pop_report02.xls" href = "#" onclick = "return ExcellentExport.excel(this, 'Pop_report02', 'Pop_report02');" class = "btn btn-twitter">ส่งออก Excel</a>
<?php echo ' '; ?>
<a href = "#" class = "btn btn-tumblr">กลับไปด้านบน</a>
<?php
//echo Yii::app()->format->formatNumber("6632678.64857");
?>
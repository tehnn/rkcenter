<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนผู้พิการ แยกตามระดับความรุนแรง'; ?></h4>

<style>
    .odd td {
        background-color: #B7F1C4;
    }
    .even td {
        background-color: #FFFFFF;
    }
</style>

<!-- ในส่วนของ กราฟ -->
<div class="well" style="width: 750px;">

    <?php
    $data = $Disabilityr03s->getData();

    $hos = array();
    $val = array();
    foreach ($data as $d) {
        array_push($hos, $d['disabtype']);
        array_push($val, intval($d['total']));
    }

    $this->widget('booster.widgets.TbHighCharts', array(
        'htmlOptions' => array('style' => 'width: 700px;'),
        'options' => array(
            'colors' => array('#2E9AFE'),
            'credits' => array('enabled' => false),
            'chart' => array(
                'type' => 'column',
                'plotBackgroundColor' => 'white',
                'plotBorderWidth' => 1,
                'plotShadow' => FALSE,
            ),
            'title' => array(
                'text' => 'แผนภูมิแสดงจำนวนผู้พิการ'
            ),
            'subtitle' => array(
                'text' => 'แยกตามระดับความรุนแรง 1-7'
            ),
            'yAxis' => array(
                'title' => array('text' => 'จำนวนผู้พิการ (คน)'),
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
    <hr>

<div class="well" style="width: 700px;">
        <?php
// นำเข้าส่วนที่ใช้ส่งออก excel
        $dir = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile($dir . '/js/excellentexport.js');
        ?>

        <?php
//CVarDumper::dump($Disabilityr03s);
        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'Disabilityr03',
            'dataProvider' => $Disabilityr03s,
            'template' => "{pager}\n{items}",
            'htmlOptions' => array('style' => 'width: 500px;'),
            'rowCssClass' => array('odd', 'even'),
            //'htmlOptions' => array('style' => 'text-align: center'),
            'columns' => array(
                array('name' => 'disabtype',
                    //'htmlOptions' => array('style' => 'text-align: center; color:red;'),
                    'htmlOptions' => array('style' => 'text-align: center; color:blue; font-weight: bold;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
                array('name' => 'total',
                    //'header' => 'yyyy',
                    //'htmlOptions' => array('style' => 'text-align: center;'),
                    'htmlOptions' => array('style' => 'text-align: center;'),
                    'headerHtmlOptions' => array('style' => 'text-align: center;')),
        )));
        ?>
    </div>
    <!--ส่วนของการส่งออก excel-->
    <a download = "Disabilityr03.xls" href = "#" onclick = "return ExcellentExport.excel(this, 'Disabilityr03', 'Disabilityr03');" class = "btn btn-twitter">ส่งออก Excel</a>
    <!--csv แบบ, คอมม่า-->
    <!--<a download = "somedata.csv" href = "#" onclick = "return ExcellentExport.csv(this, 'Disabilityr03', ',');" class = "btn btn-info">CSV comma</a>
    <!--csv แบบ | ไปส์-->
    <!--<a download = "somedata.csv" href = "#" onclick = "return ExcellentExport.csv(this, 'Disabilityr03', '|');" class = "btn btn-warning">CSV pipe</a>
    -->
    <!--ส่วนของปุ่ม-->
    <?php echo ' '; ?>
    <a href = "#" class = "btn btn-tumblr">กลับไปด้านบน</a>
</div>




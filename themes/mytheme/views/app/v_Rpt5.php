<?php
$this->breadcrumbs = array(
    'บริหารจัดการข้อมูล' => $this->createUrl('App/Menu1'),
    'รายงานตัวที่ 5'
);
?>

<?php
$dir = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($dir . '/js/excellentexport.js');
?>


<a class="search-button btn btn-primary" >เงื่อนไข <i class="glyphicon glyphicon-question-sign"></i></a>

<div class="search-form form well" style="display:none; margin-top: 10px">
    <form method="POST">
        <?php
        $this->widget(
                'ext.booster.widgets.TbDatePicker', array(
            'name' => 'date1',
            'options' => array(
                'format' => 'yyyy-mm-dd',
                'language' => 'th',
                'autoclose' => true
            ),
        ));
        ?>
        <?php
        $this->widget(
                'ext.booster.widgets.TbDatePicker', array(
            'name' => 'date2',
            'options' => array(
                'language' => 'th',
                'format' => 'yyyy-mm-dd',
                'autoclose' => true
            )
        ));
        ?>
        <input type="hidden" name="data">

        <input type="submit" class="btn btn-default" value="ประมวลผล">
    </form>
</div>
<hr>

<table class="table table-striped table-hover" id="datatable">
    <thead>
        <tr>
            <th>#</th>
            <th>รหัสหน่วยงาน</th>
            <th>ชื่อหน่วยงาน</th>
            <th>จำนวนประชากร (คน)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($model as $key => $value):
            $i++;
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value['HOSPCODE'] ?></td>
                <td><?= $value['hosname'] ?></td>
                <td><?= $value['total'] ?></td>
            </tr>

            <?php
        endforeach;
        ?>
    </tbody>
</table>

<!--ส่วนของการส่งออก excel-->
<a download="somedata.xls" href="#" onclick="return ExcellentExport.excel(this, 'datatable', 'Sheet1');" class="btn btn-success">Excel</a>
<!--csv แบบ , คอมม่า-->
<a download="somedata.csv" href="#" onclick="return ExcellentExport.csv(this, 'datatable', ',');" class="btn btn-info">CSV comma/a>
<!--csv แบบ | ไปส์-->
<a download="somedata.csv" href="#" onclick="return ExcellentExport.csv(this, 'datatable', '|');" class="btn btn-warning">CSV pipe</a>
<!--ปุ่ม PDF-->
<a href="<?php echo $this->createUrl('App/Pdf'); ?>" target="_blank" class="btn btn-primary">PDF</a>
                                                              
   
    <script>
        $('.search-button').click(function() {

            $('.search-form').fadeToggle();
            //$('.search-form').slideToggle();
            return false;
        });
    </script>


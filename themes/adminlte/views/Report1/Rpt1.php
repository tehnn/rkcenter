<?php

//CVarDumper::dump($model);

$this->breadcrumbs = array(
    'บริหารจัดการข้อมูล' => $this->createUrl('Site/index'),
    'รายงานตัวที่ 1'
);
?>


<?php

$this->widget('booster.widgets.TbGridView', array(
    'id' => 'hospital-total-grid',
    'dataProvider' => $model,
    //'filter' => $model,ใช้ไม่ได้ จะ error
//'summaryText' => 'Displaying {start}-{end} of {count} results.',
    //'template' => "{summary}\n{pager}\n{items}",
    'columns' => array(
        array('name' => 'HOSPCODE',
            'header' => 'รหัสสถานบริการ'),
        array('name' => 'hosname',
            'header' => 'ชื่อสถานบริการ'),
        array('name' => 'total',
            'header' => 'จำนวนประชากร'),
)));
?>


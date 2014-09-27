<?php

//CVarDumper::dump($model);

$this->breadcrumbs = array(
'บริหารจัดการข้อมูล' => $this->createUrl('App/menu1'),
 'รายงานตัวที่ 2'
);
?>
<div class = "alert alert-success" role = "alert"><font size = "5">
<i class = "glyphicon glyphicon-user"></i> ประชากรรายสถานบริการ</font></div>

<?php
$this->widget('booster.widgets.TbGridView', array(
'id' => 'hospital-total-grid',
 'dataProvider' => $model,
 //'filter' => $model,ใช้ไม่ได้ จะ error
'summaryText' => 'Displaying {start}-{end} of {count} results.',
 'template' => "{summary}\n{pager}\n{items}",
));
?>


<?php

$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);
?>
<a href="<?php echo $this->createUrl('User/Create'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i> เพื่อผู้ใช้</a>

<?php

$this->widget('booster.widgets.TbGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'username',
        'password',
        'fullname',
        'officeid',
        'role',
        'lastlogin',
        /*
          'countlogin',
         */
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mycss.css" rel="stylesheet" />
        <title><?php echo CHtml::encode($this->pageTitle); ?> </a></title>

    </head>  
    <body>  

        <div>
            <nav class="nav navbar-custom" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $this->createUrl('Site/index'); ?> "> 
                            <i  class="glyphicon glyphicon-th-list"></i>
                            <?php echo Yii::app()->name; ?></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $this->CreateUrl('App/Menu1'); ?>"><i class="glyphicon glyphicon-refresh"></i>ข้อมูลหน่วยงาน</a></li>
                            <li><a href="<?php echo $this->CreateUrl('App/Menu2'); ?>"><i class="glyphicon glyphicon-refresh"></i>ข้อมูลทดสอบ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-refresh"></i> หมวดรายงาน<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo $this->CreateUrl('App/Menu1'); ?>"><i class="glyphicon glyphicon-file"></i> หมวดที่ 1 บริหารจัดการข้อมูล</a></li>
                                    <li><a href="<?php echo $this->CreateUrl('App/Menu2'); ?>"><i class="glyphicon glyphicon-file"></i> หมวดที่ 2 ทรัพยากรสาธารณสุข</a></li>
                                    <li><a href="<?php echo $this->CreateUrl('App/Menu3'); ?>"><i class="glyphicon glyphicon-file"></i> หมวดที่ 3 กิกรรมรักษาพยาบาล</a></li>
                                    <li><a href="<?php echo $this->CreateUrl('App/Menu4'); ?>"><i class="glyphicon glyphicon-file"></i> หมวดที่ 4 กิจกรรมส่งเสริมสุขภาพ</a></li>
                                    <li><a href="<?php echo $this->CreateUrl('App/Menu5'); ?>"><i class="glyphicon glyphicon-file"></i> หมวดที่ 5 กิกรรมดูแลผู้ป่วยและฟื้นฟูสมรรถภาพ </a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if(Yii::app()->user->GetState('role') == 'admin'): ?>
                            
                            <li><a href="#">เกี่ยวกับ</a></li>
                            <?php endif; ?>
                            
                            <?php if(Yii::app()->user->isGuest): ?>
                            <li><a href="<?php echo $this->createUrl('site/login'); ?>"><i class="glyphicon glyphicon-user">
                                    </i>
                                    เข้าใช้งาน <?php echo Yii::app()->user->name; ?>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(!Yii::app()->user->isGuest): ?>
                            <li>
                                <a href="<?php echo $this->createUrl('Site/Logout'); ?>">
                                    (<?php echo Yii::app()->user->getstate('fullname'); ?>)<i class="glyphicon glyphicon-cog"></i>ออกจากระบบ</a>
                                  <!-- (<?php echo Yii::app()->user->getstate('fullname'); ?>)<i class="glyphicon glyphicon-cog"></i>ออกจากระบบ</a> */
                            </li>
                            <?php endif; ?>
                        </ul>
                    <!-- /.navbar-collapse -->
                <!-- /.container-fluid -->
            </nav>
        </div>

        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('booster.widgets.TbBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?><!-- breadcrumbs -->
        <?php endif; ?>

        <?php echo $content; ?>

        <hr>
        <div class="well-small" align="center"><i class="glyphicon glyphicon-file"></i> สสจ.แพร่</div>

    </body>
</html>
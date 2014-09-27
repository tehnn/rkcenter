<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>RK-CENTER | ศูนย์ข้อมูลอำเภอร้องกวาง ยินดีต้อนรับ</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo $this->createUrl('Site/index'); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                RK-CENTER
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li >
                            <a href="main.html">
                                <i class="glyphicon glyphicon-star"></i> <span>ศูนย์ข้อมูลข่าวสารร้องกวาง</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/test.php">
                                <i class="glyphicon glyphicon-registration-mark"></i> <span>ประวัติ อ.ร้องกวาง</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>บริหารจัดการข้อมูล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <span>ข้อมูลประชากร</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo $this->createUrl('Pop/popr01'); ?>"><i class="fa fa-angle-double-right"></i>แยกรายกลุ่มอายุ</a></li>
                                        <li><a href="<?php echo $this->createUrl('Pop/popr02'); ?>"><i class="fa fa-angle-double-right"></i>รายตามสถาบริการ</a></li>
                                        <li><a href="<?php echo $this->createUrl('Pop/popr03'); ?>"><i class="fa fa-angle-double-right"></i>แยกตามรายปี</a></li>
                                    </ul>

                                <li class="treeview">
                                    <a href="#">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <span>ข้อมูลผู้พิการ</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo $this->createUrl('disability/Disabilityr01'); ?>"><i class="fa fa-angle-double-right"></i>แยกรายสถานบริการ</a></li>
                                        <li><a href="<?php echo $this->createUrl('disability/Disabilityr02'); ?>"><i class="fa fa-angle-double-right"></i>ตามสาเหตุความพิการ</a></li>
                                        <li><a href="<?php echo $this->createUrl('disability/Disabilityr03'); ?>"><i class="fa fa-angle-double-right"></i>ตามระดับความรุ่นแรง</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                <span> ทรัพยากรสาธารณสุข</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 5</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-plus-sign"></i> <span>กิจกรรมรักษาพยาบาล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 5</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-header"></i> <span>กิจกรรมส่งเสริมสุขภาพ</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 5</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-tint"></i> <span>กิจกรรมฟื้นฟูสุขภาพ</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> รายงานข้อที่ 5</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Link</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://www.google.co.th"><i class="fa fa-angle-double-right"></i> Google</a></li>
                                <li><a href="http://www.sasukrongkwang.com"><i class="fa fa-angle-double-right"></i> สาธารณสุขอำเภอร้องกวาง</a></li>
                                <li><a href="http://www.google.co.th"><i class="fa fa-angle-double-right"></i> Google</a></li>
                                <li><a href="http://www.google.co.th"><i class="fa fa-angle-double-right"></i> Google</a></li>
                                <li><a href="http://www.google.co.th"><i class="fa fa-angle-double-right"></i> Google</a></li>
                                <?php /* echo CHtml::link('linkkkk',"http://www.google.co.th"); ?> คำสั่งสร้าง link แบบ yii */ ?>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        ศูนย์ข้อมูลข่าวสารอำเภอร้องกวาง
                        <small> @ rk-center.com</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $this->createUrl('Site/index'); ?>"><i class="glyphicon glyphicon-registration-mark"></i> หน้าแรก</a></li>
                        <li class="active"> ข้อกำหนดการใช้งาน</li>
                    </ol>
                </section>

                <!-- Main content -->

                <section class="content">
                    <?php echo $content; ?>

                </section>


            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
<h4><i class="glyphicon glyphicon-user"></i><?php echo ' จำนวนประชากร แยกตามกลุ่มอายุและรายสถานบริการ'; ?></h4>

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
?>
<div class="well">
    <!--เริ่มต้นส่วนของการแสดงผล การเลือกเงื่อนไขการแสดง-->
    <!--<a class="search-button btn btn-primary" >เงื่อนไข <i class="glyphicon glyphicon-question-sign"></i></a> -->

    <div class="search-form form well" <!--style="display:none;--> margin-top: 50px">
         <form method="POST">
            <select class="btn btn-default" data-style="btn-primary" name="data2">
                <?php
                $i = 0;
                foreach ($model as $key => $value):
                    $i++;
                    ?>
                    <option value=<?php echo $value['hospcode'] ?>><?php echo $value['hospcode'] . " " . $value['hosname'] ?></option>
                    <?php
                endforeach;
                ?>
            </select>
            <input type="hidden" name="data">  <!-- -->
            <input type="submit" class="btn btn-default" value="แสดงเฉพาะสถานบริการที่เลือก">
        </form>
    </div>
    <!--สิ้นสุดส่วนของการแสดงผล การเลือกเงื่อนไขการแสดง-->

    <!--เริ่มต้นส่วนของการแสดงผล กราฟ-->

    <!--สิ้นสุดส่วนของการแสดงผล กราฟ-->

    <!--เริ่มต้นส่วนของการแสดงผล Grid-->
    <div class="well" style="width: 950px;">
        <table class="table table-striped table-hover" id="popr01">
            <thead>
                <tr>
                    <th>รหัสหน่วยงาน</th>
                    <th>จำนวนทั้งหมด</th>
                    <th>ช 0-1ปี</th>
                    <th>ญ 0-1ปี</th>
                    <th>ช 1-4ปี</th>
                    <th>ญ 1-4ปี</th>
                    <th>ช 5-9ปี</th>
                    <th>ญ 5-9ปี</th>
                    <th>ช 10-14ปี</th>
                    <th>ญ 10-14ปี</th>
                    <th>ช 15-19ปี</th>
                    <th>ญ 15-19ปี</th>
                    <th>ช 20-24ปี</th>
                    <th>ญ 20-24ปี</th>
                    <th>ช 25-29ปี</th>
                    <th>ญ 25-29ปี</th>
                    <th>ช 30-34ปี</th>
                    <th>ญ 30-34ปี</th>
                    <th>ช 35-39ปี</th>
                    <th>ญ 35-39ปี</th>
                    <th>ช 40-44ปี</th>
                    <th>ญ 40-44ปี</th>
                    <th>ช 45-49ปี</th>
                    <th>ญ 45-49ปี</th>
                    <th>ช 50-54ปี</th>
                    <th>ญ 50-54ปี</th>
                    <th>ช 55-59ปี</th>
                    <th>ญ 55-59ปี</th>
                    <th>ช 60ปีขึ้นไป</th>
                    <th>ญ 60ปีขึ้นไป</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // การสลับสีตาราง
                $tablecolor1 = '#B7F1C4';
                $tablecolor2 = '#FFFFFF';
                $i = 0;
                $LoopRow = 0;
                foreach ($model as $key => $value):
                    $i++;
                    $LoopRow++;
                    $bgcolor = (($LoopRow % 2) == 0) ? $tablecolor1 : $tablecolor2;
                    ?>
                    <tr bgcolor="<?php echo $bgcolor; ?>">
                        <td><?php echo $value['hospcode'] ?></td>
                        <td><?php echo number_format($value['total']) ?></td>
                        <td><?php echo $value['mless_01'] ?></td>
                        <td><?php echo $value['fless_01'] ?></td>
                        <td><?php echo $value['m01_04'] ?></td>
                        <td><?php echo $value['f01_04'] ?></td>
                        <td><?php echo $value['m05_09'] ?></td>
                        <td><?php echo $value['f05_09'] ?></td>
                        <td><?php echo $value['m10_14'] ?></td>
                        <td><?php echo $value['f10_14'] ?></td>
                        <td><?php echo $value['m15_19'] ?></td>
                        <td><?php echo $value['f15_19'] ?></td>
                        <td><?php echo $value['m20_24'] ?></td>
                        <td><?php echo $value['f20_24'] ?></td>
                        <td><?php echo $value['m25_29'] ?></td>
                        <td><?php echo $value['f25_29'] ?></td>
                        <td><?php echo $value['m30_34'] ?></td>
                        <td><?php echo $value['f30_34'] ?></td>
                        <td><?php echo $value['m35_39'] ?></td>
                        <td><?php echo $value['f35_39'] ?></td>
                        <td><?php echo $value['m40_44'] ?></td>
                        <td><?php echo $value['f40_44'] ?></td>
                        <td><?php echo $value['m45_49'] ?></td>
                        <td><?php echo $value['f45_49'] ?></td>
                        <td><?php echo $value['m50_54'] ?></td>
                        <td><?php echo $value['f50_54'] ?></td>
                        <td><?php echo $value['m55_59'] ?></td>
                        <td><?php echo $value['f55_59'] ?></td>
                        <td><?php echo $value['m60_more'] ?></td>
                        <td><?php echo $value['f60_more'] ?></td>
                    </tr>

                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <!--สิ้นสุดส่วนของการแสดงผล Grid-->
</div>
<!--ส่วนของการส่งออก excel-->
<a download = "popr01.xls" href = "#" onclick = "return ExcellentExport.excel(this, 'popr01', 'popr01');" class = "btn btn-twitter">ส่งออก Excel</a>
<!--สิ้นสุดส่วนของการส่งออก excel-->
<?php echo ' '; ?>
<a href = "#" class = "btn btn-tumblr">กลับไปด้านบน</a>

<!--ส่วนของ Script ที่ทำให้ fade ตรงเงื่อนไข-->
<script>
    $('.search-button').click(function () {

        $('.search-form').fadeToggle();
        //$('.search-form').slideToggle();
        return false;
    });
</script>
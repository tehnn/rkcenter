<div id="chart">
        พื้นที่แสดงผลแผนภูมิ
        <?php
        $this->widget(
                'booster.widgets.TbHighCharts', array(
            'options' => array(
                //ส่วนบนของ hichart ที่ต้องเปลี่ยนเป็น array
                'chart' => array(
                    'type' => 'column'
                ),
                'title' => array(
                    'text' => 'แผนภูมิแสดงจำนวนประชากร'
                ),
                //ส่วนล่างของ hichart ที่ต้องเปลี่ยนเป็น array
                'series' => array(
                    [
                        'data' => [1, 2, 3, 4, 5, 1, 2, 1, 4, 3, 1, 5]
                    ]
                )
            )
                )
        );
        ?>
</div>
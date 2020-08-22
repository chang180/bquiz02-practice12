    <fieldset>
        <?php
        $parent = $_GET['id'];
        $row = $Que->find($parent);
        $total = ($row['count'] == 0) ? 1 : $row['count'];
        ?>
        <legend>目前位置：首頁 > 問卷調查 > <span><?= $row['text']; ?></span></legend>
        <?php
        $opts = $Que->all(['parent' => $parent]);
        foreach ($opts as $o) {
            $rate = $o['count'] / $total;
        ?>
            <div style="display:flex">
                <div style="width:30%"><?= $o['text']; ?></div>
                <div style="width:<?= round(50 * $rate); ?>%;background:#ccc;height:20px;"></div>
                <div style="width:20%"><?= $o['count']; ?>票(<?= round(100 * $rate); ?>%)</div>

            </div>
        <?php
        }
        ?>
        <div class="ct"><button type="button" onclick="location.href='?do=que'">返回</button></div>
    </fieldset>
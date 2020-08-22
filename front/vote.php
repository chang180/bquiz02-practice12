<form action="api/vote.php" method="post">
    <fieldset>
        <?php
        $parent=$_GET['id'];
    $row=$Que->find($parent);
    ?>
        <legend>目前位置：首頁 > 問卷調查 > <span><?=$row['text'];?></span></legend>
        <?php
        $opts=$Que->all(['parent'=>$parent]);
        foreach($opts as $o){
            ?>
    <input type="radio" name="opt" value="<?=$o['id'];?>"><?=$o['text'];?><br>
    <?php
        }
        ?>
        <input type="hidden" name="parent" value="<?=$parent;?>">
    <div class="ct"><button>我要投票</button></div>
    </fieldset>
</form>
<form action="api/que.php" method="post">
    <fieldset>
        <legend>新增問卷</legend>
        問卷名稱<input type="text" name="que" id="que"><br id="more">
        選項<input type="text" name="opt[]"><button type="button" id="moreOpt">更多</button><br>
        <button>新增</button>|<button type="reset">清空</button>
    </fieldset>
</form>
<script>
    let el=`選項<input type="text" name="opt[]"><br>`;
    $("#moreOpt").on("click",function(){
        $("#more").after(el);
        });
</script>
目前位置：首頁>分類網誌 ><span id="head">健康新知</span><br>
<div class="contain" style="display:flex;justify-content:center;">
<fieldset style="width:30%">
    <legend>分類網誌</legend>
    <div id="1" onclick="getlist(1)">健康新知</div>
    <div id="2" onclick="getlist(2)">菸害防制</div>
    <div id="3" onclick="getlist(3)">癌症防治</div>
    <div id="4" onclick="getlist(4)">慢性病防治</div>
</fieldset>
<fieldset style="width:50%">
    <legend>文章列表</legend>
    <div id="info"></div>
</fieldset>
</div>
<script>
    getlist(1);
    function getlist(type){
        $("#head").text($("#"+type).text());
        $.post("api/getlist.php",{type},function(res){
            $("#info").html(res);
        })
    }
    function getpost(id){
$.post("api/getpost.php",{id},function(res){
    $("#info").html(res);
})
    }
</script>
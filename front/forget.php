請輸入信箱以查詢密碼<br>
<input type="text" name="email" id="email">
<div class="info"></div>
<button onclick="find()">尋找</button>
<script>
    function find() {
        $.post("api/chkemail.php", {
            "email": $("#email").val()
        }, function(res) {
            $(".info").text(res);
        })
    }
</script>
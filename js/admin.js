$(function() {
    //点击登录
    $("#submitbtn").click(function() {
        var $realname = $("#realname").val();
        var $passwd = $("#passwd").val();
        var $remeber = $("input[name='remeber']:checked").val();
        if (!$realname) {
            $("#realname").next(".adminspan2").html('请输入账号!');
            $("#realname").next(".adminspan2").css("color", "#f00");
            return;
        } else {
            $("#realname").next(".adminspan2").html('');
        }
        if (!$passwd) {
            $("#passwd").next(".adminspan1").html('请输入密码!');
            $("#passwd").next(".adminspan1").css("color", "#f00");
            return;
        } else {
            $("#passwd").next(".adminspan1").html('');
        }

        //请求数据
        $.ajax({
            url: './adminsubmit.php',
            type: 'POST',
            dataType: 'json',
            data: { realname: $realname, passwd: $passwd, remeber: $remeber },
            success: function(data) {
                console.log(data);
                if (data.result == 'no_realname') {
                    $("#realname").next(".adminspan2").html('账号错误!');
                    $("#realname").focus();
                } else if (data.result == 'no_passwd') {
                    $("#passwd").next(".adminspan1").html('密码错误!');
                    $("#passwd").focus();
                } else {
                    window.location.href = "./addcontent.php";
                }
            }
        });
    })
})

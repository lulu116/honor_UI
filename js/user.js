$(function() {
    //点击切换验证码
    $("#mycoder").click(function() {
        this.src = './coder.php?randoms=' + Math.random();
    });
    $("#mycoder1").click(function() {
            this.src = './coder1.php?randoms=' + Math.random();

        })
        //用户注册 
    $("#userregist").click(function() {
        var $username = $("#username").val();
        var $userpwd = $("#userpwd").val();
        var $usertel = $("#usertel").val();
        var $usercode = $("#usercode").val();
        var $reciveaddress = $("#reciveaddress").val();
        if (!$username) {
            $("#username").next('.registsub').html('账号必填');
            $("#username").next('.registsub').css("color", "#f00");
            $("#username").focus();
            return;
        } else {
            $("#username").next('.registsub').html('');
        }

        if (!$userpwd) {
            $("#userpwd").next('.registsub').html('密码必填');
            $("#userpwd").next('.registsub').css("color", "#f00");
            $("#userpwd").focus();
            return;
        } else {
            $("#userpwd").next('.registsub').html('');
        }

        if (!$usertel) {
            $("#usertel").next('.registsub').html('手机号必填');
            $("#usertel").next('.registsub').css("color", "#f00");
            $("#usertel").focus();
            return;
        } else {
            $("#usertel").next('.registsub').html('');
        }
        if (!$usercode) {
            $("#usercode").focus();
            return;
        }
        if (!$reciveaddress) {
            $("#reciveaddress").next('.registsub').html('地址必填');
            $("#reciveaddress").focus();
            $("#reciveaddress").next('.registsub').css("color", "#f00");
            return;
        } else {
            $("#reciveaddress").next('.registsub').html('');
        }

        //发送 ajax请求
        $.ajax({
            url: './userregistsubmit.php',
            type: 'POST',
            dataType: 'json',
            data: {
                username: $username,
                userpwd: $userpwd,
                usertel: $usertel,
                usercode: $usercode,
                reciveaddress: $reciveaddress
            },
            success: function(data) {
                console.log(data);
                if (data.result == 'no_coder') {
                    alert("验证码错误，请重新输入!");
                    $("#usercode").focus();
                } else if (data.result == 'error') {
                    alert("注册失败");
                } else {
                    alert("注册成功");
                    location.href = "./login.php";
                }
            }
        });


    })


    //用户登录
    $("#userloginsubmit").click(function() {
        var $username = $("#username").val();
        var $userpwd = $("#userpwd").val();
        var $usercode = $("#usercode").val();
        var $remember = $("input[name='remember']:checked").val();
        if (!$username) {
            $("#username").next('.userlogin').html('账号必填');
            $("#username").next('.userlogin').css("color", "#f00");
            $("#username").focus();
            return;
        } else {
            $("#username").next('.userlogin').html('');
        }

        if (!$userpwd) {
            $("#userpwd").next('.userlogin').html('密码必填');
            $("#userpwd").next('.userlogin').css("color", "#f00");
            $("#userpwd").focus();
            return;
        } else {
            $("#userpwd").next('.userlogin').html('');
        }
        if (!$usercode) {
            $("#usercode").focus();
            return;
        }
        $.ajax({
            url: './userloginsubmit.php',
            type: 'POST',
            dataType: 'json',
            data: { username: $username, userpwd: $userpwd, usercode: $usercode, remember: $remember },
            success: function(data) {
                console.log(data);
                if (data.result == 'no_coder') {
                    alert("验证码错误，请重新输入!");
                    $("#usercode").focus();
                } else if (data.result == 'no_username') {
                    alert("请输入正确的用户名");
                } else if (data.result == 'no_userpwd') {
                    alert("请输入正确的密码");
                } else {
                    alert("登录成功，即将跳转到华为主页")
                    location.href = "./index.html";
                }
            }
        })

    })

})

$(function() {
    $(".close").click(function() {
        $(this).parent().parent().remove();
    })
    $("body").css("backgroundColor", "#fff");
    $("#acount").click(function() {
        $(".contain").hide();
        $(".order").show();
        $("body").css("backgroundColor", "#f5f5f5");
        $("#detailpro").css({ "backgroundPosition": "0 -41px" });
    })
    $("#addresspan").click(function() {
        $("#cover").show();
        $("#personads").show();
        $(".cancle").click(function() {
            $("#personads").hide();
            $("#cover").hide();
        });
    })


    $("body").css("backgroundColor", "#fff");
    clicks();
    setInterval(function() {
        daojishi("2017/9/27 19:32:00");
    }, 1000);

    function clicks() {
        $(".close").click(function() {
            $(this).parent().parent().remove();
        })
        $("#acount").click(function() {
            $(".contain").hide();

            $(".order").show();
            $("body").css("backgroundColor", "#f5f5f5");
            $("#detailpro").css({ "backgroundPosition": "0 -41px" });
        })
        $("#addresspan").click(function() {
                $("#cover").show();
                $("#personads").show();
                $(".cancle").click(function() {
                    $("#personads").hide();
                    $("#cover").hide();
                });
            })
            /* $(".handup").click(function() {
                 var cfi = confirm("您确认要提交订单？");
                 if (!cfi) {
                     return;
                 } else {
                     $("#detailpro").css({ "backgroundPosition": "0 -72px", "marginTop": "20px", "backgroundSize": "809px 300px", "marginLeft": "92px" });
                     $(".order").hide();
                     $(".header").css({ "background": "#fff" });
                     $(".fhonor").css({ "color": "#282828" });
                     $(".fhonor").html("结算页");
                     $(".subspan").children().show();
                     $(".foot_one").css("bottom", "-39%");
                     $(".radio input").attr("name", "sup");
                 }
             })*/
    }

    function daojishi(targettime) {
        var now = new Date();
        var targettime = new Date(targettime);
        var value = targettime.getTime() - now.getTime();
        var day = parseInt(value / 1000 / 60 / 60 / 24);
        var hour = parseInt(value / 1000 / 60 / 60 % 24);
        var minute = parseInt(value / 1000 / 60 % 60);
        var second = parseInt(value / 1000 % 60);
        var time = day + "天" + hour + "时" + minute + "分" + second + "秒";
        $("#span1").html(time);
        $("#span1").css({ "color": "#ca141d", "fontSize": "14px" });
    }






    //加入购物车
    $("#caradd").click(function() {
        if (!confirm("您确定要加入购物车吗?")) {
            return;
        }
        var productid = $(this).attr('productid');
        $.ajax({
            url: './addshoptocar.php',
            type: 'POST',
            dataType: 'json',
            data: { productid: productid }, //自定义的name,
            success: function(data) {
                if (data.result == 'no_login') {
                    alert("亲，您还没登录！");
                    window.location.href = './login.php';
                } else if (data.result == 'success') {
                    window.location.href = './car.php';
                } else {
                    alert("加入购物车失败了");
                }
            }
        })
    })


    //提交订单
    $("#submitorder").click(function() {
        if (!confirm("您确定要提交订单吗?")) {
            return;
        }
        var submitid = $(this).attr('submitid');
        $.ajax({
            url: './submitorder.php',
            type: 'POST',
            dataType: 'json',
            data: { submitid: submitid }, //自定义的name,
            success: function(data) {
                if (data.result == 'success') {
                    window.location.href = './pay.php';
                } else {
                    alert("加入购物车失败了");
                }
            }
        })
    })


    //点击删除购物车信息
    $('.delcar').click(function() {
        if (!confirm('你确定要删除该信息吗？')) {
            return;
        }
        var $car_id = $(this).attr('car_id');
        console.log($car_id);
        $.ajax({
            url: 'delcar.php',
            type: 'POST',
            dataType: 'json',
            data: { car_id: $car_id },
            success: function(data) {
                /* body... */
                if (data.result == 'success') {
                    alert('删除成功！');
                    window.location.reload(); //刷新当前页面
                } else {
                    alert('删除失败！');
                }
            }
        });
    });

})

$(function() {
    //点击添加到产品表
    $("#addcontent").click(function() {
        var $productname = $("#productname").val();
        var $productprice = $("#productprice").val();
        var $assess = $("#assess").val();

        if (!$productname) {
            $("#productname").next(".help-inline").html("请输入标题").css("color", " rgb(236, 24, 24)");
            return;
        } else {
            $("#productname").next(".help-inline").html("");
        }

        if (!$productprice) {
            $("#productprice").next(".help-inline").html("请输入价格").css("color", " rgb(236, 24, 24)");
            return;
        } else {
            $("#productprice").next(".help-inline").html("");
        }
        $.ajax({
            url: './addcontentproduct.php',
            type: 'POST',
            dataType: 'json',
            data: $('#addcotentproducts').serialize(),
            success: function(data) {
                console.log(data);
                if (data.result == 'success') {
                    alert("操作成功了");
                    window.location.href = "./index.html";
                } else {
                    alert("操作失败");
                }
            }
        });

    })
})

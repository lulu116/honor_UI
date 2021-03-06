<!DOCTYPE html>
<html>

<head>
    <title>产品列表页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script src="./js/jquery.min.js"></script>
    <script src="./js/car.js"></script>
    <script type="text/javascript" src="js/memenu.js"></script>
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="col-md-4" style="margin-left: -40px;">
                    <a href="index.html"><img src="images/detail_logo.png" alt=""></a>
                </div>
                <div class="col-md-4 world">
                    <ul>
                        <li>
                            <select class="in-drop">
                                <option>荣耀畅玩分类</option>
                                <option>华为 G系列</option>
                                <option>华为畅享系列</option>
                                <option>合约机</option>
                                <option>HUAWEI nova系列</option>
                                <option>HUAWEI P系列</option>
                            </select>
                        </li>
                        <li>
                            <select class="in-drop1">
                                <option>屏幕尺寸</option>
                                <option>7.0英寸</option>
                                <option>6.8英寸</option>
                                <option>6.6英寸</option>
                                <option>6.0英寸</option>
                                <option>5.7英寸</option>
                                <option>5.5英寸</option>
                                <option>5.2英寸</option>
                                <option>5.0英寸</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 header-left" style="margin-left: 30px;">
                    <?php
                        if($_SESSION['username']){
                    ?>
                        <p class="log"><a href="./regist.php">欢迎您</a>
                            <a href="./login.php">
                                <?=$_SESSION['username']?>
                            </a>
                        </p>
                        <?php                
                    }else {
                        echo '<p class="log"><a href="./regist.php">注册</a><a href="./login.php">登录</a></p>';
                    }
                   ?>
                        <div class="cart box_1">
                            <a href="./car.php">
                                <h3> <div class="total">
                            <span class="simpleCart_total"></span></div>
                            <img src="images/cart.png" alt=""/></h3>
                            </a>
                            <p><a href="./car.php" class="simpleCart_empty">我的购物车</a></p>
                        </div>
                        <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="col-md-2 number ">
                    <span><a href="./index.html">首页</a>></span>
                    <span><a href="./list.php">列表</a>></span>
                    <span><a href="./car.php">购物车</a></span>
                </div>
                <div class="col-md-2 search col-md-push-8">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                </div>
                <div class="clearfix"> </div>
                <!---pop-up-box---->
                <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
                <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login">
                            <input type="submit" value="">
                            <input type="text" id="txt11" value="更多产品..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                        </div>
                        <p> 商品名</p>
                    </div>
                    <div id="mytxt"></div>
                    <script>
                    var input = document.querySelector("#txt11");
                    var div = document.querySelector("#mytxt");

                    //ui
                    function show(data) {
                        console.log(data);

                        var ps = document.querySelectorAll("p");

                        for (var key in data.s) {
                            var p = document.createElement("p");
                            p.innerHTML = data.s[key];
                            p.style.textAlign = "left";
                            div.appendChild(p);
                        }

                        for (var i = 0; i < ps.length; i++) {
                            ps[i].remove();
                        }

                    }

                    input.oninput = function() {
                        //1.获取input框中的值
                        var input_value = this.value;
                        //2.动态创建脚本标签，
                        var script1 = document.createElement("script");
                        script1.src = "http://suggestion.baidu.com/su?wd=" + input_value + "&cb=show";
                        document.body.appendChild(script1);
                    }
                    </script>
                </div>
                <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });


                });
                </script>
                <!---->
            </div>
        </div>
    </div>

<?php
    require './listhead.php';
    require './common/user.common.php';
    //把所有添加 的图片遍历出来 
    $listarray = $db->getDatas('product','productprice,productname,product_img','recommend=1');
?>
    <!--content-->
    <div class="products">
        <div class="container">
            <h1>产品列表</h1>
            <div class="col-md-12">
                <?php
                        foreach ($listarray as $key => $listvalue) {
                          
                       
                    ?>
                    <div class="col-md-4 col-md3" style="margin-bottom: 20px;font-size: 15px;color:#666;">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?=substr($listvalue['product_img'], 1)?>" alt="" / style="width:156px;height: 270px">
                            </a>
                            <h3><a href="single.html"><?=$listvalue['productname']?></a></h3>
                            <div class="price">
                                <h5 class="item_price" style="color:#f00;font-size: 13px;margin-top: 10px">¥<?=$listvalue['productprice']?></h5>
                                <a href="#" class="item_add">加入购物车</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                   
                    
                    <?php
                        }
                    ?> 
              
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->
    <!--footer-->
<?php
    require './listfoot.php';
?>

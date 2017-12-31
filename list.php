<?php
    require './common/user.common.php';
    require './listhead.php';
    //把所有添加 的图片遍历出来 
    $listarray = $db->getDatas('product','product_id,productprice,productname,product_img','recommend=1');
?> 
    <!--content-->
    <div class="products">
        <div class="container">
            <h1>产品列表</h1>
            <div class="col-md-12">
                <?php
                        foreach ($listarray as $key => $listvalue) {
                        $imgarr = explode(',', $listvalue['product_img']);
                       
                    ?>
                    <div class="col-md-4 col-md3" style="margin-bottom: 20px;font-size: 15px;color:#666;">
                        <div class="col-md1 simpleCart_shelfItem" style="width:340px;height: 460px;">
                            <a href="./productsingle.php?product_id=<?=$listvalue['product_id']?>">
                                <img class="img-responsive" src="<?=$imgarr[1]?>" title="<?$listvalue['productname']?>" style="width:186px;height: 300px;margin-bottom: 30px">
                            </a>
                            <h3><a href="./productsingle.php?product_id=<?=$listvalue['product_id']?>" style=";"><?=$listvalue['productname']?></a></h3>
                            <div class="price" style="margin-top: 20px;">
                                <h5 class="item_price" style="color:#f00;font-size: 13px;margin-top: 10px">¥<?=$listvalue['productprice']?></h5>
                                <a href="./car.php?product_id=<?=$listvalue['product_id']?>" class="item_add">加入购物车</a>
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

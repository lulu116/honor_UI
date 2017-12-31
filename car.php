<?php 
        require './common/user.common.php';
        require './carhead.php';
        $oneshop = $db->getDatas('car','car_id,product_id,product_num','user_id='.$_SESSION['user_id']);
        foreach ($oneshop as $key => $carshopvalue) {
           $onecarshop = $db->getOneData('product','productname,discover,product_img','product_id='.$carshopvalue['product_id']);
           $oneshop[$key]['carshop'] = $onecarshop;
        }
 ?>
        <div class="row process">
                    <!-- bg_payorder_1.png -->
                    <div class='col-md-8  col-md-push-3 ' id="detailpro" style="top:20px;height: 70px;left:20%;">
                    </div>
                </div>
            </div>
        <div class="row contain" style="width:100%">
            <h6 class="totalnum">共<?=count($oneshop);?>件商品</h6>
            <div class='col-md-9 bt-danger car-contain'>
                <!-- 没有选购商品显示的板块 -->
                <div style="display: none;" class="emp">
                    <h3>你的购物车还是空的，赶紧行动吧！</h3>
                    <img src="images/empty_icon.jpg" alt="" class="note">
                </div>
                <!-- 选购商品了显示的板块 -->
                <table class='table  table-bordered'>
                    <tr>
                        <th style="text-align: center;line-height: 50px;">商品示例图</th>
                        <th style="text-align: center;line-height: 50px;">商品</th>
                        <th style="text-align: center;line-height: 50px;">单价</th>
                        <th style="text-align: center;line-height: 50px;">数量</th>
                        <th style="text-align: center;line-height: 50px;">小计</th>
                        <th style="text-align: center;line-height: 50px;">操作</th>
                    </tr>
                     <?php 
                            foreach ($oneshop as $key => $value) {
                        ?>
                    <tr>
                      
                        <td style="text-align: center;line-height: 150px;"><img src="<?=explode(',',$value['carshop']['product_img'])[1]?>" alt="" style="width:150px;height: 150px;"></td>
                       
                        <td style="text-align: center;line-height: 150px;"><?=$value['carshop']['productname']?></td>
                        <td style="text-align: center;line-height: 150px;"><?=$value['carshop']['discover']?>.00元</td>
                        <td style="text-align: center;line-height: 150px;"><?=$value['product_num']?></td>
                        <td style="text-align: center;line-height: 150px;">共<?=$value['carshop']['discover'] *$value['product_num'] ?>.00元</td>
                        <td style="text-align: center;line-height: 150px;">
                              <button type="button" car_id="<?=$value['car_id'];?>" class="btn delcar" style="background: #f60;color: #fff;">删除</button>
                        </td>
                    </tr>
                   <?php 
                    }
                    ?>
                    <tr>
                        <td colspan="6">
                            <div class="mylast">
                                <a href="./list.php"><span class="btn" id="acount" style="margin-left: -530%;">继续购物</span></a>
                                 <a href="./order.php"><span class="btn" id="acount"  style="margin-left: -300%;">立即结算</span></a>
                            </div>
                        </td>
                    </tr>
                </table>
               
            </div>
           
        </div>
        
<?php 
require './carfoot.php';
?>
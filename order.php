<?php 
	 require './common/user.common.php';
     require './carhead.php';
 ?>
 <div class="row process">
            <!-- bg_payorder_1.png -->
            <div class='col-md-8  col-md-push-2 ' id="detailpro" style="top:20px;height: 70px;background-position: 0px -41px;height: 44px!important;background-size: 553px 298px;">
            </div>
        </div>
    </div>
<div class='row order' style="width: 100%">
    <div class="col-md-10 " style="height: 250px; margin-left:220px ;top:50px;padding: 20px;background: #fff">
        <h4>收货地址</h4>
        <div id="address" style="border: 1px dashed #000; width: 414px ;height:143px;text-align: center;line-height: 143px ;background: #fff">
            <span id="addresspan">+添加收货地址</span>
        </div>
    </div>
    <div class="col-md-10 " style="height: 160px; margin-left:220px ;margin-top:70px;padding: 20px;;background: #fff">
        <h4>发票信息 <span class="little-font">注：如果商品由第三方卖家销售，发票内容由其卖家决定，发票由卖家开具并寄出</span></h4>
        <span class="attr">电子普通发票 个人</span>
    </div>
    <div class="col-md-10 " style="height: auto; margin-left:220px ;margin-top:20px;padding: 20px;background: #fff">
        <div class="shoplist">
            <a href="#"><img src="" alt="从数据库获取图片"></a>
            <ul>
                <li>商品名，颜色，型号</li>
                <li>数量</li>
                <li>小计</li>
            </ul>
        </div>
        <div class="totalprcie" style="background-color: #F6F6F6">
            <li id="money">商品总金额： ¥447.00 </li>
            <li id="fare">运费： ¥0.00 </li>
            <li id="totalmoney">结算金额： ¥447.00</li>
            <li id="handupli">
               <a href="./pay.php"><button class="btn handup" id="submitorder"  submitid="orderid">提交订单</button></a> 
            </li>
        </div>
    </div>
</div>
<!-- 遮罩 -->
<div id="cover"></div>
<div id="personads">
    <h4 class="add"> 添加地址</h4>
    <form action="post" style="position:absolute; left: 4% ; width: 92%; height: 92%">
        <table class="adstab" style="position: absolute;width: 100%;height: 100%">
            <tbody>
                <tr>
                    <th>收货人：</th>
                    <td>
                        <input type="text" id="username" name="username" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>收货地址：</th>
                    <td>
                        <input type="text" placeholder="请选择省-市-区-街道" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="" id="" cols="89" rows="3" placeholder="如选择不到您的地区，请在此处详细描述" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <th> 手机号码：</th>
                    <td style="display:inline-block;width: 30%">
                        <input type="tel" id="tel" class="form-control">
                    </td>
                    <th> 备用电话：</th>
                    <td style="display:inline-block;width: 39% ;">
                        <input type="text" placeholder="固话或其他手机号码" class="form-control">
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>
                        <input type="button " class="btn btn-default " value="保存并使用 ">
                        <input type="button " class="btn btn-default cancle" value="取消 " style="margin-left:20px;">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
 <?php 
	 require './carfoot.php';
 ?>
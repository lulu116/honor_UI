<?php 
    require './head.php';
    //获取全部的一级内容
    //$catelist = $db->getDatas('cate', '*', 'parent_cate_id=0');
    // var_dump($catelist);
?>
   <!-- 编辑器使用的==配置文件 start -->
   <script type="text/javascript" src="public/plug/ue/ueditor.config.js"></script>
   <script type="text/javascript" src="public/plug/ue/ueditor.all.js"></script>
  <!--  编辑器使用的==配置文件 end -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
           
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid" >
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                       
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal" id="addcotentproducts">
                                <div class="control-group">
                                    <label class="control-label">标题</label>
                                    <div class="controls">
                                        <input type="text" id="productname" name="productname" class="span6"/>
                                       <span class="help-inline " style="color:rgba(43, 34, 34, 0.48)">必填</span>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">介绍</label>
                                    <div class="controls">
                                        <input type="text" id="introduced" name="introduced" class="span6"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">价格</label>
                                    <div class="controls">
                                        <input type="text" id="productprice" name="productprice" class="span6 "/>
                                       <span class="help-inline text-danger" style="color:rgba(43, 34, 34, 0.48)">必填</span>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">折扣</label>
                                    <div class="controls">
                                      <input type="text" id="discover" name="discover" class="span6 " />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">评价</label>
                                    <div class="controls">
                                        <input type="text" id="assess" name="assess" class="span6 " />
                                        
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">推荐</label>
                                    <div class="controls" style="font-size: 13px;margin-top: 1px;">
                                        <input type="checkbox" id="recommend" name="recommend" value="0" />
                                        推荐到首页
                                        <input type="checkbox" id="recommend" name="recommend" value="1" />
                                        推荐到列表页 
                                      
                                       
                                    </div>
                                </div>

                                <div class="control-group">
                                   <label class="control-label">图片</label>
                                    <div class="controls">
                                      <button type="button" id="j_upload_img_btn" class="btn btn-info">多图上传</button>
                                    <!-- 点击要上传后的图片列表 -->
                                    <ul id="upload_img_wrap"  name="product_img" style="border:1px solid #ccc"></ul>
                                        <!-- 传图片地址值用的 -->
                                    <input type="hidden" id="product_img" name="product_img" >

                                     <!-- 加载编辑器的容器：用来上传图片的，必须要，不然上传的图片会追加到上面的编辑器里面 -->
                                    <ul id="uploadEditor">
                                       
                                    </ul>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">详情</label>
                                    <div class="controls">
                                       <textarea name="detail" id="detail" class="span8"></textarea>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                
                                 <div style="margin-left: 14%;">
                                    <button type="button" class="btn btn-success" id="addcontent" >添加</button>
                                    <button type="reset" class="btn">重置</button>
                                </div>
                               
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
         <!-- END PAGE CONTAINER-->
      </div>
   </div>
    <script type="text/javascript">
        var ue = UE.getEditor('detail'); //detail是需要加载编辑器的id


        //==========================================================        
        // 如何单独上传图片功能
        // 监听多图上传和上传附件组件的插入动作
        // 这里需要实例化一个新的编辑器，防止和上面的编辑器的内容冲突
        var uploadEditor = UE.getEditor("uploadEditor", {
            isShow: false,
            focus: false,
            enableAutoSave: false,
            autoSyncData: false,
            autoFloatEnabled:false,
            wordCount: false,
            sourceEditor: null,
            scaleEnabled:true,
            toolbars: [["insertimage", "attachment"]]
        });
        uploadEditor.ready(function () {
            uploadEditor.addListener("beforeInsertImage", _beforeInsertImage);
        });

        // 自定义按钮绑定触发多图上传和上传附件对话框事件
        document.getElementById('j_upload_img_btn').onclick = function () {
            var dialog = uploadEditor.getDialog("insertimage");
            dialog.title = '多图上传';
            dialog.render();
            dialog.open();
        };

        // 多图上传动作
        function _beforeInsertImage(t, result) {
            var imageHtml = '';
            var imgval = '';
            for(var i in result){
                imageHtml += '<li><img src="'+result[i].src+'" alt="'+result[i].alt+'" height="150"></li>';
                imgval +=','+ result[i].src;
            }
            document.getElementById('upload_img_wrap').innerHTML = imageHtml;
            //如果需要保存图片地址到数据，还需要把所有的图片地址作为输入值
            //具体怎么设置看项目需求，我这里只是举个例子
            document.getElementById('product_img').value = imgval;
        }
    </script>
    <?php 
        require './foot.php';
    ?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>特色管理 - McGins English后台管理</title>
    <meta name="description" content="这是一个form页面">
    <meta name="keywords" content="form">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <base href="<?php echo site_url();?>">

    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>


<div class="am-cf admin-main">
    <!-- sidebar start -->
    <?php include 'admin-sidebar.php'; ?>

    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">编辑特色信息</strong> /
                    <small>form</small>
                </div>
            </div>

            <hr>

            <div class="am-tabs am-margin" data-am-tabs>
                <ul class="am-tabs-nav am-nav am-nav-tabs">
                    <li class="am-active"><a href="#tab2">特色信息</a></li>
                </ul>

                <div class="am-tabs-bd">

                    <div class="am-tab-panel am-fade am-in am-active" id="tab2">
                        <form class="am-form" action="admin/update_index" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="features_id" value="<?php echo $index -> features_id;?>">
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">当前图标</div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                    <input type="hidden" name="icon_old_url" value="<?php echo $index -> features_picture ;?>">
                                    <img src="<?php echo $index -> features_picture ?>" alt="" class="img-circle img-responsive center-block" width="70px" height="70px">
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-4 am-text-right">新上传图标</div>
                                <div class="am-u-sm-8 am-u-md-8 am-u-end">
                                    <!--文件上传-->
                                    <div class="am-form-group am-form-file">
                                        <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                            <i class="am-icon-cloud-upload"></i> 选择要上传的图标</button>
                                        <input id="doc-form-file" type="file" multiple name="icon">
                                        <!--图片预览-->
                                        <br/>
                                        <small class="am-badge am-badge-success am-radius">预览图</small>
                                        <div id="imgdiv"><img id="imgShow" width="70px" height="70px" /></div>
                                        <!--图片预览-->
                                    </div>
                                    <div id="file-list"></div>
                                    <!--文件上传-->
                                </div>
                            </div>


                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    特色标题
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" name="features_title_chn" value="<?php echo $index -> features_title_chn;?>">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    特色内容
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <textarea name="features_chn" id="" cols="30" rows="10"><?php echo $index -> features_chn;?></textarea>
<!--                                <input type="text" class="am-input-sm" name="features_chn" value="--><?php //echo $index -> features_chn;?><!--">-->
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填</div>

                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    标题英文
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" name="features_title_en" value="<?php echo $index -> features_title_en;?>">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    英文内容
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
<!--                                    <input type="text" class="am-input-sm" name="features_en" value="--><?php //echo $index -> features_en;?><!--">-->
                                    <textarea name="features_en" id="" cols="30" rows="10"><?php echo $index -> features_en;?></textarea>
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交编辑</button>
                                    <button type="button" class="am-btn am-btn-primary am-btn-xs" id="btn-return">放弃编辑</button>
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>

        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
  <script src="js/uploadPreview.min.js"></script>

<script>
    $('#btn-return').on('click', function(){
        if(confirm('您确定要放弃所有的信息吗？')){
            location.href="admin/course_mgr";
        }
    });
</script>
<!--图片上传-->
<script src="js/uploadPreview.min.js"></script>
<script>
    $(function() {
        $('#doc-form-file').on('change', function() {
            var fileNames = '';
            $.each(this.files, function() {
                fileNames += '<span class="am-badge">' + this.name + '</span> ';
            });
            $('#file-list').html(fileNames);
        });
    });
</script>
<!--图片上传-->
<!--图片上传预览-->
<script>
    window.onload = function () {
        new uploadPreview({ UpBtn: "doc-form-file", DivShow: "imgdiv", ImgShow: "imgShow" });
    }
</script>
<!--图片上传预览-->


</body>
</html>

<?php

use yii\helpers\Url;
?>

<div class="row separateFromNextBlock">
    <div class="col-sm-7">
        <div class="btn-group">
            <?php foreach ($allMediaType as $key => $mo){ ?>
                <a class="btn <?= $mediaType == $key ? 'btn-primary': 'btn-white' ;?>" href="<?= Url::to(['index', 'type' => $key])?>"><?= $mo ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="col-sm-3">
        <?php if($mediaType != 'news'){ ?>
        <form action="" method="get" class="form-horizontal" role="form" id="form">
            <div class="input-group m-b">
                <input type="text" class="form-control" name="keywords" placeholder="<?= $keywords ? $keywords : '请输入关键字'?>"/>
                <input type="hidden" name="type" value="<?= $mediaType ?>">
                <span class="input-group-btn"><button class="btn btn-white"><i class="fa fa-search"></i> 搜索</button></span>
            </div>
        </form>
        <?php } ?>
    </div>
    <div class="col-sm-2">
        <div class="ibox-tools" style="margin-top: 4px">
            共 <strong class="text-danger"><?= $count ?></strong> 条
            <a class="btn btn-primary btn-xs" id="getAllAttachment">
                <i class="fa fa-cloud-download"></i> 同步
            </a>
            <?php if($mediaType == 'news'){ ?>
                <a id="createPostBtn" class="btn btn-primary btn-xs">
                    <i class="fa fa-plus"></i> 创建
                </a>
            <?php }else{ ?>
                <a class="btn btn-primary btn-xs" href="<?= Url::to([ $mediaType . '-add','model' => 'perm'])?>"  data-toggle='modal' data-target='#ajaxModal'>
                    <i class="fa fa-plus"></i>  创建
                </a>
            <?php } ?>
        </div>
    </div>
</div>


<script>
    // 获取资源
    $("#getAllAttachment").click(function(){
        rfAffirm('同步中,请不要关闭当前页面');
        sync();
    });

    // 正式同步
    function sync(offset = 0,count = 20){
        $.ajax({
            type:"get",
            url:"<?= Url::to(['get-all-attachment','type' => $mediaType])?>",
            dataType: "json",
            data: {offset:offset,count:count},
            success: function(data){
                if (data.code == 200) {
                    var data = data.data;
                    sync(data.offset,data.count);
                } else if(data.code == 201) {
                    rfAffirm(data.message);
                    window.location.reload();
                } else {
                    rfAffirm(data.message);
                }
            }
        });
    }
</script>
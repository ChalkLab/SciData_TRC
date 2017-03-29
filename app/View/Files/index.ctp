<?php
//pr($pubs);exit;
$i=1;$size=3;
?>
<h2>Files <a href="add" class="btn btn-success btn-sm pull-right">Add File</a></h2>
<div class="row">
    <div class="panel-group" id="accordion">
        <?php foreach($pubs as $title=>$files) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
                        <?php echo $title; ?></a>
                </h4>
            </div>
            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse<?php if($i==1) { echo " in"; }; ?>">
                <div class="list-group" style="max-height: <?php echo ($size*40)+2; ?>px;overflow-y: scroll;">
                    <?php
                    foreach($files as $id=>$title) {
                        echo $this->Html->link($title,"/files/view/".$id,["title"=>$title,"class"=>"list-group-item"]);
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php $i++; } ?>
    </div>
</div>
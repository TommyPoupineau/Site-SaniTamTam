<?php 
    $class1='';
    $class2 = '';
    if(isset($node->field_blog_sidebar) && !empty($node->field_blog_sidebar)){
        $sidebar_blog = $node->field_blog_sidebar['und'][0]['value'];
    }else{
        $sidebar_blog ='none';
    }
    if($sidebar_blog == 'right'){
        $class1 = 'contact-form-container';
        $class2 = 'no-after';
    }else{
        $class1 = 'contact-form-container-left';
        $class2 = 'no-before';
    }

?>
<div class="col-md-12">
    <ol class="comment-list clearfix">
        <?php print render($content['comments']); ?>
    </ol>
</div>
<!-- LEAVE A COMMENT	-->
<div class="col-md-12">
    <div class=" m-top-50">
        <!-- TITLE -->
        <div class="title-lines <?php if($class2)print $class2; ?>">
            <div class="title-block">
                <?php print 'Laissez un commentaire'; ?>
            </div>
        </div>
        <!-- CONTACT FORM -->
        <div class="gray-bg-container m-top-min-35 m-bot-30">
            <div class="<?php if($class1)print $class1; ?> comment-form">
                <!-- COMMENT FROM -->
                <?php print str_replace('resizable', '', render($content['comment_form'])); ?>
            </div>
        </div>
    </div>
</div>
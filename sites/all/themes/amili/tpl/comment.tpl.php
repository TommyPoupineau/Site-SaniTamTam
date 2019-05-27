<?php $no_avatar = base_path().path_to_theme().'/images/unknown-avatar.png'; ?>
<li class="comment">
    <!--	COMMENT by POST AUTHOR 	-->
    <div class="comment-container clearfix">
        <div class="comment-author-avatar">
            <a><?php if(!$picture){ ?><img alt="no-avatar" src="<?php print $no_avatar; ?>" class="avatar avatar-86 photo" height="86" width="86" /><?php }else{ print $picture; }?></a>
        </div>
        <div class="comment-content">
            <div class="comment-author">
                <div class="comment-author-name">
                    <?php print strip_tags($author); ?>
                </div>
                <div class="comment-date"><?php print format_date($node->created,'custom','F j, Y \a\t g:i a') ?></div>
            </div>
            <p><?php hide($content['links']); hide($content['field_mail']); hide($content['	field_website']); print render($content); ?></p>
            <div class="comment-reply-link a-invert" ><?php print strip_tags (render($content['links']) ,'<a>'); ?></div>
        </div>
    </div>
</li>
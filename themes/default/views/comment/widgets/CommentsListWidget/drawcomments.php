<?php
/**
 * Отображение для drawcomments:
 * 
 *   @category YupeView
 *   @package  YupeCMS
 *   @author   Yupe Team <team@yupe.ru>
 *   @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 *   @link     http://yupe.ru
 **/
foreach ($comments as $comment) {
    if ($parrent_id === $comment->parrent_id) {
        echo '<div style="margin-left: ' . (20 * $level) . 'px; ">' . "\n";
        echo ''
            . '<div class="comment" id="comment_'
            . $comment->id
            . '_'
            . str_replace(' ', '_', $comment->creation_date)
            . '">'
            . "\n"
            . '<div class="author">'
            . "\n";
        if (($author = $comment->getAuthor()) === false && $comment->url) {
            if (strlen($comment->url) > 0)
                echo CHtml::link($comment->name, $comment->url);
            else
                echo $comment->name;
        } else
            echo CHtml::link(
                $comment->name,
                array(
                    '/user/people/userInfo/',
                    'username' => $author->nick_name
                )
            );
        echo ' ' . Yii::t('comment', 'написал') . ':';
        echo ''
            . '<span style="float: right">'
            . CHtml::link(
                Yii::t('comment', 'комментировать'), 'javascript:void(0);', array(
                    'rel'     => $comment->id,
                    'data-id' => $comment->id . '_' . str_replace(' ', '_', $comment->creation_date),
                    'class'   => 'commentParrent',
                )
            )
            . '</span>';
        echo '</div>';
        echo '<div class="time">' . $comment->creation_date . '</div>';
        echo '<div class="content">' . $comment->text . '</div>';
        echo '</div><!-- comment -->';
        $this->renderPartial(
            'webroot' . str_replace(
                '/', '.', str_replace(
                    Yii::getPathOfAlias('webroot'),
                    '',
                    __DIR__
                )
            ) . '.drawcomments', array(
                'comments'   => $comments,
                'level'      => $level + 1,
                'parrent_id' => $comment->id,
            )
        );
        echo '</div>';
    }
}
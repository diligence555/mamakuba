<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $topic = $reply->topic;
        $reply->topic->increment('reply_count',1);//添加评论后使得计数器的数字加1
        $reply->content = clean($reply->content, 'user_topic_body');
        // 通知作者话题被回复了
        $topic->user->notify(new TopicReplied($reply));
    }

    //用于在删除评论后使得计数器的数字减1
    public function deleted(Reply $reply)
    {
        $reply->topic->decrement('reply_count', 1);
    }

    public function updating(Reply $reply)
    {
        //
    }
}
<?php

require('./Reply.class.php');

class ImageReply implements Reply {
    public function send() {
        echo "回复的是图片消息";
    }
}
<?php
    require('./Reply.class.php');

    class TextReply implements Reply{
       
        public function send(){
            echo "回复文本消息";
        }
    }
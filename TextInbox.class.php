<?php
require('./Inbox.class.php');
require('./TextReply.class.php');
class TextInbox extends Inbox {
    public function __construct() {
        $this->MessageType = new TextReply();
    }
}

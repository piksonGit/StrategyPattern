<?php
class Inbox {
    public $MessageType;
    public function __construct($MessageType){
        $this->MessageType = $MessageType;
    }
    public function reply(){
        $this->MessageType->send();
    }
    public function sayHi(){
        echo "现在正在向顾客问好思密达";
    }
}
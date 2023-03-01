<?php

    // Save messages to session flash 
    function set_messages($message, $type, $flash=TRUE, $group=TRUE){
        $messages= session('_messages');
        if(!is_array($message)) $message = array($message);
        foreach($message as $msg){
            $obj = new stdClass();
            $obj->message = $msg;
            $obj->type = $type;
            $obj->flash = $flash;
            $obj->group = $group;
            $messages[] = $obj;
        }

        $flash_messages = array();
        foreach($messages as $msg){
            if($msg->flash) $flash_messages[] = $msg;
        }
        if(count($flash_messages)) session()->flash('_messages', $flash_messages);
    }

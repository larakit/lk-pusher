<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 27.04.17
 * Time: 10:50
 */

namespace Larakit\Pusher;

class LarakitPusher {
    
    protected static $instance = null;
    protected        $data     = [];
    protected        $channels = [];
    
    static function instance() {
        if(!self::$instance) {
            self::$instance = new \Pusher(
                config('broadcasting.connections.pusher.key'),
                config('broadcasting.connections.pusher.secret'),
                config('broadcasting.connections.pusher.app_id'),
                config('broadcasting.connections.pusher.options')
            );
        }
        
        return self::$instance;
    }
    
    function data($k, $v) {
        $this->data[$k] = $v;
        
        return $this;
    }
    
    function dataMessage($val) {
        return $this->data('message', $val);
    }
    
    function dataResult($val) {
        return $this->data('result', $val);
    }
    
    function channel($channel) {
        $this->channels[$channel] = $channel;
        
        return $this;
    }
    
    function send($event) {
        self::instance()->trigger(array_values($this->channels), $event, $this->data);
    }
}
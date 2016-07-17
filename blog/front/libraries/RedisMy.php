<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RedisMy {

    function __construct(){
        if(!isset($this->redis))$this->redis = new Redis();
        $this->connect();
    }

    function connect(){
        try{
            $this->redis->connect('127.0.0.1');
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    function get($key){
        $result = $this->redis->get($key);
        return $result;
    }

    function set($key,$value,$time = 0){
        $this->redis->set($key,$value,$time);
    }


    function setList($name,$value){
        $this->redis->lpush($name,$value);
    }

    function getList($name,$start = 0,$end = 1000){
        return $this->redis->lrange($name,$start,$end);
    }

    function getKey(){
        return $this->redis->keys('*');
    }
}
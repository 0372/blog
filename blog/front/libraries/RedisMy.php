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

    function set($key,$value){
        $this->redis->set($key,$value);
    }


    function setList($name,$value){
        $this->redis->lpush($name,$value);
    }

    function getList($name){
        return $this->redis->lrange($name,0,5);
    }

    function getKey(){
        return $this->redis->keys('*');
    }
}
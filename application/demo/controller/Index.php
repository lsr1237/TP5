<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\12\11 0011
 * Time: 16:33
 */

namespace app\demo\Controller;

use think\Controller;


class Index extends Controller
{
    public function index(){
        echo '??';
        $this->fetch();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\12\13 0013
 * Time: 15:04
 */

namespace app\common\model;

use think\Model;

class Goods extends Model
{
    //设置表主键为UID
    protected $pk = 'uid';
    protected function initialize(){
        parent :: initialize();
    }
}
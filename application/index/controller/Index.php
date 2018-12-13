<?php
namespace app\index\controller;

use app\common\model\Admin;
use app\common\model\Goods;

class Index
{
    //定义变量来存放模型实例
    protected $adminMol;
    protected $goodsMol;
    //构造函数

    /**
     * 在构造函数中去依赖注入数据库的Model
     * Model 是一个典型的依赖注入
     * 先定义接口，然后相应的模型去继承接口去完善方法，
     * 每个表类继承Model定制相应的功能
     * 在controller中要依赖某个模型类
     * use引入
     * 实例化模型类
     * 调用相应的方法
     * Index constructor.
     * @param Admin $admin
     * @param Goods $goods
     */
    public function __construct(Admin $admin, Goods $goods){
        $this->adminMol = $admin;
        $this->goodsMol = $goods;
    }
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) 2018新年快乐</h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }
    public function admin(){
        $adminModel = new Admin();
        //模板新增
//        $adminModel->name = '单条插入';
//        $adminModel->sex = '1';
//        $adminModel->address = '单条插入地址';
//        $adminModel->save();
//        echo $adminModel->id;
        //批量增加
        $saveData = array(
          array(
              'name'=>'批量插入1',
              'sex'=>'1',
              'address'=>'批量插入地址1'
          ),
          array(
              'name'=>'批量插入2',
              'sex'=>'2',
              'address'=>'批量插入地址2'
          ),
        );
        $adminModel->saveAll($saveData);
        //静态方法调用
        $Admin = Admin::create(['name'=>'静态方法调用','sex'=>1,'address'=>'静态调用地址']);
        echo $Admin->id;
    }
    public function goods(){
        $goodsModel = new Goods();
        $saveData = [
            [
                'a_name'=>'good1'
            ],
            [
                'a_name'=>'good2'
            ]
        ];
        $goodsModel->saveAll($saveData);
    }
    public function yilai(){
        $this->goodsMol->a_name = '依赖注入实例！';
        $this->goodsMol->save();
        echo $this->goodsMol->uid;
    }
}

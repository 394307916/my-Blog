<?php

use App\Mood;

return [
    // 页面标题
    'title'   => '说说',

    // 模型单数，用作页面『新建 $single』
    'single'  => '说说',

    // 数据模型，用作数据的 CRUD
    'model'   => Mood::class,

    // 设置当前页面的访问权限，通过返回布尔值来控制权限。
    // 返回 True 即通过权限验证，False 则无权访问并从 Menu 中隐藏
    'permission'=> function()
    {
        return Auth::check();
    },

    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns' => [

        // 列的标示，这是一个最小化『列』信息配置的例子，读取的是模型里对应
        // 的属性的值，如 $model->id
        'id'=>[
            'title' => 'ID',
        ],


        'content' => [
            'title' => '内容',
            'sortable' => false,
        ],

        'created_at' => [
            'title' => '创建时间',
        ],

        

        'operation' => [
            'title'  => '管理',
            'sortable' => false,
        ],
    ],

    // 『模型表单』设置项
    'edit_fields' => [

        'content' => [
            'title' => '内容',
        ],

    ],

    // 『数据过滤』设置
    'filters' => [
        'id' => [

            // 过滤表单条目显示名称
            'title' => 'id',
        ],
        'content' => [
            'title' => '内容',
        ],

    ],
];
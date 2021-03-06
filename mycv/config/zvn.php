<?php

return [

    'url' => [
        'prefix_admin' => 'admin',
        'prefix_news' => 'news69'
    ],

    'format' => [
        'long_time' => 'H:m:s d/m/Y',
        'short_time' => 'd/m/Y'
    ],

    'template' => [
        'form_label' => [
            'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
        ],
        'form_input' => [
            'class' => 'form-control col-md-6 col-xs-12'
        ],
        'form_ckeditor' => [
            'class' => 'form-control col-md-6 col-xs-12 ckeditor'
        ],
        'status' => [
            'all' => ['name' => 'Tất cả', 'class' => "btn-success"],
            'active' => ['name' => 'Kích hoạt', 'class' => "btn-success"],
            'inactive' => ['name' => 'Chưa kích hoạt', 'class' => "btn-info"],
            'block' => ['name' => 'Bị khóa', 'class' => "btn-danger"],
            'default' => ['name' => 'Chưa xác định', 'class' => "btn-info"],
            'none' => ['name' => 'Tất cả', 'class' => "btn-danger"],
        ],
        'is_home' => [
            '1' => ['name' => 'Hiển thị', 'class' => "btn-primary"],
            '0' => ['name' => 'Không hiển thị', 'class' => "btn-warning"]
        ],
        'display' => [
            'list' => ['name' => 'Danh sách'],
            'grid' => ['name' => 'Lưới']
        ],
        'type' => [
            'featured' => ['name' => 'Nổi bật'],
            'normal' => ['name' => 'Bình thường']
        ],
        'search' => [
            'all' => ['name' => 'Search by all'],
            'id' => ['name' => 'Search by ID'],
            'name' => ['name' => 'Search by name'],
            'username' => ['name' => 'Search by username'],
            'fullname' => ['name' => 'Search by fullname'],
            'email' => ['name' => 'Search by email'],
            'description' => ['name' => 'Search by description'],
            'link' => ['name' => 'Search by link'],
            'content' => ['name' => 'Search by content']
        ],
        'button' => [
            'edit' => ['class' => 'btn-success', 'title' => 'Edit', 'icon' => 'fa-pencil', 'route-name' => '/form'],
            'delete' => ['class' => 'btn-danger btn-delete', 'title' => 'Delete', 'icon' => 'fa-trash', 'route-name' => '/delete'],
            'info' => ['class' => 'btn-info', 'title' => 'View', 'icon' => 'fa-pencil', 'route-name' => '/delete']
        ]
    ],
    
    'config' => [
        'search' => [
            'default' => ['all', 'id', 'fullname'],
            'slider' => ['all', 'id', 'name', 'description', 'link'],
            'category' => ['all', 'id', 'name'],
            'article' => ['all', 'name', 'content']
        ],

        'button' => [
            'default' => ['edit' , 'delete'],
            'slider'  => ['edit', 'delete'],
            'category'  => ['edit', 'delete'],
            'article'  => ['edit', 'delete']
        ]
    ]


];

?>
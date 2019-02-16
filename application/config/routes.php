<?php 

return [
    '' => [
        'controller' => 'home',
        'action' => 'index'
    ],
    "blog" => [
        'controller' => 'blog',
        'action' => 'myblog'
    ],
    'add_data' => [
        'controller' => 'home',
        'action' => 'add_data'
    ],
    '\?page=(\d+)' =>[
        'controller' => 'home',
        'action' => 'paginate'
    ],
    'login' => [
        'controller' => 'session',
        'action' => 'login'
    ],
    'login-admin' => [
        'controller' => 'session',
        'action' => 'login_admin'
    ],
    'check-admin' => [
        'controller' => 'session',
        'action' => 'check_admin'
    ],
    'logout' => [
        'controller' => 'session',
        'action' => 'logout'
    ],
    'addtask' => [
        'controller' => 'session',
        'action' => 'addTask'
    ],
    'changestatus\?id=(\d+)' => [
        'controller' => 'session',
        'action' => 'changestatus'
    ],
    '\?page=(\d+)\&sort=(\w+)' => [
        'controller' => 'home',
        'action' => 'paginate'
    ]
    
];



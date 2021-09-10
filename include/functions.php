
<?
session_start();

include_once './include/db.php';
$userInfo = userInfo();


$route = $_GET['route'] ?? 'main';

$arrayPages = [
    
    'main'    => ['page_name'    =>  'main',
                  'page_title'   =>  'Главная',
                  'page_icon'    =>  'fal fa-home'
                 ],
                 
    'contact'    => ['page_name'    =>  'contact',
                     'page_title'   =>  'Контакты',
                     'page_icon'    =>  'fal fa-address-book'
                    ],
    'table'      => ['page_name'    =>  'table',
                     'page_title'   =>  'Таблица умножения',
                     'page_icon'    =>  'fas fa-times'
                    ],
    'calc'      => ['page_name'    =>  'calc',
                     'page_title'   =>  'Калькулятор',
                     'page_icon'    =>  'fas fa-calculator-alt'
                    ],
    'slide'      => ['page_name'    =>  'slide',
                     'page_title'   =>  'Слайдер',
                     'page_icon'    =>  'far fa-presentation'
                    ],
    'guest'      => ['page_name'    =>  'guest',
                     'page_title'   =>  'Гостевая книга',
                     'page_icon'    =>  'fal fa-books'
                    ],
    'test'      => ['page_name'    =>  'test',
                     'page_title'   =>  'Тест',
                     'page_icon'    =>  'fal fa-vial'
                    ]
    
    ];

?>
<?php

$aproveitamento = [
    [
        'text' => 'Nova solicitação',
        'url' => config('app.url') . '/pedidos/create',
    ],
];
$menu = [
    [
        'text' => 'Aproveitamento de Créditos',
        'submenu' => $aproveitamento,
    ],
    [
        'text' => 'Pedidos',
        'url' => config('app.url') . '/pedidos',
    ],
];

$right_menu = [
    [
        'text' => '<i class="fas fa-cog"></i>',
        'title' => 'Configurações',
        'target' => '_blank',
        'url' => config('app.url') . '/item1',
        'align' => 'right',
    ],
];

# dashboard_url renomeado para app_url
# USPTHEME_SKIN deve ser colocado no .env da aplicação 

return [
    'title' => config('app.name'),
    'skin' => env('USP_THEME_SKIN', 'uspdev'),
    'app_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => config('app.url') . '/logout',
    'login_url' => config('app.url') . '/login',
    'menu' => $menu,
    'right_menu' => $right_menu,
];
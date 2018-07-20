<?php

namespace AppBundle\Menu;

use AppBundle\Entity\User;

class Menu
{
    const ALL_ROLES = '*';

    /**
     * @var array
     */
    private static $menuMapping = [
        'dashboard' => [
            'name' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'dashboard',
            'allowedRoles' => self::ALL_ROLES
        ],
        'recriacao' => [
            'name' => 'Recriação',
            'route' => 'dashboard',
            'icon' => 'dashboard',
            'allowedRoles' => [
                User::ROLE_ADMIN,
            ]
        ],
        'formulas' => [
            'name' => 'Formulas',
            'route' => 'app_menu',
            'icon' => 'sms',
            'allowedRoles' => [
                User::ROLE_USER,
            ]
        ],
        'teste2' => [
            'name' => 'Abra Esse',
            'idCollapse' => 'teste2',
            'icon' => 'casino',
            'allowedRoles' => [
                User::ROLE_USER,
            ],
            'subItems' => [
                [
                    'name' => 'Dash 2 ',
                    'route' => 'rota_teste',
                    'icon' => 'alarm',
                ],
            ]
        ],
        'teste' => [
            'name' => 'Abra',
            'idCollapse' => 'teste',
            'icon' => 'wifi',
            'allowedRoles' => self::ALL_ROLES,
            'subItems' => [
                [
                    'name' => 'Formulas',
                    'route' => 'app_menu',
                    'icon' => 'sms',
                ],
            ]
        ],
        'teste3' => [
            'name' => 'NaoAbra2',
            'idCollapse' => 'teste3',
            'icon' => 'casino',
            'allowedRoles' => [
                User::ROLE_ADMIN,
            ],
            'subItems' => [
                [
                    'name' => 'nnn',
                    'route' => 'app_menu',
                    'icon' => 'sms',
                ],
            ]
        ],
    ];

    /**
     * @param string $role
     * @return array
     */
    public static function getMenuMapping(string $role)
    {
        return array_filter(self::$menuMapping, function ($item) use ($role) {

            $allowedRoles = $item['allowedRoles'];

            if ($item['allowedRoles'] === self::ALL_ROLES) {
                return true;
            }

            return in_array($role, $allowedRoles);
        });
    }
}

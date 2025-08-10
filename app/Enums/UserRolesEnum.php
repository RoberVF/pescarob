<?php
namespace App\Enums;

enum UserRolesEnum: string
{
    case Admin = 'admin';
    case Premium = 'premium';
    case Basic = 'basic';
    case Demo = 'demo';
}

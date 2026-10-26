<?php

namespace App\Enums;

enum UserRol: string
{
    case ADMIN = 'admin';
    case RECEPCIONISTA = 'recepcionista';
    case LIMPIEZA = 'limpieza';
}

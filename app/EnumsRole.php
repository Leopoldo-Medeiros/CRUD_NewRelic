<?php

namespace App;

enum EnumsRole: int
{
    case ADMIN = 1;
    case USER = 2;
    case CUSTOMER = 3;
}

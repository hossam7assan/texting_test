<?php

namespace App\Enum;

enum PaymentStatusEnum: int
{
    case pending = 1;
    case success = 2;
    case cancel = 3;
}

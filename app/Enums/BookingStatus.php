<?php

namespace App\Enums;

enum BookingStatus: string
{
  case PENDING = 'pending';
  case SUCCESS = 'success';
}
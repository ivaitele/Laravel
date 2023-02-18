<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentsController extends Controller
{
    public function show(Payment $payment)
    {
        return  $payment;
    }
}

<?php

// This is used when the two classes has the same type but different in detail implementation
// for example, payments: Mobile Payment, cash payment. 
// Let's say you will get 10% discount when you pay with mobile
// you can implement that feature like this

interface PaymentInterface
{
    public function amount();
}

class CashPayment implements PaymentInterface
{
    public function amount()
    {
        return 100;
    }
}

class MobilePayment implements PaymentInterface
{
    public function amount()
    {
        return 90;
    }
}

class Payment
{
    private $paymentMethod;

    public function pay($context)
    {
        switch($context){
            case "mobile":
                $this->paymentMethod = new MobilePayment;
                break;
            case "cash":
            default:
                $this->paymentMethod = new CashPayment;
        }

        return $this->paymentMethod->amount();
    }
}

$payment = new Payment;

echo $payment->pay("cash") . "USD";
echo $payment->pay("mobile") . "USD";


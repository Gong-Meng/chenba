<?php

namespace App\Events;

use App\Order;
use Illuminate\Queue\SerializesModels;

class OrderShipped
{
    use SerializesModels;

    public $order;

    /**
     * 创建一个事件实例
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function __construct($order)
    {  
        $this->order = $order;
    }
}
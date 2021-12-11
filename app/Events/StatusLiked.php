<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StatusLiked implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;
    public $message;
    public $id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($from,$to,$message)
    {
        $this->id = $to;
        $this->username = $from;
        $this->message  = "{$from} - {$message}";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    // public function broadcastWith()
    // {
    //     if(Auth::user()->username=='student1'){
    //         return ['status-liked'];
    //     }else{
    //         return [];
    //     }
    // }

    public function broadcastOn()
    {
        return ['status-liked'];
    }
}

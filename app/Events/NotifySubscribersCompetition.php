<?php

namespace App\Events;

use App\AnotherClasses\MailUtils;
use App\Competition;
use App\Subscription;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotifySubscribersCompetition
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $competition = Competition::orderBy("id", "desc")->first();

        $subscribers = Subscription::where("courthouse_id", $competition->courthouse_id)->get();

        $competition = [
            "type" => "competition",
            "data" => $competition
        ];

        foreach ($subscribers->toArray() as $subscriber) {
            MailUtils::sendMail(
                'Новый конкурс на сайте Амурского областного суда',
                'mails.notification',
                $subscriber["email"],
                $competition,
                null
            );
        }
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

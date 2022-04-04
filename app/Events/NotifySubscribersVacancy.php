<?php

namespace App\Events;

use App\AnotherClasses\MailUtils;
use App\Subscription;
use App\Vacancy;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class NotifySubscribersVacancy
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        Log::debug('NEW VACANCY CREATED');

        $vacancy = Vacancy::orderBy("id", "desc")->first();

        $subscribers = Subscription::where("courthouse_id", $vacancy->courthouse_id)->get();

        $vacancy = [
            "type" => "vacancy",
            "data" => $vacancy
        ];

        foreach ($subscribers->toArray() as $subscriber) {
            MailUtils::sendMail(
                'Появилась новая вакансия на кадровом портале Амурского областного суда',
                'mails.notification',
                $subscriber["email"],
                $vacancy,
                null
            );

            Log::debug('Sending message to ' . $subscriber["email"] . " about vacancy " . $vacancy["data"]["id"]);
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

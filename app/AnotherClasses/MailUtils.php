<?php

namespace App\AnotherClasses;

use Illuminate\Support\Facades\Mail;

class MailUtils {

    const SENDER            = "info@hr.amuroblsud.ru";
    public const TO_SELF    = "oblsud.amr@sudrf.ru";

    public static function sendMail($subject, $view, $email, $data, $files) {
        Mail::send(
            $view,
            [
                'data' => $data,
            ],
            function($message) use ($email, $data, $subject, $files) {
                $message
                    ->to($email)
                    //->bcc("igor7.83@list.ru")
                    //->from(self::SENDER)
                    ->subject($subject);

                if ($files)
                    foreach ($files as $file){
                        $message->attach(public_path('users_images/'.$file));
                    }
            }
        );
    }
}

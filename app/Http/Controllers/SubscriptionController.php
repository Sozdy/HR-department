<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe (Request $request) {
        foreach ($request->all() as $key => $val) {
            if ($key == "_token" || $key == "email")
                continue;

            $subscription = new Subscription();
            $subscription->email = $request->get("email");
            $subscription->courthouse_id = $key;

            $subscription->save();
        }

        return redirect("subscribe/success");
    }
}

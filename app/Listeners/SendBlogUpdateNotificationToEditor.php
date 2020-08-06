<?php

namespace App\Listeners;

use App\Events\BlogsUpdateNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Mail\sendEmailUpdateToWritter;

class SendBlogUpdateNotificationToEditor implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BlogsUpdateNotification  $event
     * @return void
     */
    public function handle(BlogsUpdateNotification $event)
    {
        Mail::to('writter@example.com')->send(new sendEmailUpdateToWritter($event->blog));
    }
}

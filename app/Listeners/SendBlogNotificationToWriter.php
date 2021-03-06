<?php

namespace App\Listeners;

use App\Events\BlogsNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Mail\sendEmailToWritter;

class SendBlogNotificationToWriter implements ShouldQueue
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
     * @param  BlogsNotification  $event
     * @return void
     */
    public function handle(BlogsNotification $event)
    {
        // dd($event);
        Mail::to('editor@example.com')->send(new sendEmailToWritter($event->blog));
    }
}

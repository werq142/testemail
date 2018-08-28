<?php

namespace App\Listeners;

use App\Role;
use jdavidbakr\MailTracker\Events\LinkClickedEvent;

class LinkClicked
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


    public function handle(LinkClickedEvent $event)
    {
        $tracker = $event->sent_email;
        Role::create([
            'name' => 'qw',
            'display_name' => 'Аqwe',
            'description' => 'User with admin permissions, can edit everything'
        ]);
    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Notification;
use Auth;

class NotificationController extends Controller {
    public function get() {
        //return Notification::where();
        $unread_notifications = Auth::user()->unreadNotifications;
        $fecha_actual = date( 'Y-m-d' );
        foreach( $unread_notifications as $notification ) {
            if( $fecha_actual != $notification->created_at->toDateString() ) {
                $notification->markAsRead();
            }
        }
        return Auth::user()->unreadNotifications;
    }    
}

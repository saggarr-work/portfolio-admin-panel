<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact;

    public static function newContact($request){
        self::$contact = new Contact();
        self::$contact->emailUsername = $request->emailUsername;
        self::$contact->directEmailLink = $request->directEmailLink;
        self::$contact->messengerUsername = $request->messengerUsername;
        self::$contact->directMessengerLink = $request->directMessengerLink;
        self::$contact->whatsappUsername = $request->whatsappUsername;
        self::$contact->directWhatsappLink = $request->directWhatsappLink;
        self::$contact->save();
    }

    public static function updateContact($request, $id){
        self::$contact = Contact::find($id);
        self::$contact->emailUsername = $request->emailUsername;
        self::$contact->directEmailLink = $request->directEmailLink;
        self::$contact->messengerUsername = $request->messengerUsername;
        self::$contact->directMessengerLink = $request->directMessengerLink;
        self::$contact->whatsappUsername = $request->whatsappUsername;
        self::$contact->directWhatsappLink = $request->directWhatsappLink;
        self::$contact->save();
    }
    
    public static function deleteContact($id){
        self::$contact = Contact::find($id);
        self::$contact->delete();
    }
}

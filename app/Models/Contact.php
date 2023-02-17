<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    public $table = 'contact';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'id', 'name', 'email', 'subject', 'phone_number', 'message'
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($contact) {

            $adminEmail = 'info@balicoffeeclub.com';

            Mail::to($adminEmail)->send(new ContactMail($contact));
        });
    }
}

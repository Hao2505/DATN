<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationInfomation extends Model
{
    protected $fillable = [
        'id', 'title', 'abbot_phone', 'office_phone', 'secretary_phone', 'email', 'address', 'Bank_account', 'Bank_number', 'Bank_nane'
    ];
}

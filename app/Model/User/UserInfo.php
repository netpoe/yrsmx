<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use App\Util\StringUtil;

class UserInfo extends Model
{
    protected $table = 'user_info';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = StringUtil::capitalize($value);
    }

    public function setPaternalLastNameAttribute($value)
    {
        $this->attributes['paternal_last_name'] = StringUtil::capitalize($value);
    }

    public function setMaternalLastNameAttribute($value)
    {
        $this->attributes['maternal_last_name'] = StringUtil::capitalize($value);
    }

    public function setMobileNumberAttribute($value)
    {
        $this->attributes['mobile_number'] = StringUtil::cleanPhone($value);
    }
}

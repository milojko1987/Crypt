<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Crypt;

class Student extends Model
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Crypt::encryptString($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = Crypt::encryptString($value);
    }

    public function setDirectionAttribute($value)
    {
        $this->attributes['direction'] = Crypt::encryptString($value);
    }

    public function setYearAttribute($value)
    {
        $this->attributes['year'] = Crypt::encryptString($value);
    }

    public function setPresenceAttribute($value)
    {
        $this->attributes['presence'] = Crypt::encryptString($value);
    }

    public function setColloquium1Attribute($value)
    {
        $this->attributes['colloquium1'] = Crypt::encryptString($value);
    }

    public function setColloquium2Attribute($value)
    {
        $this->attributes['colloquium2'] = Crypt::encryptString($value);
    }
    public function setExamAttribute($value)
    {
        $this->attributes['exam'] = Crypt::encryptString($value);
    }


    public function getNameAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getLastNameAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getDirectionAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getYearAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getPresenceAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getColloquium1Attribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getColloquium2Attribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function getExamAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }
}

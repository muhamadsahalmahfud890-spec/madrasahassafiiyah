<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get($key)
    {
        return Cache::rememberForever('setting_' . $key, function () use ($key) {
            $setting = self::where('key', $key)->first();
            return $setting ? $setting->value : null;
        });
    }

    public static function set($key, $value)
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
        
        Cache::forget('setting_' . $key);
        
        return $setting;
    }
}

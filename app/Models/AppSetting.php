<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class AppSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    public $timestamps = true;

    public static function chargeConfig()
    {
        $settings = Cache::get('db_app_setting', []);

        if (!$settings instanceof Collection) {
            $settings = collect($settings)
                ->each(fn ($setting) => app('config')->set(['app_settings.' . $setting->key => $setting->value]));
        }
        return $settings;
    }

    public static function refreshCache()
    {
        Cache::forget('db_app_setting');
        Cache::rememberForever('db_app_setting', fn () => static::query()->get()->toBase());

        return self::chargeConfig();
    }
}

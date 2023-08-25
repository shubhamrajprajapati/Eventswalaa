<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

/**
 * This is written by Shubham Raj to control all settings
 * for this app/website from admin panel. Like change .env file,
 * change app_settings.php config files and much more. See all
 * functions below to explore.
 */

class AppSettingController extends Controller
{

    public function appInfo()
    {
        return dd(config('app_settings'));
    }

    public function updateEnvFile()
    {
        // return $this->updateDotEnv('APP_NAME', "SHUBHAMWALAA", '"');
        // return dd(Arr::dot(require config_path('app_settings.php')));
    }

    protected function updateDotEnv($key, $newValue, $delim = '')
    {
        $path = base_path('.env');
        // get old value from current env
        $oldValue = env($key);

        // was there any change?
        if ($oldValue === $newValue) {
            return;
        }

        // rewrite file content with changed data
        if (file_exists($path)) {
            // replace current value with new value 
            file_put_contents(
                $path,
                str_replace(
                    $key . '=' . $delim . $oldValue . $delim,
                    $key . '=' . $delim . $newValue . $delim,
                    file_get_contents($path)
                )
            );
        }
    }
}

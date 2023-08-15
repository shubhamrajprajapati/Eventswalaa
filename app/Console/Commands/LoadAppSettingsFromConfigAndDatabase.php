<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Models\AppSetting;
use \Illuminate\Support\Arr;

class LoadAppSettingsFromConfigAndDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:load-app-settings-from-config-and-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "This command fetches settings from the 'app_settings.php' configuration file. It does not modify existing database values. If a setting with a specified key exists in the 'db_app_setting' table, the command retrieves the latest value from the database and stores it in the cache. Otherwise, it uses the value from the 'app_settings.php' configuration file.";

    /**
     * Execute the console command.
     *
     * @return int
     */


    public function handle()
    {
        $settings = Arr::dot(require config_path('app_settings.php'));
        foreach ($settings as $key => $value) {
            AppSetting::query()
                ->firstOrCreate([
                    'key' => $key,
                ], [
                    'value' => $value,
                ]);
        }

        AppSetting::refreshCache();

        $this->info("Successfully loaded settings from the 'app_settings.php' configuration file. Database values were not overridden. If present in 'db_app_setting', the latest value from the database was stored in the cache; otherwise, values from the configuration file were used.");

        return Command::SUCCESS;
    }
}

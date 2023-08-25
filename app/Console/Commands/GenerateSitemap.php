<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();

        // Post::get()->each(function (Post $post) use ($postsitmap) {
        //     $postsitmap->add(
        //         Url::create("/post/{$post->slug}")
        //         ->setPriority(0.9)
        //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        //     );
        // });

        $postsitmap->writeToFile(public_path('sitemap.xml'));
    }
}

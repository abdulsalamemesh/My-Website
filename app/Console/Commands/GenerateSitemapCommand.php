<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml for the website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create('https://abdulsalam-emesh.me')
            ->getSitemap()
            ->add(\Spatie\Sitemap\Tags\Url::create('/loading'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/me'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/work'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/education'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/skill'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/other-information'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/project'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/app.js'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/bootstrap.js'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/index-public'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/app.css'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/readme'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/env'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/env-example'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/empty'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/gitignore-root'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/artisan'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/composer'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/package'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/phpunit'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/postcss'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/tailwind-config'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/vite'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/web'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/console-route'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/channels'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/api'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/creates-application'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/test-case'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/unit-test'))
            ->writeToFile(public_path('sitemap.xml'));
    }
}

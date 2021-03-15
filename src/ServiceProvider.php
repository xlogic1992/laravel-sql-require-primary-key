<?php

namespace ChrisHarvey\LaravelSqlRequirePrimaryKey;

use App\Listeners\MigrationEndedListener;
use App\Listeners\MigrationStartedListener;
use Illuminate\Database\Events\MigrationEnded;
use Illuminate\Database\Events\MigrationStarted;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        Event::listen(MigrationStarted::class, MigrationStartedListener::class);
        Event::listen(MigrationEnded::class, MigrationEndedListener::class);
    }
}
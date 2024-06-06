<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\ContactMessage;
use App\Policies\ContactMessagePolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        ContactMessage::class => ContactMessagePolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}

<?php
declare(strict_types=1);

namespace Akmeh;

use Webpatser\Uuid\Uuid as WebpasterUuid;

trait Uuid
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = WebpasterUuid::generate()->string;
        });
    }
}


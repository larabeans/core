<?php

namespace App\Containers\Vendor\Beaner\Traits;

use Facades\Str;

/**
 * Class HasUuid.
 *
 * @author  Syed Ali Kazmi <ali@kazmi.me>
 */
trait HasUuid
{
    /**
     * Boot function from laravel.
     */
    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            if(!$model->getIncrementing()) {
                $model->keyType = 'string';
                $model->incrementing = false;
                $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string)Str::orderedUuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}

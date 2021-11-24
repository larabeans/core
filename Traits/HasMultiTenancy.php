<?php

namespace App\Containers\Vendor\Beaner\Traits;

use Illuminate\Support\Facades\Schema;
use App\Containers\Vendor\Beaner\Scopes\MultiTenancyScope;

/**
 * Class HashIdTrait.
 *
 * @author  Syed Ali Kazmi <ali@kazmi.me>
 */
trait HasMultiTenancy
{

    public static function bootHasMultiTenancy()
    {

        if (config('tenanter.installed', false) && config('tenanter.enabled', false)) {

            static::creating(function ($model) {
                // if db table in context, contains tenant column, set tenant id
                if (Schema::hasColumn($model->getTable(), 'tenant_id')) {
                    if (!$model->tenant_id) {
                        if (auth()->check()) {
                            $model->tenant_id = auth()->user()->tenant_id;
                        } else {
                            if(config('tenanter.default_id')){
                                // TODO: Still need to make it better
                                // Used only once on first time seeding
                                $model->tenant_id = config('tenanter.default_id');
                            }
                        }
                    }
                }
            });

           static::addGlobalScope(new MultiTenancyScope);
        }
    }
}

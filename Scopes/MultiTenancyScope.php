<?php

namespace App\Containers\Vendor\Beaner\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class MultiTenancyScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if (Config::get('tenanter.enabled')) {

            // if db table in context, contains tenant column, set tenant id
            if (Schema::hasColumn($model->getTable(), 'tenant_id')) {
                if (auth()->check()) {
                    if(!empty(auth()->user()->tenant_id)) {
                        $builder->where('tenant_id', auth()->user()->tenant_id);
                    }
                }
            }
        }
    }
}

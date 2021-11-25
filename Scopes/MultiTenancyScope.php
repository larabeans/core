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
                    if (!empty(auth()->user()->tenant_id) && !$this->gettingRolesForAuthenticatedUser($builder, $model)) {
                        $builder->where('tenant_id', auth()->user()->tenant_id);
                    }
                }
            } else if ($model->getTable() == 'tenants') {
                if (auth()->check()) {
                    if (!empty(auth()->user()->tenant_id) && !$this->gettingRolesForAuthenticatedUser($builder, $model)) {
                        $builder->where('id', auth()->user()->tenant_id);
                    }
                }
            }
        }
    }

    private function gettingRolesForAuthenticatedUser($builder, $model): bool
    {
        if ($model->getTable() == 'roles') {
            $wheres = collect($builder->getQuery()->wheres);
            if (
                ($wheres->contains('column', 'model_has_roles.model_id') &&
                    $wheres->contains('column', 'model_has_roles.model_type') &&
                    $wheres->contains('value', 'App\Containers\Vendor\Beaner\Models\User')
                ) ||
                (
                $wheres->contains('column', 'role_has_permissions.permission_id')
                ) ||
                (
                $wheres->contains('column', 'id')
                )
            ) {
                return true;
            }
        }
        return false;
    }
}

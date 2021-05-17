<?php
namespace App\Containers\Vendor\Beaner\Traits;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

/**
 * Class HashIdTrait.
 *
 * @author  Syed Ali Kazmi <ali@kazmi.me>
 */
trait MultiTenantable {

    public static function bootMultiTenantable() {

        static::creating(function ($model) {
            if(Config::get('tenant-container.enabled')) {

                // if db table in context, contains tenant column, set tenant id
                if (Schema::hasColumn($model->getTable(), 'tenant_id')) {
                    if (!$model->tenant_id) {
                        if (auth()->check()) {
                            $model->tenant_id = auth()->user()->tenant_id;
                        } else {
                            // TODO: Still need to make it better
                            // Used only once on first time seeding
                            $model->tenant_id = Config::get('tenant-container.default_id');
                        }
                    }
                }
            }
        });

        // if user is not administrator - role_id 1
        if (auth()->check()) {
            if (auth()->user()->role_id != 1) {
                static::addGlobalScope(new MultiTenantableScope);
            }
        }
    }
}

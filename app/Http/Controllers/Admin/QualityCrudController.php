<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Requests\QualityRequest;
use App\Models\Quality;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;

/**
 * @property CrudPanel $crud
 */
class QualityCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    /**
     * @throws \Exception
     */
    public function setup(): void
    {
        $this->crud->setModel(Quality::class);
        $this->crud->setRoute(config('backpack.base.route_prefix').'/quality');
        $this->crud->setEntityNameStrings(
            trans('admin.quality.quality'),
            trans('admin.quality.qualities'),
        );
    }

    protected function setupListOperation(): void
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => trans('admin.quality.name'),
        ]);

        $this->crud->addColumn([
            'name' => 'value',
            'label' => trans('admin.quality.value'),
        ]);
    }

    protected function setupCreateOperation(): void
    {
        $this->crud->setValidation(QualityRequest::class);

        $this->crud->addField([
            'name' => 'name',
            'label' => trans('admin.quality.name'),
        ]);

        $this->crud->addField([
            'name' => 'value',
            'label' => trans('admin.quality.value'),
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}

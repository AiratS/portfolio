<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\HistoricalPointTypeEnum;
use App\Http\Requests\HistoricalPointRequest;
use App\Models\HistoricalPoint;
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
class HistoricalPointCrudController extends CrudController
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
        $this->crud->setModel(HistoricalPoint::class);
        $this->crud->setRoute(config('backpack.base.route_prefix').'/historical-point');
        $this->crud->setEntityNameStrings(
            trans('admin.historical_point.historical_point'),
            trans('admin.historical_point.historical_points'),
        );
    }

    protected function setupListOperation(): void
    {
        $this->crud->addColumn([
            'name' => 'title',
            'label' => trans('admin.historical_point.title'),
        ]);

        $this->crud->addColumn([
            'name' => 'place',
            'label' => trans('admin.historical_point.place'),
        ]);

        $this->crud->addColumn([
            'name' => 'years',
            'label' => trans('admin.historical_point.years'),
        ]);

        $this->crud->addColumn([
            'name' => 'info',
            'label' => trans('admin.historical_point.info'),
        ]);

        $this->crud->addColumn([
            'name' => 'type',
            'label' => trans('admin.historical_point.type'),
            'type' => 'closure',
            'function' => function (HistoricalPoint $historicalPoint): string {
                return HistoricalPointTypeEnum::caseLabel($historicalPoint->type);
            },
        ]);
    }

    protected function setupCreateOperation(): void
    {
        $this->crud->setValidation(HistoricalPointRequest::class);

        $this->crud->addField([
            'name' => 'title',
            'label' => trans('admin.historical_point.title'),
        ]);

        $this->crud->addField([
            'name' => 'place',
            'label' => trans('admin.historical_point.place'),
        ]);

        $this->crud->addField([
            'name' => 'years',
            'label' => trans('admin.historical_point.years'),
        ]);

        $this->crud->addField([
            'name' => 'info',
            'label' => trans('admin.historical_point.info'),
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'type',
            'label' => trans('admin.historical_point.type'),
            'type' => 'select_from_array',
            'options' => HistoricalPointTypeEnum::caseLabels(),
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}

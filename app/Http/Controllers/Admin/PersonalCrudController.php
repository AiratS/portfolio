<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\LangEnum;
use App\Http\Requests\PersonalRequest;
use App\Models\Personal;
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
class PersonalCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function setup(): void
    {
        $this->crud->setModel(Personal::class);
        $this->crud->setRoute(config('backpack.base.route_prefix').'/personal');
        $this->crud->setEntityNameStrings(
            trans('admin.personal.personal'),
            trans('admin.personal.personal')
        );
    }

    protected function setupListOperation(): void
    {
        $this->crud->addColumn([
            'name' => 'full_name',
            'label' => trans('admin.personal.full_name'),
        ]);

        $this->crud->addColumn([
            'name' => 'speciality',
            'label' => trans('admin.personal.speciality'),
        ]);

        $this->crud->addColumn([
            'name' => 'info',
            'label' => trans('admin.personal.info'),
        ]);

        $this->crud->addColumn([
            'name' => 'lang',
            'label' => trans('admin.lang'),
            'attributes' => [
                'disabled' => true,
            ],
        ]);
    }

    protected function setupCreateOperation(): void
    {
        $this->crud->setValidation(PersonalRequest::class);

        $this->crud->addField([
            'name' => 'full_name',
            'label' => trans('admin.personal.full_name'),
        ]);

        $this->crud->addField([
            'name' => 'speciality',
            'label' => trans('admin.personal.speciality'),
        ]);

        $this->crud->addField([
            'name' => 'info',
            'label' => trans('admin.personal.info'),
        ]);

        $this->crud->addField([
            'name' => 'cv_url',
            'label' => trans('admin.personal.cv_url'),
        ]);

        $this->crud->addField([
            'name' => 'cv_label',
            'label' => trans('admin.personal.cv_label'),
        ]);

        $this->crud->addField([
            'name' => 'lang',
            'label' => trans('admin.lang'),
            'type' => 'select_from_array',
            'options' => LangEnum::caseLabels(),
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}

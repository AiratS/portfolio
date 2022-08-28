<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\ImageTypeEnum;
use App\Http\Requests\ImageRequest;
use App\Models\Image;
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
class ImageCrudController extends CrudController
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
        $this->crud->setModel(Image::class);
        $this->crud->setRoute(config('backpack.base.route_prefix').'/image');
        $this->crud->setEntityNameStrings(
            trans('admin.image.image'),
            trans('admin.image.images')
        );
    }

    protected function setupListOperation(): void
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => trans('admin.image.image'),
        ]);

        $this->crud->addColumn([
            'name' => 'type',
            'label' => trans('admin.image.type'),
        ]);
    }

    protected function setupCreateOperation(): void
    {
        $this->crud->setValidation(ImageRequest::class);

        $this->crud->addField([
            'name' => 'name',
            'label' => trans('admin.image.image'),
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public',
        ]);

        $this->crud->addField([
            'name' => 'type',
            'label' => trans('admin.image.type'),
            'type' => 'select_from_array',
            'options' => ImageTypeEnum::caseLabels(),
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}

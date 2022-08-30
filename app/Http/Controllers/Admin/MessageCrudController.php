<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;

/**
 * @property CrudPanel $crud
 */
class MessageCrudController extends CrudController
{
    use ListOperation;
    use DeleteOperation;
    use ShowOperation;

    /**
     * @throws \Exception
     */
    public function setup(): void
    {
        $this->crud->setModel(Message::class);
        $this->crud->setRoute(config('backpack.base.route_prefix').'/message');
        $this->crud->setEntityNameStrings(
            trans('admin.message.message'),
            trans('admin.message.messages'),
        );
    }

    protected function setupListOperation(): void
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => trans('admin.message.name'),
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'label' => trans('admin.message.email'),
        ]);

        $this->crud->addColumn([
            'name' => 'subject',
            'label' => trans('admin.message.subject'),
        ]);

        $this->crud->addColumn([
            'name' => 'message',
            'label' => trans('admin.message.message'),
            'type' => 'textarea',
        ]);

        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => trans('admin.message.created_at'),
        ]);
    }

    public function setupShowOperation(): void
    {
        $this->setupListOperation();
    }
}

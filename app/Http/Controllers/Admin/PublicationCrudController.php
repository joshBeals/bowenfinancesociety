<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publication;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PublicationRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;

/**
 * Class PublicationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PublicationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use CreateOperation {store as traitStore;}

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Publication::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/publication');
        CRUD::setEntityNameStrings('publication', 'publications');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Title');
        CRUD::column('file_path');
        CRUD::column('category');
        CRUD::column('availability');
        CRUD::column('created_at');
        
        $this->crud->removeButton('show');
        $this->crud->addButtonFromView('line', 'preview', 'preview', 'beginning');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PublicationRequest::class);

        CRUD::field('name')->label('Title');
        CRUD::field('file')->type('upload')->upload(true);
        CRUD::field('category')->type('select_from_array')->options(Publication::CATEGORIES);
        CRUD::field('availability')->type('select_from_array')->options(Publication::AVAILABILITY);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation(); // validation has already been run

        $data = $this->crud->getStrippedSaveRequest();
        
        $uploadedFileUrl = Cloudinary::uploadFile($data['file']->getRealPath())->getSecurePath();

        $user = Publication::create([
            'name' => $data['name'],
            'file_path' => $uploadedFileUrl,
            'category' => $data['category'],
            'availability' => $data['availability'],
        ]);

        return redirect('admin/publication');
    }

    public function preview($id)
    {
        $data = Publication::where('id', $id)->first();

        return Redirect::to($data->file_path);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        // $this->setupCreateOperation();

        CRUD::field('name')->label('Title');
        CRUD::field('category')->type('select_from_array')->options(Publication::CATEGORIES);
        CRUD::field('availability')->type('select_from_array')->options(Publication::AVAILABILITY);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\GalleryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;

/**
 * Class GalleryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GalleryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Gallery::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/gallery');
        CRUD::setEntityNameStrings('gallery', 'gallery');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Image Description');
        CRUD::column('file_path');
        CRUD::column('created_at');
        
        $this->crud->removeButton('show');
        $this->crud->addButtonFromView('line', 'image', 'image', 'beginning');

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
        CRUD::setValidation(GalleryRequest::class);

        CRUD::field('name')->label('Image Description');
        CRUD::field('file')->type('upload')->upload(true);

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

        // dd($data['file']);

        $file_name = time().'_'.$data['file']->getClientOriginalName();

        $file_path = $data['file']->storeAs('gallery', $file_name, 'public');

        $user = Gallery::create([
            'name' => $data['name'],
            'file_path' => '/storage/' . $file_path
        ]);

        return redirect('admin/gallery');
    }

    public function preview($id)
    {
        $data = Gallery::where('id', $id)->first();

        return Redirect::to(URL::to($data->file_path));
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

        CRUD::field('name')->label('Image Description');
    }
}

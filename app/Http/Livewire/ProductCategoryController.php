<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategory;

class ProductCategoryController extends Component
{
    //DEFINIMOS UNAS VARIABLES A USAR
    public $categorie, $description, $product_categorie_id;
    public $isDialogOpen = 0;

    protected $listeners = ['delete'];/////////////escuchador
    public $id_pc;////////////variable

    public function render()
    {
        $this->categorie=ProductCategory::all();
        return view('livewire.product_categories.product-category-controller');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isDialogOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isDialogOpen = false;
    }

    private function resetCreateForm(){
        $this->description = '';
    }

    protected $messages = [
        'description.required' => 'Este campo no debe de estar vacio',
    ];

    public function store()
    {
        $this->validate([
            'description' => 'required',
        ]);

        ProductCategory::updateOrCreate(['id' => $this->product_categorie_id], [
            'description' => $this->description,
        ]);

        session()->flash('message', $this->product_categorie_id ? 'Categoria de Producto Actualizado!' : 'Categoria de Producto Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $product_categorie = ProductCategory::findOrFail($id);
        $this->product_categorie_id = $id;
        $this->description = $product_categorie->description;

        $this->openModalPopover();
    }

    public function delete($id_pc)
    {
        $id_pc->delete();////////video
        ProductCategory::find($id_pc)->delete();
        session()->flash('message', 'Categoria de Producto Eliminado!');
    }
}

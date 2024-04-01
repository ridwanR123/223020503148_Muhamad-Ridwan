<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index() : View
    {
        //get all products
        $products = Product::latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'          => 'required|max:20',
            'email'         => 'required',
            'alamat'        => 'required',
            'jabatan'       => 'required',
            'umur'          => 'required|numeric|min:1'
        ]);



        //create product
        Product::create([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'jabatan'       => $request->jabatan,
            'umur'          => $request->umur
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get product by ID
        $product = Product::findOrFail($id);

        //render view with product
        return view('products.edit', compact('product'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'          => 'required|max:20',
            'email'         => 'required',
            'alamat'        => 'required',
            'jabatan'       => 'required',
            'umur'          => 'required|numeric|min:1'
        ]);

        //get product by ID
        $product = Product::findOrFail($id);





            //update product with new image
        $product->update([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'jabatan'       => $request->jabatan,
            'umur'          => $request->umur
        ]);


        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $product = Product::findOrFail($id);


        //delete product
        $product->delete();

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

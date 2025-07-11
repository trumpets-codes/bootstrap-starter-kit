<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::with('category')->latest()->get();


            return Datatables::of($products)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return view('products._actions', ['product' => $row])->render();
                })
                ->addColumn('status', function ($row) {
                    return view('products._status', ['product' => $row])->render();
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        $categories = Category::all();

        return view('products.index', compact('categories'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->id) {
            // Update existing product
            $product = Product::findOrFail($request->id);
            $product->update($request->all());

            // Delete old attributes
            ProductAttribute::where('product_id', $product->id)->delete();

            // Insert new attributes
            foreach ($request->input('attributes', []) as $attr) {
                if (!empty($attr['key']) && !empty($attr['value'])) {
                    ProductAttribute::create([
                        'product_id' => $product->id,
                        'key' => $attr['key'],
                        'value' => $attr['value'],
                    ]);
                }
            }
        } else {
            // Create new product
            $product = Product::create($request->all());

            // Insert attributes
            foreach ($request->input('attributes', []) as $attr) {
                if (!empty($attr['key']) && !empty($attr['value'])) {
                    ProductAttribute::create([
                        'product_id' => $product->id,
                        'key' => $attr['key'],
                        'value' => $attr['value'],
                    ]);
                }
            }
        }

        return response()->json(['message' => 'Product saved successfully.']);
    }


    public function edit(Product $product)
    {
        $product->load('attributes');
        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully.']);
    }
}

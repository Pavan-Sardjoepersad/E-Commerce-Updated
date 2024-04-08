<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->only('update','destroy','add');
    }

    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
 
    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', ['product' => $product]);
    }

    public function addToCart($id){
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'slug' => $product->slug,
                'id' => $product->id
            ];
        }

        // dd(session('cart'));
        session()->put('cart', $cart);
        return redirect()->back()->with('added', 'Product added to the cart');

    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        unset($cart[$id]);

        session()->put('cart', $cart);

        return redirect()->back();
    
    }

    public function addProduct(){
        return view('products.create');
    }

    public function create(Request $request)
    {
        // Valideren van invoergegevens aanmaken product
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:1',
        ]);

        $product = new Product();
        // invoeren van de productgegevens vanuit het aanmaak verzoek
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // Opslaan van het product
        $product->save();

        // Redirecten naar homepagina
        return redirect('/')->with('success', 'Product succesfully added!');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Updaten van de productgegevens met de gegevens uit het update verzoek
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
    
        // Opslaan van de bijgewerkte productgegevens
        $product->save();
    
        // Redirecten naar de product pagina
        return redirect()->back()->with('success', 'Product succesfully updated!');
    }

    public function destroy($id)
    {
        // Zoek het product dat moet worden verwijderd
        $product = Product::findOrFail($id);

        // Verwijder het product
        $product->delete();

        // Redirecten naar de homepagina
        return redirect('/')->with('success', 'Product Deleted');
    }

}

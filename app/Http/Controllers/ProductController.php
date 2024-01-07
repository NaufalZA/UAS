<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSold;
use Illuminate\Support\Facades\Auth;
 
class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('sold', 'ASC')->where('approve', 1);
        if($request->sort == 'asc'){
            $products =  $products->orderBy('name', 'ASC')->get();
        }else if($request->sort == 'desc'){
            $products =  $products->orderBy('name', 'DESC')->get();
        }else{
            $products =  $products->orderBy('created_at', 'DESC')->orderBy('updated_at', 'DESC')->get();
        }
 
        return view('pages.products', compact('products'));
    }
 
    public function create(){
        return view('pages.create');
    }
 
    public function store(Request $request){
         
        $file = $request->file('image');
        $fileName = 'product_' . time() . '.' . $file->extension();
        $file->move(public_path('assets/img'), $fileName);
 
        Product::create([
            'name' => $request->name,
            'image' => $fileName,
            'description' => $request->description,
            'sertifikasi' => $request->sertifikasi,
            'price' => $request->price,
            'sold' => "0",
            'user_id' => Auth::user()->id,
            'approve' => "0",
        ]);
 
        return back()->with('success', 'Selamat, rumah anda berhasil dijual');
    }
 
    public function buy($id){
        $product = Product::findOrFail($id);
 
        if($product->user_id == Auth::user()->id){
            return back()->with('error', "Pembelian gagal, anda tidak bisa membeli rumah anda sendiri");
        }
 
        ProductSold::create([
            'product_id' => $product->id,
            'buyer_id' => Auth::user()->id,
        ]);
 
        $product->update([
            'sold' => true,
        ]);
 
        return back()->with('success', 'Selamat, anda berhasil membeli rumah ini');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', 'Rumah tidak ditemukan');
        }

        return view('pages.edit', compact('product'));
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->with('success', 'Rumah berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return back()->with('error', 'Rumah tidak ditemukan');
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return back()->with('success', 'Rumah berhasil diupdate');
    }
    public function my(){
        $products = Product::where('user_id', Auth::user()->id)->orderBy('sold', 'asc')->get();
        return view('pages.my', compact('products'));
    }
    
    public function Admin_approve(){
        $products = Product::where('approve', 0)->orderBy('sold', 'asc')->get();
        return view('pages.approve', compact('products'));
    }

    public function approve($id){
        $product = Product::findOrFail($id);
        $product->update([
            'approve' => 1,
        ]);
 
        return back()->with('success', 'Selamat, rumah anda berhasil diSetujui');
    }
    public function reject($id){
        $product = Product::findOrFail($id);
        $product->update([
            'approve' => 2,
        ]);
 
        return back()->with('error', 'Maaf, rumah anda tidak diSetujui');
    }
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $pro=DB::table('products')
        ->join('product_types','products.productTypeId','=','product_types.id')
        ->join('providers','products.providerId','=','providers.id')
        ->select('products.*',DB::raw('product_types.name as nameType,providers.name as namepro'))->get();
        return view('admin.product.index',compact('pro'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productType=DB::table('product_types')->select('id','name')->get();
        $provider=DB::table('providers')->select('id','name')->get();
        return view('admin.Product.create',[
            'productType'=>$productType,
            'provider'=>$provider
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'required',
            'sku'=>'required',
            'price'=>'required',
            
        ]);
        $getimage = '';
       
	if($request->hasFile('image')){
		//Hàm kiểm tra dữ liệu
        
		$this->validate($request, 
			[
				//Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
				'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
			],			
			[
				//Tùy chỉnh hiển thị thông báo không thõa điều kiện
				'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			]
		);
		
		//Lưu hình ảnh vào thư mục public/upload/hinhthe
		$image = $request->file('image');
		$getimage = time().'_'.$image->getClientOriginalName();
		$destinationPath = public_path('upload/image');
		$image->move($destinationPath, $getimage);
	}
    date_default_timezone_set("Asia/Ho_Chi_Minh");
	$allRequest  = $request->all();
	$sku  = $allRequest['sku'];
	$name = $allRequest['name'];
	$deccription = $allRequest['deccription'];
	$price = $allRequest['price'];
    $productTypeId = $allRequest['productTypeId'];
    $providerId = $allRequest['providerId'];
    $status = $allRequest['status'];
	//Gán giá trị vào array
	$dataInsertToDatabase = array(
		'sku'=>$sku,
        'name'=>$name,
        'deccription'=>$deccription,
        'price'=>$price,
        'productTypeId'=>$productTypeId,
        'image'=>$getimage,
        'providerId'=>$providerId,
        'status'=>$status,
		'created_at' => date('Y-m-d H:i:s'),
		'updated_at' => date('Y-m-d H:i:s'),
	);
	
	//Insert vào bảng tbl_hocsinh

       
        Product::create($dataInsertToDatabase);
        return redirect()->route('admin.product.index')->with('flash_message', 'Account Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productType=DB::table('product_types')->select('id','name')->get();
        $provider=DB::table('providers')->select('id','name')->get();
        $contact = Product::find($id);
        return view('admin.Product.edit')->with([
            'contact'=>$contact,
            'id'=>$id,
            'productType'=>$productType,
            'provider'=>$provider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Product::find($id);
        $input = $request->all();
        // return $input;
        $contact->update($input);
        return redirect()->route('admin.product.index')->with('flash_message', 'ProductType Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kq = Product::find($id)->delete();
        return redirect()->route('admin.product.index')->with('flash_message', 'ProductType deleted!');
   
    }
}

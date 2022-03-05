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
         $getImages = '';
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
                
                //Lưu hình ảnh vào thư mục public/upload/image
                $anh = $request->file('image');
                $getImages = time().'-'.$anh->getClientOriginalName();
                $destinationPath = public_path('assets/user/img/product');
                $anh->move($destinationPath, $getImages);
            }
        // if(!$request->hasFile('image')) {
        //     //Nếu chưa có file upload thì báo lỗi
        //     return false;
        //  }
        //  else {
        //     //Xử lý file upload
        //     $image = $request->file('image');
        //     //Lưu trữ file tại public/images
        //     $name = date('Y_m_d_H_i_s_').$image->getClientOriginalName();
        //     $imagePath = $image->move('assets/user/img/product', $name);
        //  }
        $input = $request->all();
        $input['image'] = $getImages;
        Product::create($input);
        return redirect()->route('admin.product.index');
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
        //Thực hiện lưu thay đổi hình thẻ khi có file
        if($request->hasFile('image')){
            $this->validate($request, 
                [
                    'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            
            //Xóa file hình thẻ cũ
            $getImages = DB::table('products')->select('image')->where('id',$id)->get();
            if($getImages[0]->image != '' && file_exists(public_path('assets/user/img/product/'.$getImages[0]->image)))
            {  
                unlink(public_path('assets/user/img/product/'.$getImages[0]->image));
            }
            
            //Lưu file hình thẻ mới
            $anh = $request->file('image');
            $getImage = time().'_'.$anh->getClientOriginalName();
            $destinationPath = public_path('assets/user/img/product');
            $anh->move($destinationPath, $getImage);
            $updateImages = DB::table('products')->where('id', $id)->update([
                'image' => $getImage
            ]);
        }
    
        $input = $request->all();
        // return $input;
        $contact->update($input);
        return redirect()->route('admin.product.index');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shark;
use Illuminate\Support\Facades\Hash;

class sharkController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();


        // Tạo mới shark với các dữ liệu tương ứng với dữ liệu được gán trong $data
        shark::create($data);
        echo"success create shark";
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $shark = shark::findOrFail($id);

        // điều hướng đến view edit shark và truyền sang dữ liệu về shark muốn sửa đổi
        return view('edit', compact('shark'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $shark = shark::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = request()->except(['_token']);


        // Update shark
        shark::whereId($id)->update($data);
        echo"success update shark";
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $shark = shark::findOrFail($id);

        $shark->delete();
        echo"success delete shark";
    }

    public function index(){
        // lấy ra toàn bộ shark
        $sharks = shark::all();
        //dd($sharks);

        // trả về view hiển thị danh sách shark
        return view('index', compact('sharks'));
    }

}
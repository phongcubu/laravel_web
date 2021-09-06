@extends('admin_layout')
@section('admin_content')
<div class="form-w3layouts">
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Thêm Thương Hiệu Sản Phẩm
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put("message",null);
                        }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{URL::to('save-brand-product')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                            <input type="text" class="form-control" name="brand_product_name" id="exampleInputEmail1" placeholder="tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Thương Hiệu</label>
                            <textarea style="resize: none" rows="8" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Nội dung mô tả"></textarea>
                        </div>
                        <div class="form-group">
                           
                            <select name="brand_product_status" class="form-control input-lg m-bot15">
                                <option value="0">ẩn </option>
                                <option value="1">hiện</option>
                              
                            </select>
                        </div>
                        
                        <button type="submit" name="update_brand_product" class="btn btn-info">Cập Nhật Thương Hiệu</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
 
</div>
</div>
@endsection
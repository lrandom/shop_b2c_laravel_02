@extends('be.layout')
@section('main-content')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data"
                      action="{{route('admin.product.doEdit',['id'=>$obj->id])}}">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="removeImages" class="removeImages"/>
                        <div class="preview" style="display:flex;">
                            @foreach($obj->images as $image)
                                <div class="thumb-wrapper">
                                    <img class="thumb" src="{{asset($image->path)}}" alt="{{$obj->name}}"/>
                                    <a class="remove-image" onclick="removeImage({{$image->id}},event)">Remove</a>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <input type="file" name="img[]" class="img-select" multiple
                               accept="image/png, image/gif, image/jpeg" onchange="previewImages()">

                        <br>
                        <br>

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                   value="{{$obj->name}}">
                        </div>

                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity"
                                   value="{{$obj->quantity}}">
                        </div>

                        <div class="form-group">
                            <label for="">Short Desc</label>
                            <textarea name="short_desc" class="form-control" placeholder="Short Desc"
                            >{{$obj->short_desc}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Tag Line</label>
                            <textarea name="tag_line" class="form-control" placeholder="Tag Line"
                            >{{$obj->tag_line}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea name="content" class="form-control" placeholder="Content"
                            >{{$obj->content}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="">Seo Keyword</label>
                            <textarea name="seo_keyword" class="form-control" placeholder="Seo Keyword"
                            >{{$obj->seo_keyword}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Seo Description</label>
                            <textarea name="seo_description" class="form-control" placeholder="Seo Decsription"
                            >{{$obj->seo_description}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option <?php if ($category->id == $obj->category_id) {
                                        echo "selected=selected";
                                    } ?> value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Discount</label>
                            <select name="discount_id" class="form-control">
                                @foreach($discounts as $discount)
                                    <option <?php if ($category->id == $obj->discount_id) {
                                        echo "selected=selected";
                                    } ?> value="{{$discount->id}}">{{$discount->amount}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            @foreach($variants as $variant)
                                @if(count($variant->variantValues)>0)
                                    <label>{{$variant->name}}</label>
                                    @foreach($variant->variantValues as $variantValue)
                                        <div class="form-check">
                                            <?php
                                                $checked = false;
                                                $row = $variantValueProducts->filter(function($item,$index) use ($variant,$variantValue){
                                                    return $item->variant_value_id == $variantValue->id && $item->variant_id==$variant->id;
                                                });
                                                if(count($row)>0){
                                                    $checked= true;
                                                }
                                            ?>


                                            <input type="checkbox" class="form-check-input" name="variants[]"
                                                  <?php if($checked==true){echo "checked=checked";} ?> value="{{$variant->id}}|{{$variant->name}}|{{$variantValue->id}}">
                                            <label class="form-check-label"
                                                   for="exampleCheck1">{{$variantValue->name}}</label>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        async function previewImages() {

            for (let i = 0; i < document.querySelector('.img-select').files.length; i++) {
                const reader = new FileReader();
                await reader.readAsDataURL(document.querySelector('.img-select').files[i]);

                reader.onload = function (file) {
                    const preview = document.querySelector('.preview');
                    const img = document.createElement('img');
                    img.setAttribute('src', file.target.result);
                    img.classList.add('thumb');
                    preview.appendChild(img);
                }
            }
        }

        function removeImage(id,event) {
            let removeImagesInput = document.querySelector('.removeImages');
            let removeImages = removeImagesInput.value; //1|2|3|4|5|6
            removeImages = removeImages.split('|');//chuyển đổi thành mảng [1,2,3,4,5,6];[]
            removeImages.push(id);//[1,2,3,4,5,6,7]
            removeImages = removeImages.join('|');//1|2|3|4|5|6|7
            removeImagesInput.value = removeImages;

            //ẩn ảnh đi
            event.target.parentElement.style.display = 'none';
        };

        CKEDITOR.replace('content');
    </script>

    <style>
        .thumb {
            width: 100px;
            height: 80px;
            object-font: cover;
        }

        .thumb-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }
    </style>
@endsection

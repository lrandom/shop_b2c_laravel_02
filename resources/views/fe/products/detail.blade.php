@extends('fe.layout')
@section('mt-description')
    {{$product->seo_description}}
@endsection

@section('mt-keyword')
    {{$product->seo_keyword}}
@endsection
@section('content')
    <div class="mx-36 my-10">
        <section class="grid grid-cols-7 space-x-5">
        @if($product->images && count($product->images)>0)
            <!--GALLERY IMAGE-->
                <div class="col-span-3">
                    <div>
                        <img src="{{asset($product->images[0]->path)}}" alt="{{$product->name}}"/>
                    </div>
                    <br>
                    <div class="flex">
                        @foreach($product->images as $image)
                            <img class="w-20" src="{{asset($image->path)}}"
                                 alt="{{$product->name}}-image-{{$image->id}}"/>
                        @endforeach
                    </div>
                </div>
        @endif

        <!--SAN PHAM-->
            <div class="col-span-4 space-y-5">
                <h1 class="text-3xl font-bold">{{$product->name}}</h1>
                <p class="font-bold text-2xl text-red-500 text-left">
                    <span> {{$product->price}}</span>
                    {{--  <del class="text-gray-800 text-lg">$100</del>--}}
                </p>

                <div class="flex space-x-2 items-center font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                        type="text" readonly="" class="border rounded w-12 text-center font-medium"
                        value="1"><span class="bi bi-dash cursor-pointer"></span>
                    <button class="border border-gray-800 text-black p-2 text-xl">Add To Cart</button>
                </div>

            </div>
        </section>

        <section class="mt-20">
            <h2 class="font-bold text-2xl">Mô tả sản phẩm</h2>
            <p>
                {!! $product->content !!}
            </p>
        </section>

        <section class="mt-20">
            <h4 class="text-2xl font-bold">Có thể bạn sẽ thích</h4>
            <div class="grid grid-cols-1 md:grid-cols-5 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                @foreach($mightYouLikeProducts as $item)
                    @include('fe.products.small-card',['item'=>$item])
                @endforeach
            </div>
        </section>
    </div>

@endsection

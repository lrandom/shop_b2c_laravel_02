@extends('fe.layout')
@section('mt-description')
    {{$product->seo_description}}
@endsection

@section('mt-keyword')
    {{$product->seo_keyword}}
@endsection
@section('content')


    <div class="fixed bg-blue-200 right-0 top-0  p-2 rounded text-blue-500 hidden toast-success">Thêm vào giỏ hàng thành
        công
    </div>
    <div class="fixed bg-red-200 right-0 top-0  p-2 rounded text-red-500 hidden toast-failed">Thêm vào giỏ hàng thất
        bại
    </div>

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

                <div class="flex space-x-2 items-center font-bold">
                    <span class="bi bi-plus cursor-pointer" onclick="updateQuantity(1)"></span>
                    <input
                        type="text" readonly="" class="quantity border rounded w-12 text-center font-medium"
                        value="1">
                    <span onclick="updateQuantity(-1)" class="bi bi-dash cursor-pointer"></span>
                    <button class="border border-gray-800 text-black p-2 text-xl" onclick="addItemToCart()">Add To
                        Cart
                    </button>
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

    <script>
        function updateQuantity(quantity) {
            let inputQuantity = parseInt(document.querySelector('.quantity').value);
            if (quantity == 1) {
                inputQuantity += parseInt(quantity);
            } else if (quantity == -1) {
                if (inputQuantity >= 2) {
                    inputQuantity += parseInt(quantity);
                }
            }
            document.querySelector('.quantity').value = inputQuantity
        }

        function addItemToCart() {
            axios({
                method: 'post',
                url: `{{route('api.cart.add',['id'=>$product->id])}}`
            }).then((resp) => {
                console.log(resp.data.msg);
                displayToast(resp.data.msg, '.toast-success');

                const cart = resp.data.cart;
                document.querySelector('.cart-item-counter').innerHTML = cart.length;
            }).catch((error) => {
                displayToast('Thêm vào giỏ hàng thất bại', '.toast-failed');
            });
        }

        function displayToast(msg,selector) {
            const toast = document.querySelector(selector);
            toast.innerHTML = msg;
            toast.classList.remove('hidden');
            toast.classList.add('block');
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('block');
            }, 4000);
        }

    </script>

@endsection

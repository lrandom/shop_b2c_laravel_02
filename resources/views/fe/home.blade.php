@extends('fe.layout')
@section('content')
    <!--sp chính-->
    <div class="space-y-10 mt-5">
        <section>
            <h4 class="text-2xl font-bold">Sản phẩm mới nhất</h4>


            <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                @foreach($lastProducts as $item)
                @include('fe.products.card',['item'=>$item])
                @endforeach
            </div>
        </section>

        <section>
            <h4 class="text-2xl font-bold">
                Sản phẩm nhiều lượt xem nhất
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                @foreach($lastProducts as $item)
                    @include('fe.products.card',['item'=>$item])
                @endforeach
            </div>
        </section>

        <section>
            <h4 class="text-2xl font-bold">
                Sản phẩm nhiều người mua
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                @foreach($lastProducts as $item)
                    @include('fe.products.card',['item'=>$item])
                @endforeach
            </div>
        </section>
    </div>
@endsection

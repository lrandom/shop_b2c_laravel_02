@extends('fe.layout')
@section('mt-description')
    @if($category)
        {{$category->name}}
    @endif
@endsection

@section('mt-keyword')
    @if($category)
        {{$category->name}}
    @endif
@endsection
@section('content')
    <div class="grid grid-cols-10 mt-10">
        <div class="col-span-3">
            <ul class="font-semibold">
                <li>
                <li>
                    <a href="{{route('fe.category',['id'=>-1])}}">All</a>
                </li>
                </li>
                @foreach($allCategory as $cat)
                    <li>
                        <a href="{{route('fe.category',['id'=>$cat->id])}}">{{$cat->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-span-7">
            <h4 class="font-bold text-2xl">
                @if($category)
                    {{$category->name}}
                @else
                    All
                @endif
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-5">
                @foreach($products as $item)
                    @include('fe.products.card',['item'=>$item])
                @endforeach
            </div>
        </div>
    </div>
@endsection

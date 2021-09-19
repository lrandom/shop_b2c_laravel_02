<!--CARD-->
@if($item)
    <a href="{{route('fe.product.detail',['id'=>$item->id])}}" class="bg-white shadow pb-2 col-span-1">
        <div>

            @if($item->images && count($item->images)>0)
                <img
                    src="{{asset($item->images[0]->path)}}"
                    class="z-10 w-full h-50 object-cover">
            @else
                <img
                    src="https://via.placeholder.com/150
C/O https://placeholder.com/"
                    class="z-10 w-full h-72 object-cover">
            @endif


            <div class="space-y-4 mt-5 px-4">
                <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                        {{$item->name}} </h4>
                    <button><i class="bi bi-heart text-xl"></i></button>
                </div>
                <p class="font-bold text-2xl text-red-500 text-left">
                    <span> {{$item->price}} </span>
                    {{--  <del class="text-gray-800 text-lg">$100</del>--}}
                </p>
            </div>

        </div>
        <!--END CARD-->
    </a>
@endif

<!--CARD-->
@if($item)
    <a href="{{route('fe.product.detail',['id'=>$item->id])}}" class="bg-white shadow pb-2 col-span-1" >
    <div>

        @if($item->images && count($item->images)>0)
            <img
                src="{{asset($item->images[0]->path)}}"
                class="z-10 w-full h-72 object-cover">
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
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
@endif

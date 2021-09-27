<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"  content="@yield('mt-description','Website sell shoes, hyperbeast ....')">
    <meta name="keywords" content="@yield('mt-keyword','shoes,nike,adidas,puma,rebook....')">
    <title>
        @yield('title','Home Page')
    </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--AXIOS GỌI API-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<nav class="flex justify-between items-center shadow p-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
    </div>

    <div class="flex space-x-2 uppercase font-semibold items-center">
        <div><a href="">Home</a></div>
        <div><a href="">Danh mục</a></div>
        <div><a href="">Đăng ký</a></div>
        <div><a href="">Đăng nhập</a></div>

        <div class="relative">
            <div>
                <i class="bi bi-cart2 text-3xl"></i>
            </div>

            <div class="bg-red-400 text-white -top-2 -right-2 absolute rounded-full text-sm w-6 h-6 flex items-center justify-center cart-item-counter">0</div>
        </div>
    </div>
</nav>
<div class="container mx-auto md:px-0 px-5">
    @section('content')

    @show
</div>

<footer class="flex md:flex-row flex-col justify-around mt-20 bg-gray-200 py-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
        <p class="font-bold mt-5">Công ty TNHH 1 thành viên Luân</p>
        <address class="font-bold">Địa chỉ: Hạ Long - Quảng Ninh</address>
        <tel><span class="font-bold">SDT: 0868120192</span></tel>
        <p><span class="font-bold">Fax: 0868120192</span></p>
    </div>

    <div>
        <ul class="mt-10 space-y-2">
            <li>
                <a href="">Về chúng tôi</a>
            </li>

            <li>
                <a href="">Chính sách mua hàng</a>
            </li>

            <li>
                <a href="">Chính sách trả hàng</a>
            </li>
        </ul>
    </div>

    <div>
        <h5 class="mt-10 font-semibold">Mạng xã hội</h5>
        <div class="flex space-x-5 ">
            <a href="https://facebook.com">
                <i class="bi bi-facebook text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-google text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-instagram text-sm"></i>
            </a>
        </div>
    </div>
</footer>

<script type="text/javascript">
    axios({
        method: 'get',
        url: `{{route('api.cart.items')}}`
    }).then((resp) => {
        const cart = resp.data.cart;
        document.querySelector('.cart-item-counter').innerHTML = cart.length;
    }).catch((error) => {
    });
</script>
</body>
</html>

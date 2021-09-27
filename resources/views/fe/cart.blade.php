@extends('fe.layout')
@section('mt-description')
    Giỏ hàng
@endsection

@section('mt-keyword')
    Giỏ ahngf
@endsection
@section('content')
    <h4 class="block text-center text-2xl font-bold mt-2">Giỏ hàng</h4>
    <table class="table-fixed w-full border p-4 cart-info">
        <tr class="p-2">
            <th class="p-2">Sản phẩm</th>
            <th class="p-2">Số lượng</th>
            <th class="p-2">Giá/1 đv</th>
            <th class="p-2">Tổng giá</th>
        </tr>

    </table>

    <script>
        axios({
            method: 'get',
            url: `{{route('api.cart.items')}}`
        }).then((resp) => {
            const cart = resp.data.cart;
            const cartInfoTable = document.querySelector('.cart-info');
            console.log(cartInfoTable);
            for (let i = 0; i < cart.length; i++) {
                const product = cart[i].product;
                const tr = document.createElement('tr');
                tr.classList.add('text-center');
                tr.innerHTML = `<td class="p-2">
                 <img src=""/>
                 <span class="font-bold">
                       ${product.name}
                 </span>
             </td>
             <td class="p-2">
                 <span class="bi bi-plus cursor-pointer" onclick="updateQuantity(1,${product.id},${product.price},event)"></span>
                 <input
                     type="text" readonly="" class="quantity border rounded w-12 text-center font-medium"
                     value="${cart[i].quantity}">
                 <span onclick="updateQuantity(-1,${product.id},${product.price},event)" class="bi bi-dash cursor-pointer"></span>
             </td>
             <td class="font-bold text-red-500 p-2">
                ${product.price}
             </td>

             <td class="font-bold text-red-500 p-2 total-item-price">
               ${product.price * cart[i].quantity}
             </td>`;
                cartInfoTable.appendChild(tr);
            }
        }).catch((error) => {

        });


        async function updateQuantity(quantity, id, price, event) {
            let inputQuantity = parseInt(event.target.parentNode.querySelector('.quantity').value);
            if (quantity == 1) {
                inputQuantity += parseInt(quantity);
            } else if (quantity == -1) {
                if (inputQuantity >= 2) {
                    inputQuantity += parseInt(quantity);
                }
            }
            event.target.parentNode.querySelector('.quantity').value = inputQuantity;
            //gửi request lên server để update lại số lượng sp trong giỏ hàng
            try {
                const resp = await axios({
                    method: 'put',
                    url: `/api/cart/items/${id.id}/${quantity}`
                });
            } catch (e) {

            }


            const newPrice = inputQuantity * price;
            event.target.parentNode.parentNode.querySelector('.total-item-price').innerHTML = newPrice;
        }
    </script>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS</title>

    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
</head>

<body>


    @section('title', 'Cafe Delian')



    <div class="container-fluid menu-order">
        <div class="order mt-3 ">
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <h3>Make Your Order!!!</h3>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <div class="">Customer
                        <button type="button" class="btn btn-primary add-new" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">New</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-labelledby="" aria-hidden="true">
                            @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                            <form action="{{url('/admin/addCustomer')}}" method="POST">
                                    @csrf
                            <div class="modal-dialog" role="document">

                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">New Customer</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Customer Name</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                      <label for="contact" class="col-form-label">Contact</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">

                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                    <select class="form-control" style=" margin-top:10px;">
                        <option disabled="" selected="">select customer</option>
                        @foreach ($customer as $item)
                            <option value="">{{ $item->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

                <div class="pricing-plan">

                    <ul class="pricing-features">
                        <table id="table">
                            <thead class="table-of-price">
                                <tr>
                                    <th class="text-white">Items</th>
                                    <th class="text-white">Quantity</th>
                                    <th class="text-white">Price</th>
                                    <th class="text-white">Sub Total</th>
                                    <th class="text-white">Action</th>
                                </tr>
                            </thead>
                            <tbody class="current-order">
                                {{-- <tr>
                                    {{-- <th></th>
                                    <th><input type="number" name="" value="2" style="width:70px;"></th>
                                    <th>522</th>
                                    <th>1044</th>
                                    <th><i class="fa-solid fa-trash-can"></i></th>
                                </tr> --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Quantity:</th>
                                    <td colspan="2"><span class="quantity">0</span></td>
                                </tr>
                                <tr>
                                    <th colspan="3">Total:</th>
                                    <td colspan="2"><span class="total">0</span></td>
                                </tr>
                                <tr>
                                    <th colspan="3">Discount:</th>
                                    <td colspan="2">
                                        <input type="number" name="discount" class="discount" min="0" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">Final Amount:</th>
                                    <td colspan="2"><span class="final">0</span></td>
                                </tr>

                            </tfoot>
                        </table>
                    </ul>

                    <button class="btn btn-success place-order">Place Order</button>
                </div>

            <div>



            </div>
        </div>

        <div class="category-menu" style="margin-top: 25px;">
            <div class="food-category">
                @foreach ($categories as $category)
                    <div class="card-order mt-4 ml-5">
                        <div class="col-lg-3 col-md-1 choose-food">
                            <div class="bg-image hover-zoom">
                                <img src="{{ asset('uploads/category/' . $category->image) }}" class=""
                                    height="90px" />
                            </div>
                            <button class="category-name mt-2 rounded-2 btn-primary"  data-category-id="{{ $category->id }}"
                                onclick="product({{ $category->id }})">
                                <p style="color:aliceblue;">{{ $category->name }}</p>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <form action="{{ url('search') }}" method="get" class="form-inline mb-4" style="padding:20px;">
                @csrf
                <input class="form-control" type="search" name="search" placeholder="search" style="width: 92%;">
                <input class="btn-btn-success" type="submit" value="Search">
            </form>

            <div class="container">
                <div class="row product-container">
                    <form action="">
                        {{-- <div class="col-md-4 mb-4 d-flex">
                            <div class="card flex-fill">
                                <img class="card-img-top" src=""
                                    alt="">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text"></p>
                                    <button type="submit" class="btn btn-primary mt-auto">Order Now</button>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>


        </div>
    </div>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <script>
        let quantity = 0;
        let finalTotal = 0;
        let total = 0;
        let discount = 0;
        $(document).ready(function(){
            updateprice(quantity,total,discount);
        });
        $('.discount').on('change',function(){
            discount = $(this).val();
            // total -= discount;
            updateprice(quantity,total,discount);
        })
        function product(id) {
            let url = "{{ route('products.get',':id')}}";
            url = url.replace(':id',id);
            console.log(url);
            $.get(url, function(products, status){
                $('.product-container').html("");
                $(products).each(function(index,product){
                    let image = '{{ asset('uploads/product/:image')}}';
                    image = image.replace(':image',product.image);
                    console.log(product);
                    let html = "";
                    html += '<div class="col-md-4 mb-4 d-flex">';
                    html += '        <div class="card flex-fill">';
                    html += '            <img class="card-img-top" src="'+image+'" alt="">';
                    html += '            <div class="card-body">';
                    html += '                <h5 class="card-title">'+product.name+'</h5>';
                    html += '                <p class="card-text"></p>';
                    html += '                <button type="button" class="btn btn-primary mt-auto btn-cart" name="'+product.name+'" pid="'+product.id+'" price="'+product.price+'">Add to Cart  </button>';
                    html += '            </div>';
                    html += '        </div>';
                    html += '    </div>';
                    $('.product-container').append(html);
                })
            });

        }
        $(document).on('click','.btn-cart',function(){
            let id = $(this).attr('pid');
            let  name = $(this).attr('name');
            let  price = $(this).attr('price');
                let cartHtml = "";
                cartHtml += '<tr id="row'+id+'">';
                cartHtml += '    <th>'+name+'</th>';
                cartHtml += '    <th><input id="quantity-'+id+'" type="number" name="" value="1" style="width:70px;"></th>';
                cartHtml += '    <th>'+price+'</th>';
                cartHtml += '   <th id="total-'+id+'">'+parseInt(price)+'</th>';
                cartHtml += '    <th><i class="fa-solid fa-trash-can btn-remove-cart" row-id="row'+id+'" total="total-'+id+'"></i></th>';
                cartHtml += '</tr>';
                if($("#row" + id).length == 0) {
                    $('.current-order').append(cartHtml);
                    quantity += 1;
                }
                else{
                   let oldVal =  $('#quantity-'+id).val();
                    $('#quantity-'+id).val(parseInt(oldVal)+1);
                    let newVal =$('#quantity-'+id).val();
                //    $('#total-'+id).append('sdfsdf');
               let subtotal = parseInt(newVal)*parseInt(price);
                   $('#total-'+id).html(subtotal);

                }
                total += parseInt(price);
            updateprice(quantity,total,discount);


        });


            $(document).on('click','.btn-remove-cart',function(){
                let row = $(this).attr('row-id');
                totId = $(this).attr('total');
                let rowTotal = $('#'+totId).html();
                console.log(rowTotal)
                total -= parseInt(rowTotal);
                quantity -= 1;
                $('#'+row).remove();
                updateprice(quantity,total,discount);

            });

            let updateprice = (quantity,total,discount) => {
                $('.quantity').html(quantity);
                $('.discount').html(discount);
                $('.total').html(total);
                finalTotal = total - discount;
                $('.final').html(finalTotal)
            }




$('.place-order').on('click',function(){
     $.ajax({
        url: '{{route('order.place.order')}}',
        type: 'GET',
        data: {
            total: total,
            discount:discount,
            table_id : 1,
            products

        },
        dataType: 'json',
        success: function (msg) {
            console.log(msg);
        },
        error: function (jqXHR, textStatus) {
            let responseText = jQuery.parseJSON(jqXHR.responseText);
            console.log(responseText);
        }
        });
})


   </script>


</body>

</html>

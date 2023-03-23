<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS</title>

    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/icons/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css">
</head>
<body>


@section('title','Cafe Delian')



<div class="container-fluid menu-order">
    <div class="order mt-3 ">
        <div class="card mt-4 mb-4">
            <div class="card-header">
                <h3>Make Your Order!!!</h3>
            </div>
        </div>

        <div>
            <table id="items">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>
                        <td>
                            <input type="number" name= "quantity[]" id="quantity" class="form-control">
                        </td>

                        <td>
                            <input type="number" name= "quantity[]" id="quantity" class="form-control">
                        </td>

                        <td>
                            <input type="number" name= "quantity[]" id="quantity" class="form-control">
                        </td>

                        <td>
                            <input type="number" name= "quantity[]" id="quantity" class="form-control">
                        </td>
                    </td>
                </tr>
            </tbody>
            </table>
            <p class="payment-info">Amount to pay: Rs 1300</p>
            <div class="payment-button">
                <a href="order.html"><button type="button" class="btn btn-primary order-placing">Place Order</button></a>
                <button type="button" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>

    <div class="category-menu" style="margin-top: 25px;">
        <div class="food-category" >
            @foreach ($categories as $category)
                <div class="card-order mt-4 ml-5">
                    <div class="col-lg-3 col-md-1 choose-food">
                        <div class="bg-image hover-zoom">
                            <img src="{{(asset('uploads/category/'.$category->image))}}"
                            class="" height="90px" />
                        </div>
                        <a href="#" class="category-name" data-category-id="{{$category->id}}">
                            <p>{{$category->name}}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <form action="{{url('search')}}" method="get" class="form-inline" style="float:right; padding:10px;">
            @csrf
            <input class="form-control" type="search" name="search" placeholder="search">
            <input class="btn-btn-success" type="submit" value="Search">
        </form>

        <div class="name-of-food ">
            @foreach ($products as $product)
                <div>
                    <img src="{{asset('assets/images/Homemade-Pizza_1.webp')}}" class="pizza" />
                </div>
                <p class="food-name">{{ $product->name }}</p>
            @endforeach
        </div>
    </div>
</div>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

{{-- <script>
    $.ajax({
   url: '/get-product',
   type: 'GET',
dataType:'json',
success: function(products){

}
error:function(xhr, status, error){}
   // Other AJAX parameters
});

</script>--}}
{{-- <script>
    var categoryId = $(this).data('category-id');
    console.log('Category ID:', categoryId);

    // Define the `category` variable to use in the AJAX request
    var category = encodeURIComponent(categoryId);

    // Make AJAX request to retrieve products in the selected category
    $.getJSON('{{ route("getProductsByCategory", ["category" => $category->id]) }}', function(data) {
        console.log('Response:', data);
        var html = '';

        // Loop through the products and generate HTML for each one
        $.each(data, function(index, product) {
            html += '<div>';
            html += '<img src="' + product.image + '" class="pizza" />';
            html += '<p class="food-name">' + product.name + '</p>';
            html += '</div>';
        });

        // Display the HTML in the name-of-food div
        $('.name-of-food').html(html);
    })
    .fail(function() {
        alert('Error retrieving products.');
    });
</script> --}}

{{-- <script>
    function fetch(){
        $.ajax({
            url:getProductsByCategory,
            type:"GET",
            dataType:"JSON",
            data.JSON.stringify({});
            success:function(data){
               $('.messages').append("<li>"+JSON.stringify(data)+"</li>")
            }
        });
    }
</script> --}}
</body>
</html>

{{--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div> --}}

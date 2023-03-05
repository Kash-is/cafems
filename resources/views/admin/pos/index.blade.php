
<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
<link href="{{asset('assets/icons/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css">

@section('title','Cafe Delian')



<div class="container-fluid menu-order">
    <div class="order mt-3 ">
        <div>
            <table>
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
                        <th>Pizza</th>
                        <th>500</th>
                        <th><i class="fa-solid fa-plus addIcon"></i> 1 <i class="fa-solid fa-minus addIcon"></i></th>
                        <th>500</th>
                    </tr>

                    <tr>
                        <th>Burger</th>
                        <th>300</th>
                        <th><i class="fa-solid fa-plus addIcon"></i> 2 <i class="fa-solid fa-minus addIcon"></i></th>
                        <th>600</th>
                    </tr>

                    <tr>
                        <th>Coke</th>
                        <th>200</th>
                        <th><i class="fa-solid fa-plus addIcon"></i> 1 <i class="fa-solid fa-minus addIcon"></i></th>
                        <th>200</th>
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

    <div class="category-menu">
        <div class="card-order mt-3 ml-5">

            <div class="col-lg-3 col-md-1 choose-food">
                <div class="bg-image hover-zoom">
                    <img src="{{asset('assets/images/CherryDumpCakeHERO-787ad562cfe7414ea3ff62f7e66fa97a.webp')}}"
                    class="w-75" height="90px" />
                </div>
                <p>Fast food</p>
            </div>

            <div class="col-lg-3 col-md-1 choose-food">
                <div class="bg-image hover-zoom">
                    <img src="{{asset('assets/images/CherryDumpCakeHERO-787ad562cfe7414ea3ff62f7e66fa97a.webp')}}"
                    class="w-75" height="90px" />
                    <p>Desert</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-1 choose-food">
                <div class="bg-image hover-zoom">
                    <img src="{{asset('assets/images/CherryDumpCakeHERO-787ad562cfe7414ea3ff62f7e66fa97a.webp')}}"
                    class="w-75" height="90px" />
                    <p>Khana</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-1 choose-food">
                <div class="bg-image hover-zoom">
                    <img src="{{asset('assets/images/CherryDumpCakeHERO-787ad562cfe7414ea3ff62f7e66fa97a.webp')}}"
                    class="w-75" height="90px" />
                <p>Salad</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-1 choose-food">
            <div class="bg-image hover-zoom">
                <img src="{{asset('assets/images/CherryDumpCakeHERO-787ad562cfe7414ea3ff62f7e66fa97a.webp')}}"
                class="w-75" height="90px" />
                <p>Soft Drinks</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-1 choose-food">
            <div class="bg-image hover-zoom">
                <img src="{{asset('assets/images/CherryDumpCakeHERO-787ad562cfe7414ea3ff62f7e66fa97a.webp')}}"
                    class="w-75" height="90px" />
                <p>Hard Drinks</p>
            </div>
        </div>
    </div>


    <div class="food-menu mt-5 ml-5">
        <div class="name-of-food">
             <div>
                 <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
                  />
             </div>
             <p class="food-name">Pizza</p>
        </div>

        <div class="name-of-food">
            <div>
                <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
                 />
            </div>
            <p class="food-name">Pizza</p>
       </div>

       <div class="name-of-food">
             <div>
                <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
                  />
             </div>
             <p class="food-name">Pizza</p>
        </div>

        <div class="name-of-food">
            <div>
                <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
                 />
            </div>
            <p class="food-name">Pizza</p>
       </div>

       <div class="name-of-food">
        <div>
            <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
             />
        </div>
        <p class="food-name">Pizza</p>
   </div>

   <div class="name-of-food">
        <div>
            <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
             />
        </div>
        <p class="food-name">Pizza</p>
    </div>

    <div class="name-of-food">
        <div>
            <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
             />
        </div>
        <p class="food-name">Pizza</p>
    </div>

    <div class="name-of-food">
        <div>
            <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
             />
        </div>
        <p class="food-name">Pizza</p>
    </div>

    <div class="name-of-food">
        <div>
            <img src="{{asset('assets/images/72375570.webp')}}" class="pizza"
             />
        </div>
        <p class="food-name">Pizza</p>
    </div>



    </div>
</div>




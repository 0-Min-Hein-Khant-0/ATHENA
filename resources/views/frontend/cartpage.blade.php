

@extends('frontendtemplate')

@section('content')
  <div class="container">

    <h2 class="text-center text-success mt-5">Shopping Cart</h2>



    <div class="row my-5">

      
      <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th> Name </th>
              <th>Product</th>
              <th> Qty </th>
              <th> Price </th>
              <th> Total </th>
            </tr>
          </thead>
          <tbody id="shoppingcart_table">
          </tbody>
          <tfoot id="shoppingcart_tfoot">
            <tr>
              <td colspan="8" class="text-info">
                <h3 class="text-right "> Total : <span class="cartTotal"></span> </h3>
              </td>
            </tr>
            <tr> 
              <td colspan="5"> 

               
                <textarea class="form-control notes" id="notes" placeholder="Any Request..." required=""></textarea>
              </td>
              <td colspan="3">
                @role('customer')
                  <button class="btn btn-success checkout">Checkout</button>
                 <a href="{{route('mainpage')}}"> <button class="btn btn-info">Go To Shopping</button></a>
                @else
                  <a href="{{route('signinpage')}}"><button class="btn btn-success">Sign in Checkout</button></a>
                @endrole
                </form>
                
                  {{-- <a href="#" class="btn btn-secondary btn-block mainfullbtncolor checkout"> Check Out </a> --}}
                
              </td>
            </tr>
          </tfoot>
        </table>
    </div>
    <!-- /.row -->

  </div>

  
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('my_asset/Js/custom.js')}}"></script>

    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      
      $(document).ready(function () {


        $('.checkout').click(function () {
          let notes = $('.notes').val();
          let order = localStorage.getItem('items'); // JSON String
          $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
            alert(response.msg);
            localStorage.clear();

            location.reload();
            location.href="/";
          })
        })
      })
    </script>
@endsection
@extends('frontendtemplate')

@section('content')
  <div class="container">

    <div class="row my-5">

      <h2>Shopping Cart</h2>
      <table class="table">
          <thead>
            <tr>
              <th colspan="3"> Product </th>
              <th colspan="3"> Qty </th>
              <th> Price </th>
              <th> Total </th>
            </tr>
          </thead>
          <tbody id="shoppingcart_table">
          </tbody>
          <tfoot id="shoppingcart_tfoot">
            <tr>
              <td colspan="8">
                <h3 class="text-right"> Total : <span class="cartTotal"></span> </h3>
              </td>
            </tr>
            <tr> 
              <td colspan="5"> 
                <textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
              </td>
              <td colspan="3">
                <?php if(isset($_SESSION['login_user'])) {?>
                <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
                  Check Out 
                </button>
                <?php }else{ 
                  $_SESSION['cartURL'] = 'cart.php';
                ?>
                  <a href="login.php" class="btn btn-secondary btn-block mainfullbtncolor"> Check Out </a>
                <?php } ?>
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
@endsection
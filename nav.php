<style>


.container {
  padding: 2rem 0rem;
}

.table-image {
  
  thead {
    td, th {
      border: 0;
      color: #666;
      font-size: 0.8rem;
    }
  }
  
  td, th {
    vertical-align: middle;
    text-align: center;
    
    &.qty {
      max-width: 2rem;
    }
  }
}

.price {
  margin-left: 1rem;
}

.modal-footer {
  padding-top: 0rem;
}
</style>



<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand logoName" href="#">UIU CAFE</a>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link ml-12" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>  
    </ul>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">My Cart</button></a> -->
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#cartModal">
    My Cart (0)
  </button>
        
        
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
     
    </ul>

    <div>

</nav>



<div class="container">
   
</div>

<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Your Shopping Cart
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-image">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Qty</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="w-25">
                <img src="image/kichuri.jpg" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>Kichuri</td>
              <td>65 BDT</td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
              <td>130 BDT</td>
              <td>
                <a href="#" class="btn btn-danger btn-sm">
                  <i class="fa fa-times"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">130  BDT</span></h5>
        </div>
      </div>
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Checkout</button>
      </div>
    </div>
  </div>
</div>

<script>

// $(document).ready(function() {  
//   $('#cartModal').modal('show');
// });
</script>
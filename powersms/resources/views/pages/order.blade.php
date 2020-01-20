@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">ORDERS</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Datatable</li>
            </ol>
        </div>
        
        <div class="">
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                   
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                          <thead>
                            
          <tr>
            
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>OrderID</th>
            <th>Status</th>
            <th>Date</th>
            <th class="op-0">&nbsp;</th>
            <th class="op-0">&nbsp;</th>
          </tr>
        </thead>
                            <tbody>
         @foreach ($orderd as $d)
          <tr>
            
            <td>{{$d->id}}</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">{{$d->product_name}}</a> </td>
            <td>{{$d->price}}</td>
            <td>{{$d->qty}}</td>
            <td>{{$d->order_id}}</td>
            <td>{{$d->status}}</td>
            <td>{{$d->created_at}}</td>
            <td  class="text-center"><button type="button" data-orderd-id="1" class="confirmorder btn btn-info" id="{{$d->id}}" >confirm</button> </td>
                     <!-- <td class="text-center"><a href="{{url('/deletec/'.$d->id)}}" ><i class="fa fa-trash text-danger text-danger"></i></a></td> -->
            <!-- <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td> -->
            <!-- <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td> -->
          </tr>
               @endforeach
        </tbody>
      </table>
   </table>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
  <!--   <div class="container-fluid">
          <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                   
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                          <thead>
                            
          <tr>
            
            <th>ID</th>
            <th>Customer</th>
            <th>Delivery</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Date</th>
            <th class="op-0">&nbsp;</th>
            <th class="op-0">&nbsp;</th>
          </tr>
        </thead>
                            <tbody>
         @foreach ($order as $d)
          <tr>
            
            <td>{{$d->id}}</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Nina Fox</a> </td>
            <td>FedEx</td>
            <td>$456</td>
            <td>Out of Stock</td>
            <td>19.07.2018, 12:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
               @endforeach
        </tbody>
      </table>
   </table>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="mt-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>

 <div id="confirmordermodel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {!! Form::open(['action'=>'OrderController@confirm','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}

      <div class="modal-header">
         
        <h4 class="modal-title text-center" id="gridModalLabel" >Confirm your orders</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid" id="product_detail" class="image">
          <br>
          <div class="row">
            <div class="col-sm-9 col-example">
             <input type="" name="orderd_id" id="orderd_id" hidden="hidden">
              <div class="form-group">
                        <label class="control-label text-primary font-20">1. Did you have the product, please select Yes.<br>2. I don't the product, select No<br> 3. Have u deliv the product</label>
                        <div>
                          <select class="form-control" name="status">
                            <option>Select </option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            <option value="del">Delivery</option>
                          </select>
                          <!-- <input type="text" class="form-control font-14"  name="cat_type"  placeholder="cat type"> -->
                        </div>
                      </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal">Confirm</button>
        <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
       
      </div>
            {!! Form::close() !!}
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // body...
        var s;
        $(document).on('click',".confirmorder",function(){
            // $(this).addClass('confirmorder-trigger-clicked');
              s= $(this).attr("id"); 
             // alert(s +"dfgmndfngnmfd");
            var options={
                'backdrop':'static'
            };
            $('#confirmordermodel').modal(options)
            })
        $('#confirmordermodel').on('show.bs.modal',function(){
            // val s= $(this).attr("id"); 
                var el=$(".confirmorder-trigger-clicked");
                var row=el.closest(".data-row");
                var id=s;
                $("#orderd_id").val(id);
              // alert(id)
        })
    })
</script>
@endsection
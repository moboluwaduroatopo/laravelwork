@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Categories</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Categories</li>
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
  <!-- Column -->
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-20 mt-0 align-self-center">Add new categories</h5>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="relative">
              <div id="amazingslider-wrapper-1" class="mb-40">
                <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                  <ul class="amazingslider-slides" style="display:none;">
                    <li><a href="../assets/images/gallery/a-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/a.jpg" alt="" title="" /></a> </li>
                    <li><a href="../assets/images/gallery/4-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/4.jpg" alt="" title="" /></a> </li>
                    <li><a href="../assets/images/gallery/13-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/13.jpg" alt="" title="" /></a> </li>
                    <li><a href="../assets/images/gallery/19-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/19.jpg" alt="" title="" /></a> </li>
                  </ul>
                  <ul class="amazingslider-thumbnails" style="display:none;">
                    <li><img src="../assets/images/gallery/a-tn.jpg" alt="" title="" /></li>
                    <li><img src="../assets/images/gallery/4-tn.jpg" alt="" title="" /></li>
                    <li><img src="../assets/images/gallery/13-tn.jpg" alt="" title="" /></li>
                    <li><img src="../assets/images/gallery/19-tn.jpg"  alt="" title="" /></li>
                  </ul>
                </div>
              </div>
            </div>
            {!! Form::open(['action'=>'CategoriesController@store','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}
            <div class="upload-photo">
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label class="control-label text-primary font-12">cat name</label>
                      <div>
                        <input type="text" class="form-control font-14"  name="cat_name"  placeholder="cat name">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="control-label text-primary font-12">Product Name</label>
                        <div>
                          <input type="text" class="form-control font-14"  name="cat_type"  placeholder="cat type">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn waves-effect waves-light btn-primary" >Save</button>    
                    
                    {!! Form::close() !!}
              {{-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" name="productfile"/> --}}
            </div>
          </div>
          <!-- End of product slider -->
          <div class="col-lg-8 col-md-8">
            <div class="row">
              <div class="form-wrap form-wrap2 col-12 mt-4">
                <div class="form-horizontal" >
                    
                    <div class="card">
                        <div class="card-body">
    <div class="table-responsive">
            
            <table id="demo-foo-addrow" class="table product-table table-hover contact-list" data-page-size="10">
                                    <thead>
                  <tr>
                     <th>ID</th>
                     <th>cat_name</th>
                     <th>cat_type</th>
                     <td class="op-0">&nbsp;</td>
                    <td class="op-0">&nbsp;</td>
                    
                    
                  </tr>
                </thead>
                                   
    <tbody>
            @foreach ($cat as $d)
            <tr>
                <td>{{$d->id}}</td>
                    
            <td>{{$d->cat_name}} </td>
                <td>{{$d->cat_type}}</td>
                    
                     <td  class="text-center"><a href="/cat/{{$d->id}}/edit" ><i class="fa fa-pencil text-primary"></i></a></td>
                     <td class="text-center"><a href="{{url('/deletecat/'.$d->id)}}" ><i class="fa fa-trash text-danger text-danger"></i></a></td></tr>
                 
             @endforeach
             
               
                </tbody>
            
    
                                   <tfoot>
                                        <tr>
                                            
                                            <td colspan="7">
                                                <div class="text-right">
                                                    <ul class="pagination"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
            </div>                          
    
                      </div>
                    </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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

@endsection
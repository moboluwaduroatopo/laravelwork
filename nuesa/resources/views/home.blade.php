@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Profile Details</h2>

      <!--Grid row-->
      <div class="row">

            <div class="col-md-4 mb-4">

          <img src="upload/{{Auth::user()->user_image}}">
{{-- <label>update file
         <input type="file" class="btn btn-success">
</label> --}}

                </div>



        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              
             
              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="{{Auth::user()->role}} {{Auth::user()->name}}"  disabled='disabled'>
              
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="{{Auth::user()->chapter_name}}"  disabled="disabled">
              
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->chapter_address}}" disabled="disabled">
               
              </div>
                <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="{{Auth::user()->phone}}" disabled="disabled">
                
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="{{Auth::user()->role}}" disabled="disabled">
                
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->address}}" disabled="disabled">
                
              </div>


             

             

              
              
             
              <hr class="mb-4">
          
<!-- Button trigger modal -->
<button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#basicExampleModal">
       Update Profile
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" action="/profile" method="POST">
                
                    <input type="file" id="file-upload" name="file" required />
                    <label for="file-upload" class="btn btn-success text-white">Upload file</label>
                    <div id="file-upload-filename"></div>
                     <!--email-->
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                
              <div class="md-form mb-5">
                    <input type="text" id="email" class="form-control" value="{{Auth::user()->name}}" name="name" >
                  
                  </div>
    
                  <!--address-->
                  <div class="md-form mb-5">
                    <input type="text" id="address" class="form-control" value="{{Auth::user()->chapter_name}}" name="chapter_name" >
                  
                  </div>
    
                  <!--address-2-->
                  <div class="md-form mb-5">
                    <input type="text" id="address-2" class="form-control" name="chapter_address" value="{{Auth::user()->chapter_address}}" >
                   
                  </div>
                    <div class="md-form mb-5">
                    <input type="text" id="email" class="form-control" value="{{Auth::user()->phone}}" name="phone"> 
                  </div>

                  <div class="md-form mb-5">
                        <input type="text" id="address-2" class="form-control" name="address" value="{{Auth::user()->address}}" >
                        
                      </div>
                    {{-- <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->address}}" > --}}
            </form>
              

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success text-white">Save changes</button>
            </div>
          </div>
        </div>
      </div>
            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
</div>
        <!--Grid column-->
        
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
 
  
@endsection

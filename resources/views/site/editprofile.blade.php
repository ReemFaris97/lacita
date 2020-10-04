@extends('site.layout')
@section('title' , 'La Cita || Edit Profile')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/filepond-plugin/filepond-plugin-image-preview.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/filepond-plugin/filepond.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
<style>
   .navbar,
   .footer,
   .copyright {
      display: block !important;
   }
</style>
@endsection
@section('content')
<!-- /////////////////////||||||||||| Start Breadcrumbs |||||||||||||||||||| -->
<!-- <section class="featured_sec">
   <div class="container">
      <div class="head-title">
         <h4 class="srch_city"><a href="{{url('/')}}">Home</a> .
            Edit Profile</h4>
      </div>
   </div>
</section> -->
<!-- /////////////////////||||||||||| End Breadcrumbs |||||||||||||||||||| -->
<!-- /////////////////////||||||||||| Start Sign In Section |||||||||||||||||||| -->
<div class="login_inner">
   <div class="container">
      <div class="box_outer">
         <div class="box-top">
            <a href="{{url('/')}}" class="login-logo"><img src="{{asset('website/dist/img/logo.png')}}" alt="La Cita">
            </a>
            <a href="{{url('/')}}" class="to_site"><i class="fas fa-arrow-left"></i></a>
         </div>
         <div class="form-box">
            <form class="logForm" action="{{url('/')}}">
               <div class="row">
                  <div class="col-xs-12">
                  <div class="edit-profile">
                     <input type="file" class="filepond" name="filepond" accept="image/png, image/jpeg, image/gif" id="imginput" />
                  </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label>first name</label>
                        <input type="text" class="form-control" value="Reem" placeholder="Your First Name">
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label>last name</label>
                        <input type="text" class="form-control" value="Faris" placeholder="Your Last Name">
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label>mobile number</label>
                        <input type="number" class="form-control padd_left" placeholder="Your Mobile Number">
                        <div class="slct_n">
                           <select class="select-2">
                              <option>+20</option>
                              <option>+966</option>
                              <option>+20</option>
                              <option>+966</option>
                              <option>+20</option>
                              <option>+966</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Your Email address" value="reem@admin.com">
                     </div>
                  </div>
               </div>

               <button type="submit" class="big_btn">save</button>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- /////////////////////|||||||||||End Sign In Section |||||||||||||||||||| -->

@endsection
@section('scripts')
<!----select 2---->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
   $(document).ready(function() {
      $('.select-2').select2();
   })
</script>
<!---------filepond-plugin--------->
<script src="{{asset('website/dist/js/filepond-plugin/file-encode.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/file-validate-type.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/image-exif-orientation.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/image-crop.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/image-resize.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/image-transform.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/image-preview.min.js')}}"></script>
<script src="{{asset('website/dist/js/filepond-plugin/filepond.min.js')}}"></script>
<script>
   FilePond.registerPlugin(
      // encodes the file as base64 data
      FilePondPluginFileEncode,

      // validates files based on input type
      FilePondPluginFileValidateType,

      // corrects mobile image orientation
      FilePondPluginImageExifOrientation,

      // previews the image
      FilePondPluginImagePreview,

      // crops the image to a certain aspect ratio
      FilePondPluginImageCrop,

      // resizes the image to fit a certain size
      FilePondPluginImageResize,

      // applies crop and resize information on the client
      FilePondPluginImageTransform
   );

   // Select the file input and use create() to turn it into a pond
   // in this example we pass properties along with the create method
   // we could have also put these on the file input element itself
   FilePond.create(
      document.querySelector('#imginput'), {
         labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
         imagePreviewHeight: 170,
         imageCropAspectRatio: '1:1',
         imageResizeTargetWidth: 200,
         imageResizeTargetHeight: 200,
         stylePanelLayout: 'compact circle',
         styleLoadIndicatorPosition: 'center bottom',
         styleButtonRemoveItemPosition: 'center bottom'
      }
   );
</script>
@endsection
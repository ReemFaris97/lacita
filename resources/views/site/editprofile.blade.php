@extends('site.layout')
@section('title' , 'حوافل || تعديل الحساب الشخصى')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/filepond-plugin/filepond-plugin-image-preview.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/filepond-plugin/filepond.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
   <div class="single-workdiv">
      <h3 class="titlebread">تعديل الحساب الشخصي</h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('my-profile')}}">حسابى</a> </p>
   </div>
   <img class="absimgbread" alt="" src="{{asset('website/dist/img/grass.png')}}">
   <div id="leaves">
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
   </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="my_profile edit-profile">
   <div class="container">
      <form action="{{url('my-profile')}}" class="logForm" autocomplete="off">
         <div class="row">
            <div class="col-xs-12">
               <input type="file" class="filepond" name="filepond" accept="image/png, image/jpeg, image/gif" id="imginput" />
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <input class="my_inpt" id="inp1" type="text" readonly onfocus="this.removeAttribute('readonly');" required>
                  <label class="my_lbl" for="inp1"><span class="my_span">اسم المستخدم</span></label>
                  <p class="new-icon"><i class="fas fa-user"></i></p>
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <input class="my_inpt" id="inp3" type="email" readonly onfocus="this.removeAttribute('readonly');" required>
                  <label class="my_lbl" for="inp3"><span class="my_span">البريد الإلكترونى</span></label>
                  <p class="new-icon"><i class="fas fa-envelope"></i></p>
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <input class="my_inpt" id="inp2" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
                  <label class="my_lbl" for="inp2"><span class="my_span">رقم الجوال</span></label>
                  <p class="new-icon"><i class="fas fa-phone"></i></p>
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <input class="my_inpt" id="inp4" type="text" readonly onfocus="this.removeAttribute('readonly');" required>
                  <label class="my_lbl" for="inp4"><span class="my_span">المدينة</span></label>
                  <p class="new-icon"><i class="fas fa-map-marker-alt"></i></p>
               </div>
            </div>
            <div class="col-xs-12">
         <div class="log_anchors flex-r">
               <button type="submit" class="btn-hvr"><span class="z-span">حفظ</span></button>
         </div>
            </div>
         </div>
      </form>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
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
	document.querySelector('#imginput'),
	{
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
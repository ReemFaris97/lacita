@extends('site.layout')
@section('title' , 'حوافل || عناوينى')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
   <div class="single-workdiv">
      <h3 class="titlebread"> عناوينى </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('my-profile')}}">حسابى</a> / عناوينى</p>
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

<!-- /////////////////////||||||||||| start my_adress |||||||||||||||||||| -->
<section class="my_adress">
   <div class="container">
      <div class="row">
          <!-- one address item -->
          <div class="col-sm-6 col-xs-12">
              <div class="adres_item">
                  <h3>عنوان المنزل</h3>
                  <p> السعودية - القصيم - قسم أول - طريق الملك فهد</p>
                  <p>القصيم - قسم أول</p>
                  <p>السعودية</p>
                  <div class="flex-r">
                      <button type="button" data-toggle="modal" data-target="#newAdrsModal">تغيير العنوان</button>
                      <button type="button" class="remove_adres"><i class="far fa-trash-alt"></i></button>
                  </div>
              </div>
          </div>
          <!-- one address item -->
          <div class="col-sm-6 col-xs-12">
              <div class="adres_item">
                  <h3>عنوان المنزل</h3>
                  <p> السعودية - القصيم - قسم أول - طريق الملك فهد</p>
                  <p>القصيم - قسم أول</p>
                  <p>السعودية</p>
                  <div class="flex-r">
                      <button type="button" data-toggle="modal" data-target="#newAdrsModal">تغيير العنوان</button>
                      <button type="button" class="remove_adres"><i class="far fa-trash-alt"></i></button>
                  </div>
              </div>
          </div>
          <!-- one address item -->
          <div class="col-sm-6 col-xs-12">
              <div class="adres_item">
                  <h3>عنوان المنزل</h3>
                  <p> السعودية - القصيم - قسم أول - طريق الملك فهد</p>
                  <p>القصيم - قسم أول</p>
                  <p>السعودية</p>
                  <div class="flex-r">
                      <button type="button" data-toggle="modal" data-target="#newAdrsModal">تغيير العنوان</button>
                      <button type="button" class="remove_adres"><i class="far fa-trash-alt"></i></button>
                  </div>
              </div>
          </div>
          <!-- new address item -->
          <div class="col-xs-12">
              <button class="btn-hvr" type="button" data-toggle="modal" data-target="#newAdrsModal"><span class="z-span"><i class="fas fa-plus"></i>إضافة عنوان</span></button>
          </div>
      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End my_adress |||||||||||||||||||| -->

@include('site.modals.new-adrs-modal')

@endsection

@section('scripts')
<!---- select2 init --->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
    $(document).ready(function() {
         $(".js-select2").select2();
         $('select:not(.normal)').each(function () {
                $(this).select2({
                    dropdownParent: $(this).parent()
                });
            });
    });
</script>
<!---- remove an address item --->
<script>
        $(".remove_adres").click(function() {
            $(this).parents(".adres_item").fadeOut(300);
        });
    </script>
    <!-------------- MAp --------------->
<script>
  function initAutocomplete() {
  const map = new google.maps.Map(document.getElementById("adrs_map"), {
    center: { lat: -33.8688, lng: 151.2195 },
    zoom: 13,
    mapTypeId: "roadmap"
  });
  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });
  let markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    // Clear out the old markers.
    markers.forEach(marker => {
      marker.setMap(null);
    });
    markers = [];
    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();
    places.forEach(place => {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };
      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location
        })
      );

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
</script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF-7f4KwYdJHXqb4DFU5q341ry19VnnGg&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
@endsection
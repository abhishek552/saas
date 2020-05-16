
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
<?php
if (true == "" || true == "index") { ?>
  <script src="{{ asset('assets/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<?php
}elseif (true == "index_0") { ?>
  <script src="{{ asset('assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<?php
}elseif (true == "bootstrap_card") { ?>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<?php
}elseif (true == "bootstrap_modal") { ?>
  <script src="{{ asset('assets/modules/prism/prism.js') }}"></script>
<?php
}elseif (true == "layout_transparent") { ?>
  <script src="{{ asset('assets/modules/sticky-kit.js') }}"></script>
<?php
}elseif (true == "components_gallery") { ?>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<?php
}elseif (true == "components_multiple_upload") { ?>
  <script src="{{ asset('assets/modules/dropzonejs/min/dropzone.min.js') }}"></script>
<?php
}elseif (true == "components_statistic") { ?>
  <script src="{{ asset('assets/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>
<?php
}elseif (true == "components_table") { ?>
  <script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<?php
}elseif (true == "components_user") { ?>
  <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<?php
}elseif (true == "forms_advanced_form") { ?>
  <script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
  <script src="{{ asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<?php
}elseif (true == "forms_editor") { ?>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/modules/codemirror/lib/codemirror.js') }}"></script>
  <script src="{{ asset('assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<?php
}elseif (true == "gmaps_advanced_route" || true == "gmaps_draggable_marker" || true == "gmaps_geocoding" || true == "gmaps_geolocation" || true == "gmaps_marker" || true == "gmaps_multiple_marker" || true == "gmaps_route" || true == "gmaps_simple") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="{{ asset('assets/modules/gmaps.js') }}"></script>
<?php
}elseif (true == "modules_calendar") { ?>
  <script src="{{ asset('assets/modules/fullcalendar/fullcalendar.min.js') }}"></script>
<?php
}elseif (true == "modules_chartjs") { ?>
  <script src="{{ asset('assets/modules/chart.min.js') }}"></script>
<?php
}elseif (true == "modules_datatables") { ?>
  <script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<?php
}elseif (true == "modules_owl_carousel") { ?>
  <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<?php
}elseif (true == "modules_sparkline") { ?>
  <script src="{{ asset('assets/modules/jquery.sparkline.min.js') }}"></script>
<?php
}elseif (true == "modules_sweet_alert") { ?>
  <script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<?php
}elseif (true == "modules_toastr") { ?>
  <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
<?php
}elseif (true == "modules_vector_map") { ?>
  <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>
<?php
}elseif (true == "auth_register") { ?>
  <script src="{{ asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<?php
}elseif (true == "features_post_create") { ?>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<?php
}elseif (true == "features_posts") { ?>
  <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<?php
}elseif (true == "features_profile") { ?>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<?php
}elseif (true == "features_setting_detail") { ?>
  <script src="{{ asset('assets/modules/codemirror/lib/codemirror.js') }}"></script>
  <script src="{{ asset('assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
<?php
}elseif (true == "features_tickets") { ?>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<?php
}elseif (true == "utilities_contact") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="{{ asset('assets/modules/gmaps.js') }}"></script>
<?php
} ?>

  <!-- Page Specific JS File -->
<?php
if (true == "" || true == "index") { ?>
<?php
}elseif (true == "index_0") { ?>
  <script src="{{ asset('assets/js/page/index-0.js') }}"></script>
<?php
}elseif (true == "bootstrap_modal") { ?>
  <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
<?php
}elseif (true == "components_chat_box") { ?>
  <script src="{{ asset('assets/js/page/components-chat-box.js') }}"></script>
<?php
}elseif (true == "components_multiple_upload") { ?>
  <script src="{{ asset('assets/js/page/components-multiple-upload.js') }}"></script>
<?php
}elseif (true == "components_statistic") { ?>
  <script src="{{ asset('assets/js/page/components-statistic.js') }}"></script>
<?php
}elseif (true == "components_table") { ?>
  <script src="{{ asset('assets/js/page/components-table.js') }}"></script>
<?php
}elseif (true == "components_user") { ?>
  <script src="{{ asset('assets/js/page/components-user.js') }}"></script>
<?php
}elseif (true == "forms_advanced_form") { ?>
  <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
<?php
}elseif (true == "gmaps_advanced_route") { ?>
  <script src="{{ asset('assets/js/page/gmaps-advanced-route.js') }}"></script>
<?php
}elseif (true == "gmaps_draggable_marker") { ?>
  <script src="{{ asset('assets/js/page/gmaps-draggable-marker.js') }}"></script>
<?php
}elseif (true == "gmaps_geocoding") { ?>
  <script src="{{ asset('assets/js/page/gmaps-geocoding.js') }}"></script>
<?php
}elseif (true == "gmaps_geolocation") { ?>
  <script src="{{ asset('assets/js/page/gmaps-geolocation.js') }}"></script>
<?php
}elseif (true == "gmaps_marker") { ?>
  <script src="{{ asset('assets/js/page/gmaps-marker.js') }}"></script>
<?php
}elseif (true == "gmaps_multiple_marker") { ?>
  <script src="{{ asset('assets/js/page/gmaps-multiple-marker.js') }}"></script>
<?php
}elseif (true == "gmaps_route") { ?>
  <script src="{{ asset('assets/js/page/gmaps-route.js') }}"></script>
<?php
}elseif (true == "gmaps_simple") { ?>
  <script src="{{ asset('assets/js/page/gmaps-simple.js') }}"></script>
<?php
}elseif (true == "modules_calendar") { ?>
  <script src="{{ asset('assets/js/page/modules-calendar.js') }}"></script>
<?php
}elseif (true == "modules_chartjs") { ?>
  <script src="{{ asset('assets/js/page/modules-chartjs.js') }}"></script>
<?php
}elseif (true == "modules_datatables") { ?>
  <script src="{{ asset('assets/js/page/modules-datatables.js') }}"></script>
<?php
}elseif (true == "modules_ion_icons") { ?>
  <script src="{{ asset('assets/js/page/modules-ion-icons.js') }}"></script>
<?php
}elseif (true == "modules_owl_carousel") { ?>
  <script src="{{ asset('assets/js/page/modules-slider.js') }}"></script>
<?php
}elseif (true == "modules_sparkline") { ?>
  <script src="{{ asset('assets/js/page/modules-sparkline.js') }}"></script>
<?php
}elseif (true == "modules_sweet_alert") { ?>
  <script src="{{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
<?php
}elseif (true == "modules_toastr") { ?>
  <script src="{{ asset('assets/js/page/modules-toastr.js') }}"></script>
<?php
}elseif (true == "modules_vector_map") { ?>
  <script src="{{ asset('assets/js/page/modules-vector-map.js') }}"></script>
<?php
}elseif (true == "auth_register") { ?>
  <script src="{{ asset('assets/js/page/auth-register.js') }}"></script>
<?php
}elseif (true == "features_post_create") { ?>
  <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
<?php
}elseif (true == "features_posts") { ?>
  <script src="{{ asset('assets/js/page/features-posts.js') }}"></script>
<?php
}elseif (true == "features_setting_detail") { ?>
  <script src="{{ asset('assets/js/page/features-setting-detail.js') }}"></script>
<?php
}elseif (true == "utilities_contact") { ?>
  <script src="{{ asset('assets/js/page/utilities-contact.js') }}"></script>
<?php
} ?>

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
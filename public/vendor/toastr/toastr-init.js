(function ($) {
  "use strict";

  // Define toastr options
  const toastrOptions = {
    closeButton: true,
    debug: false,
    newestOnTop: true,
    progressBar: true,
    positionClass: "toast-top-right demo_rtl_class",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    tapToDismiss: false,
    closeHtml:
      '<span class="progress-count"></span> <i class="close-toast fi fi-rr-cross-small"></i> <a href="#">Suggest</a>',
  };

  // Show toastr notification
  toastr.success(
    "Complete your profile to make it easier to finance",
    "Complete your profile!",
    toastrOptions
  );
})(jQuery);

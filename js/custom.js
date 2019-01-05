// grab an element
var headElem = document.querySelector(".header");
// construct an instance of Headroom, passing the element
var headroom = new Headroom(headElem, {
    // vertical offset in px before element is first unpinned
    "offset": 55,
    "tolerance": 8,
  "classes" : {
    // when element is initialised
    initial : "headroom",
    // when scrolling up
    pinned : "headroom--pinned",
    // when scrolling down
    unpinned : "headroom--unpinned",
    // when above offset
    top : "headroom--top",
    // when below offset
    notTop : "headroom--not-top",
    // when at bottom of scoll area
    bottom : "headroom--bottom",
    // when not at bottom of scroll area
    notBottom : "headroom--not-bottom"
}
});

headroom.init();


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

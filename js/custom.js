// grab an element
var headElem = document.querySelector(".header");
// construct an instance of Headroom, passing the element
var headroom = new Headroom(headElem, {
    // vertical offset in px before element is first unpinned
    "offset": 55,
    "tolerance": 5,
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

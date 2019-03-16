$(document).ready(function(){
    var state = false,
        links = $('.navbar-responsive__link')
    $('#nav-icon').click(function(){
        $(this).toggleClass('open');
        if(!state) {
            $('.navbar-responsive').css("transform", "translate3d(0,0,0)")
            state = true
        } else {
            $('.navbar-responsive').css("transform", "translate3d(-100%,0,0)")
            state = false
        }
    })
})

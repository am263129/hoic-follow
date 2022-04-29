var menuExpand = false
const scrolltoTop = () => {
  $('html, body').animate({scrollTop:0}, '300');
};

const toggleMenu = () => {
  if(!menuExpand){
    $("#sidebar").removeClass("-translate-x-full")
    $("#sidebar").addClass("translate-x-0")
    $("#side-mask").removeClass("hidden")
  }
  else{
    $("#sidebar").removeClass("translate-x-0")
    $("#sidebar").addClass("-translate-x-full")
    $("#side-mask").addClass("hidden")
  }
  menuExpand = !menuExpand
}
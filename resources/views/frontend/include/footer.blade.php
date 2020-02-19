<script src="{{ asset('public/frontend/assets/js/script.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/jquery.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/popper.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/bootsrap.js') }}"></script>



<script type="text/javascript">
$(document).ready(function(){
  
      startAnimation();
      
   

     function startAnimation(){
      jQuery('.skills').each(function(){

        jQuery(this).find('.skillbar').animate({
          width:jQuery(this).attr('data-percent')
        },6000); 
        
    });
     }                
});
</script>


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column2");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    $(".btn").removeClass("active")
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


$(document).ready(function(){

  $("#registerForm1").submit(processRegisterForm);
  $("#loginForm1").submit(processLoginForm);


})


function processRegisterForm(event){
  $form = $(this);
  $button = $("#main_btn");
  console.log($button);
  $("#checkerror").html("");

  if($("#check").prop("checked") == true){
    $button.html("Processing...");
    return true;
  }else{
     event.preventDefault()
    $("#checkerror").html("Please check the notice");
  }
  


}

function processLoginForm(event){
  $form = $(this);
  $button = $("#main_btn");
  console.log($button);
  $button.html("Processing...");
  return true;
}
$(function(){
  let validateList = [];
  $(`[data-role="register-action"] input[required]`).each(v => {
    validateList[$(`[data-role="register-action"] input[required]`).eq(v).attr("name")] = false;
  });
  validateList["confirmed_password"] = false;
  const validateButton = () => {
    let buttonIsActive = true;
    Object.keys(validateList).map(v => {
      if (!validateList[v]) {
        buttonIsActive = false;
      }
    });
    $(`[name="button"]`).prop("disabled",!buttonIsActive);
  }

  $(document).on("keyup",`[data-role="register-action"] input[required]`, function(){
    validateList[$(this).attr("name")] = !!$(this).val();
    validateButton();
  });

  $(document).on('keyup',`#password, #confirmPassword`, function(){
   let password = $("#password").val(),
        confirmPassword = $("#confirmPassword").val();
   if (password !== confirmPassword){
       $("#CheckPasswordMatch").html("Password does not match !");
       validateList["confirmed_password"] = false;
   } else {
     $("#CheckPasswordMatch").html("Password match !");
     validateList["confirmed_password"] = true;
   }
   validateButton();

  });
});

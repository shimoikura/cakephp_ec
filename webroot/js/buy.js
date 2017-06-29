$(document).ready(function(){
  //in case of not login
  $("#btn-step2").click(function(){
    
  });
  // Step1
  $("#btn-step1").click(function(){
    var name = $("#buy-userid").val();
    alert(name);
    // var phone = $("#buy-phone").val();
    // var address = $("#buy-address").val();
    // var email = $("#buy-email").val();
    $(".step span").removeClass("cart-active");
    $(".step span:eq(1)").addClass("cart-active");
    $.ajax({
      url:"buy-pass.php",
      type:"post",
      data:{name:name,phone:phone,address:address,email:email,type:1},
      success:function(){
        $("#step1").css("display","none");
        $("#step2").show();
      }
    });
  });

  // Step2
  $("#btn-step2").click(function(){
    var deli = $('input[name="deli"]:checked').val();
    var payment = $('input[name="payment"]:checked').val();
    $(".step span").removeClass("cart-active");
    $(".step span:eq(2)").addClass("cart-active");
    $.ajax({
      url:"buy-pass.php",
      type:"post",
      data:{deli:deli,payment:payment,type:2},
      success:function(result){
        $("#step2").css("display","none");
        $("#step3").show();
      }
    });
  });
});



$(document).ready(function(){

  $(".deposit_cash").click(processDeposit);
  $("#buysell-amount").val("");

  $("#buysell-amount").keyup(function(){
    console.log("dsd")
    $("._display").html(($(this).val() != "") ? $(this).val() : 0)
  })
  $(".confirm_deposit").click(confirmDeposit);

  $(".investment_amount").keyup(processInvestmentAmount);
  $(".invest_btn").click(investMoney);
  $(".currency_convert").change(updateBalanceInfo);
  $(".exchange_btn").click(convertUSD);
  $(".process_withdraw").click(processWithdraw);
  $(".withdrawal_amount").keyup(function(e){
    e.preventDefault();
    const $chargeAccount = $(".charge_account").find(":selected");
    const $currency = $chargeAccount.attr("value");
    $(".main_display").html(`${$(this).val()} ${$currency}`)

  })

  $("#registerForm1").submit(function(){
    $(this).find("button[type='submit']").html("Processing...");
  })

  $('#buy-coin').on('hide.bs.modal', function () { 
   location.reload();
}); 

})



function processWithdraw(e){
  e.preventDefault();
  const $chargeAccount = $(".charge_account").find(":selected");
  const $chargeAccountBalance = $chargeAccount.data("balance");
  const $paymentPlatform = $(".payment_account").find(":selected");
  const $currency = $chargeAccount.attr("value");
  const $amount = parseFloat($(".withdrawal_amount").val());
  const $financial_password = parseFloat($(".transaction_pin").val());

  const $button = $(this);
  const $data = {"charge_account":$currency,amount:$amount,payment:$paymentPlatform.attr("value"),financial_password:$financial_password}

  console.log($paymentPlatform);
  
  if($paymentPlatform.length == 0){
    swal({
      text:"Add at least one payment method in your personal data section",
      icon: "info",
      buttons: true
    }) 
    return false;
  }

  if(isNaN($amount) || $amount == 0){
    swal({
      text:"Enter a valid amount",
      icon: "error",
      buttons: true
    }) 
    return false;
  }


 

  if(isNaN($financial_password) || $financial_password == 0 || $financial_password.toString().length < 6 ||  $financial_password.toString().length > 6 ){
    swal({
      text:"Enter a valid financial password",
      icon: "error",
      buttons: true
    }) 
    return false;
  }

  if($amount > $chargeAccountBalance){
    swal({
      text:"Insufficient account balance to perform this withdrawal",
      icon: "error",
      buttons: true
    }) 
    return false;
  }




  swal({
    text:"Are you sure you want to perform this withdrawal ?",
    icon: "info",
    buttons: true
  }).then($res => {

    if($res == true){
      $button.html("Processing...")
      $.ajax({
        url: $button.data("url"),   
        method:"POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:$data,
        success: function($response) {
          if($response.success){
            swal({
              text:$response.message,
              icon: "success",
              buttons: true
            }).then(res=>{
              location.reload();
            })
          }else if($response.error){
            swal({
              text:$response.message,
              icon: "error",
              buttons: true
            }).then(res=>{
              location.reload();
            })
          }
        }
      })
    }
  })



}

function convertUSD(e){
  e.preventDefault();
  const $amount = parseFloat($(".source_amount").val());
  const $fromOption = $(".from_currency").find(":selected");
  const $toOption = $(".to_currency").find(":selected");
  const $fromCurrency = $fromOption.attr("value");
  const $fromAmount = parseFloat($fromOption.data("balance"));
  const $toCurrency = $toOption.attr("value");
  const $button = $(this);
  const $data = {
     from_currency:$fromCurrency,
     to_currency:$toCurrency,
     amount:$amount
  }

  if(isNaN($amount) || $amount == 0){
    swal({
      text:"Enter a valid amount",
      icon: "error",
      buttons: true
    }) 
    return false;
  }


  if($fromCurrency == $toCurrency){
    swal({
      text:"Conversion Currencies can't be the same",
      icon: "error",
      buttons: true
    }) 
    return false;
  }

  if($amount > $fromAmount){
    swal({
      text:"Insufficient account balance to perform this conversion",
      icon: "error",
      buttons: true
    }) 
    return false;
  }

  
  swal({
    text:"Are you sure you want to perform this currency conversion",
    icon: "info",
    buttons: true
  }).then($res => {
    if($res == true){
      $button.html("Processing...")
      $.ajax({
        url: $button.data("url"),   
        method:"POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:$data,
        success: function($response) {
      $button.html("Exchange")
          if($response.success){
            swal({
              text:$response.message,
              icon: "success",
              buttons: true
            }).then(res=>{
              location.reload();
            })
          }else if($response.error){
            swal({
              text:$response.message,
              icon: "error",
              buttons: true
            }).then(res=>{
              location.reload();
            })
          }
        }
      })
    }
  }) 


  // $data {
  //   from_currency,to_currency,from_amount,
  // }
}



// function update deposit amount
function updateDepositAmount(e){
  e.preventDefault();

  
}

function updateBalanceInfo(e){
  e.preventDefault();
  const $type = $(this).data("type")
  const $option = $(this).find(":selected");
  $(`.${$type}_display`).html(`${$option.data('balance')} ${$option.attr("value")}`)
  console.log($option)
}



function investMoney(e){
  e.preventDefault();
  const $button = $(this);
  const $errorBox = $(`#${$(this).attr("data-error")}`);
  // const $errorBox = $(".error_box");
  $errorBox.html("")
  const $key = $(this).attr("data-key");
  const $min = parseFloat($(this).attr("data-min"));
  const $max = parseFloat($(this).attr("data-max"));
  const $currency = $(this).attr("data-currency");
  const $input = parseFloat($(`#input${$key}`).val());
  const $inputElement = $(`#input${$key}`);

  console.log($input);
  if(isNaN($input) || $input == 0 ){
    $errorBox.html("Enter a valid amount")
    return false;
  }

  if($input < $min){
    $errorBox.html(`Minimum amount is ${$min} ${$currency}`)
    return false;
  }

  console.log($max, typeof $input)
  if($max < $input){
    $errorBox.html(`Maximum amount is ${$max} ${$currency}`)
    return false;
  }

  $button.html("Processing...");
  $.ajax({
    url: $button.data("plan-url"),   
    method:"POST",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:{planId:$button.data("plan-id"),amount:$input},
    success: function($res) {
      $button.html("Invest");
      $inputElement.val("");
      if($res.success){
        swal({
          text:$res.message,
          icon: "success",
          buttons: true
        }).then(res=>{
          location.reload();
        })
      }else if($res.error){
        swal({
          text:$res.message,
          icon: "error",
          buttons: true
        }).then(res=>{
          if($res.url){
            location.href = $res.url;
          }else{
            location.reload();
          }
        })
      }
    }
  })

}


function processInvestmentAmount(e){
  e.preventDefault();
  
  $button = $(`#${$(this).attr("data-btn")}`);
  $value = $(this).val();
  if($value == '' || $value == '0'){
   $button.attr({disabled:true})
  // console.log($value,"disable");
  }{
    $button.attr({disabled:false}).addClass(" bg-primary")
  // console.log($value,"enable");

  }
}


// This function processes deposite
function processDeposit(e){
  e.preventDefault();
  $btn = $(this);
  $errorBox = $("#error_box");
  $value = $("#buysell-amount").val();
  $url = $(this).attr("data-url");
  $method = $("#method").val();
  if($value == "" || isNaN($value) || $value == 0 ){
   $("#buysell-amount").parent().siblings(".error_box").find("#error_box").html("Enter a valid amount");
    return;
  }else{
    $("#buysell-amount").parent().siblings(".error_box").find("#error_box").html("");

  }
 
  if($method == ""){
   $("#method").parent().siblings(".error_box").find("#error_box1").html("Select a payment method");
    return;
  }else{
   $("#method").parent().siblings(".error_box").find("#error_box1").html("");
   if(jQuery.inArray($method,["BTC","BCH","ETH","LTC","BNB","USDT","DODGE"]) != -1){
     $(".btc").removeClass("d-none");
     $(".bank").addClass("d-none");
 
   }else{
     $(".bank").removeClass("d-none");
     $(".btc").addClass("d-none");
   }
  }
 
 //  $('#buy-coin').modal('show');
 //  return
 
  if(jQuery.inArray($method,["BTC","BCH","ETH","LTC","BNB","USDT","DODGE"]) != -1){
   $btn.html("<div class='spinner-grow spinner-grow-sm' role='status'><span class='sr-only'>Loading...</span></div> Processing...");
   $dataObj = {usd_to_crypto:true,amount:$value,convert:$method};

   // set endpoint and your API access key
     $.ajax({
         url: $url,   
         method:"POST",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data:$dataObj,
         success: function($res) {

           $res = JSON.parse($res);
           console.log($res);
          
           if($res.data.quote){
             $(".converted_payment").html(`$${$value} (${$res.data.quote[$method].price.toFixed(6)})${$method.toUpperCase()}`)
             $("#btc_amount").val(`${$res.data.quote[$method].price.toFixed(6)}`);
             $("#wallet_address").val($res.address)
             $('#buy-coin').modal('show');
           }else{
             swal({
               text:"An error occured trying to access the Crypto API",
               icon: "error",
               buttons: true
             })
           }
 
         }
     });
  }else{
  $('#buy-coin').modal('show');
  }
 
 


  
 
 
 
      //  $count = 9;
      //  $interval = setInterval(function(){
      //    $(".time_counter").html(`${$count}min`);
      //    if($count == 0){
      //      clearInterval($interval);
      //      completeDeposit(e,{amount:$value,url:$btn.attr("data-url"),deposit:true,time_elapsed:true});
      //    }
      //    $count--;
      //  },1000)

}
 
 // function completes the deposit
function completeDeposit(e,$param){
   e.preventDefault();
   $(".confirm_deposit").html(
     "<div class='spinner-grow spinner-grow-sm' role='status'><span class='sr-only'>Loading...</span></div> Processing..."
   );
   $.ajax({
     type: "POST",
     url: $param.url,
     data: $param,
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     success: function ($response) {
       console.log($response);
       $res = JSON.parse($response);   
       console.log($res);
       $(".confirm_deposit").html("Confirm Payment");
       if ($res.error) {
         
         $('#buy-coin').modal('hide');
         swal({
           text:"Your deposit request was not successfull",
           icon: "error",
           buttons: true
         }).then((responce)=>{
           location.reload();
         })
       }else {
         $('#buy-coin').modal('hide');
         swal({
           text: "Your deposit request was created successfully",
           icon: "success",
           buttons: true
         }).then((responce)=>{
           location.reload();
         })
       }
     },
   });
}
 



 //function
 function confirmDeposit(e){
   e.preventDefault();
   $param = { amount : $value = $("#buysell-amount").val() , url : $(this).attr("data-url"), deposit:true , proof:$imageArray};
   console.log($param);
   if($imageArray.length == 0){
     swal({
       text:"Please upload a proof of payment",
       icon: "error",
       buttons: true
     })
   }else{
     completeDeposit(e,$param);
   }
 }



 function copyText(id) {
  var copyText = document.getElementById(id);
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  console.log("Copied the text: " + copyText.value);
 }


 function processInvestment(e){
   e.preventDefault();
 }
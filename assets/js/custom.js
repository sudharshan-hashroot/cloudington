

$(window).load(function() {

  //add gtag to all head tags
  $('head').append( `<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201583396-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-201583396-1');
  </script>` );


    $("img").attr('loading','lazy')
    $(".bg-img-hero").attr('loading','lazy')

  
  // $(".s_reg").on('click',function(){
    
  //   $('.p_order').fadeOut();
  //   var pid = $(this).attr('product-id');
  //   var mumbai = $(this).attr('pm-id');
  //   var sydney = $(this).attr('ps-id');
  //  var url = $('.p_order').attr('data-url');
  //  $('.p_order').attr('data-new',url+"&pid="+pid);
  //  $('.p_order').attr('pm-id',mumbai);
  //  $('.p_order').attr('ps-id',sydney);
  
  // })


$(".configorder").on("click",function(){
  $(".submitall").html(`Submit`);
  var pnum = $(this).attr("pnum");
var title = $(this).parent().parent().find(".p-title").text()
var price = $(this).parent().parent().find(".p-price").html();
var pid = $(this).attr("product-id")
var instance = $(this).attr("instance-id")
$(".p_title").text(title)
$(".p_price").html(price)
$(".submitall").attr("pid",pid)
$(".submitall").attr("instance",instance)
})

  $("#configoption").on("submit",function(e){
    e.preventDefault();
    $(".submitall").html(`<div class="spinner-border text-light" role="status"></div>`);
    var data ={}
    data.hostname=$("#hostname").val();
     data.region = $("#regionselect").val();
     data.blueprint = $("#blueprintselect").val();
     data.instance = $("#instancetype").val();
     var pid = $(".submitall").attr("pid")
     var instance = $(".submitall").attr("instance")
     var url = "https://my.cloudyea.com/cart.php?a=add&pid="+pid+"&configoption[58]="+data.region+"&configoption[59]="+data.blueprint+"&configoption[60]="+instance+"&domain="+data.hostname+getlivecurrency();
    window.location.href=url;
    // console.log(url)
  })
  
  $("#configdooption").on("submit",function(e){
    e.preventDefault();
    $(".submitall").html(`<div class="spinner-border text-light" role="status"></div>`);
    var data ={}
    data.hostname=$("#dohostname").val();
     data.region = $("#doregionselect").val();
     data.blueprint = $("#doblueprintselect").val();
     var pid = $(".submitall").attr("pid")
     var url = "https://my.cloudyea.com/cart.php?a=add&pid="+pid+"&configoption[55]="+data.region+"&configoption[56]="+data.blueprint+"&domain="+data.hostname+getlivecurrency();
    window.location.href=url;
    // console.log(url)
   
  })

  function getlivecurrency(){
        var current_val = $(".selected_ctype").text();
        if(current_val == "₹ INR"){
          return "&currency=1";
        } else if (current_val == "£ GBP"){
          return "&currency=9";
        } else if (current_val == "د.إ AED"){
          return "&currency=10";
        }  else if (current_val == "$ USD"){
          return "&currency=8";
        }

  }
  
  $.get('https://ipapi.co/currency/', function(data)
  {
   window.ip_currency = data 

   if (ip_currency === 'EUR' || ip_currency === 'GBP'){  
    $(".selected_ctype").text('£ GBP');
    $(".curr_sym").text('£');
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=9");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-gbp"));
      $(this).text(source_val);
    });

   } else if(ip_currency === 'INR') {
    $(".selected_ctype").text('₹ INR');
    $(".curr_sym").text('₹');
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=1");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-inr"));
      $(this).text(source_val);
    });
     
   }
   else if(ip_currency === 'AED') {
    $(".selected_ctype").text('د.إ AED');
    $(".curr_sym").text('د.إ');
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=10");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-aed"));
      $(this).text(source_val);
    });
     
   }else{
    $(".selected_ctype").text('$ USD');
    $(".curr_sym").text('$');
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=8");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-usd"));
      $(this).text(source_val);
    });

   }


  })

});
$("#locationselect").on('change',function(){
 
  $('.p_order').fadeIn();
        var url = $('.p_order').attr('data-url');
        var newurl = $('.p_order').attr('data-new');
        var mumbai = $('.p_order').attr('pm-id');
        var sydney = $('.p_order').attr('ps-id');
        var newval = $(this).val();
        if (newval == 'VG'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1753");
        } else if (newval == 'OH'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1754");
        } else if (newval == 'OR'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1755");
        } else if (newval == 'IR'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1756");
        } else if (newval == 'LN'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1757");
        } else if (newval == 'PR'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1758");
        } else if (newval == 'FF'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1759");
        } else if (newval == 'SG'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1760");
        } else if (newval == 'TY'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1762");
        } else if (newval == 'SE'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1763");
        } else if (newval == 'MN'){
          $('.p_order').attr('href',newurl+"&configoption[58]=1765");
        } else if (newval == 'MU'){
          $('.p_order').attr('href',url+"&pid="+mumbai);
        } else if (newval == 'SY'){
          $('.p_order').attr('href',url+"&pid="+sydney);
        }
})
function openchat(){
  $(".woot--bubble-holder").trigger('click');
}

$(".c_type").on("click", function () {

  let curr = $(this).text();
  let currsym = $(this).attr("data-sym");

  $(".selected_ctype").text(curr);
  $(".curr_sym").text(currsym);
  $(".ddtoggle").dropdown("toggle");

  if (currsym == "₹") {
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=1");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-inr"));
      $(this).text(source_val);
    });
  } else if (currsym == "$") {
    
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=8");
    });

    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-usd"));
      $(this).text(source_val);
    });
  } else if (currsym == "£") {
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=9");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-gbp"));
      $(this).text(source_val);
    });
  } else if (currsym == "د.إ") {
    $(".plink").each(function () {
      let plink = $(this).attr("href");
      $(this).attr("href", plink + "&currency=10");
    });
    $(".currency").each(function () {
      let source_val = parseInt($(this).attr("p-aed"));
      $(this).text(source_val);
    });
  }
});



$('.c_type').on('click',function(){

    let curr = $(this).text()
    let currsym = $(this).attr('data-sym')


    $('.selected_ctype').text(curr)
    $('.curr_sym').text(currsym)
    $(".ddtoggle").dropdown("toggle");
    
    if(currsym == '₹') {
      $('.plink').each(function(){
        let plink = $(this).attr('href');
        $(this).attr('href',  plink +'&currency=1')
      })
      $('.currency').each(function(){    
        let source_val = parseInt($(this).attr('data-value'))   
        $(this).text(source_val);
      });
    } else
if(currsym == '$'){    

  $('.plink').each(function(){
    let plink = $(this).attr('href');
    $(this).attr('href',  plink +'&currency=8')
  })
  
  $('.currency').each(function(){    
    let source_val = parseInt($(this).attr('data-value')) 
    let cn_val = (source_val / 74.41).toFixed(0);
    $(this).text(cn_val);
  }); 

}else if(currsym == '£'){  
  $('.plink').each(function(){
    let plink = $(this).attr('href');
    $(this).attr('href',  plink +'&currency=9')
  })
  $('.currency').each(function(){    
    let source_val = parseInt($(this).attr('data-value')) 
    let cn_val = (source_val / 102.99).toFixed(0);
    $(this).text(cn_val);
  }); 

} else if(currsym == 'د.إ'){  
  $('.plink').each(function(){
    let plink = $(this).attr('href');
    $(this).attr('href',  plink +'&currency=10')
  })
  $('.currency').each(function(){    
    let source_val = parseInt($(this).attr('data-value')) 
    let cn_val = (source_val / 20.26).toFixed(0);
    $(this).text(cn_val);
  }); 

}
})
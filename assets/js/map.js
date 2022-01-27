
$(function(){
    $('.locate').on('click',function(){
 
        $(this).parent().find('a').children().removeClass('lactive')
        $(this).children().addClass('lactive')
       
        
        let lname= $(this).attr('xlink:title')

        let lechek = lname.replace(/ /g,'')
       
        let lchild = $('.'+lechek)
        let posval = 760;

       
        lchild.parent().find('figure').parent().parent().removeClass('bg-soft-primary border-primary')
        lchild.children().addClass('bg-soft-primary border-primary')
        position = lchild.attr('data-slick-index') 

        if(position >= 3 && position < 5 ){
            lchild.parent().css('transform',"translate3d(-"+posval+"px, 0px, 0px)")
         } else if (position >= 5 && position < 7 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*2+"px, 0px, 0px)")
         } else if (position >= 7 && position < 9 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*3+"px, 0px, 0px)")
         } else if (position >= 9 && position < 11 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*4+"px, 0px, 0px)")
         } else if (position >= 11 && position < 13 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*5+"px, 0px, 0px)")
         } else if (position >= 13 && position < 15 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*6+"px, 0px, 0px)")
         } else if (position >= 15 && position < 17 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*7+"px, 0px, 0px)")
         } else if (position >= 17 && position < 19 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*8+"px, 0px, 0px)")
         } else if (position >= 19 && position < 21 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*9+"px, 0px, 0px)")
         } else if (position >= 21 && position < 23 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*10+"px, 0px, 0px)")
         } else if (position >= 23 && position < 25 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*11+"px, 0px, 0px)")
         } else if (position >= 25 && position < 27 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*12+"px, 0px, 0px)")
         } else if (position >= 27 && position < 29 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*13+"px, 0px, 0px)")
         } else if (position >= 29 && position < 31 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*14+"px, 0px, 0px)")
         } else if (position >= 31 && position < 33 )  {
            lchild.parent().css('transform',"translate3d(-"+posval*15+"px, 0px, 0px)")
         }
          else{
            lchild.parent().css('transform','translate3d(0px, 0px, 0px)')
         }
     
    })
})

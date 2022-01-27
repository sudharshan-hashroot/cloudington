
function getinstance() {
    setTimeout(
        function() {
            $('#inloader').delay().fadeOut('slow')
            $('#instancedata').delay().fadeIn('slow')

        }, 1000);


    let cms = $('.cmstype').find('input[name="cmsvalue"]:checked').val();
    let storage = $('.storagevalue').find('input[type="radio"]:checked').val();
    let monthlyvisitors = $('.monthlyvisitors').find('input[type="radio"]:checked').val();
    let websitecount = $('.websitecount').find('input[type="radio"]:checked').val();
    let data = {}
    data.app = cms
    data.storage = storage
    data.monthlyvisitors = monthlyvisitors
    data.websitecount = websitecount
    data.url = "{url}&app=" + cms + "&storage=" + storage + "&monthlyvisitors=" + monthlyvisitors + "&websitecount=" + websitecount
    let fetchurl = 'https://sudharshan3.texa.ai/auth/DO/sizes?app=' + cms + '&disk=' + storage + '&visits=' + monthlyvisitors + '&wc=' + websitecount

    $.get(fetchurl, function(data) {
        console.log(data)
        if (data.length == 0) {
            $('#instancedata').append(`<h2 class="display-4 text-primary w-100 pt-5">OOPS!</h2><br> <span class="pb-5">No instances Available with selected configuration</span>`)

        } else {
            let do_data = data;
            let do_data1 = $.map(do_data.data, function(e) {
                return {
                    slug: e.slug,
                    vcpu: e.vcpus,
                    ssd: e.disk,
                    price: e.price_monthly,
                    ram: e.memory
                }
            })
          
            var testnew = Object.assign({}, do_data1);
          
            $.each(testnew, function(index) {


                $('#instancedata').append(`  <div class="col-6 col-md-3 px-2 mb-3">
            <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                <input type="radio" id="doinstance` + index + 1 + `" name="instancetype" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="doinstance` + index + 1 + `">
                    <figure class="avatar mx-auto d-flex justify-content-center">
                        <img class="p-2" height="100" width="100" style="height: auto;" src="./assets/svg/cloud-square/do.svg" alt="Logo">
                    </figure>
            <span class="d-block">` + $(this)[0].slug + `</span>
            <hr>
            <div class="card-body p-1 text-left">
                <div class="
    media
    font-size-1
    text-body
    mb-3
    align-items-center
    
    ">
                    <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
    <i class="fas fa-microchip text-success"></i>
    </span>
    
                    <div class="media-body w-50">vCPU</div>
                    <div class="media-body pl-2">
                        <b>` + $(this)[0].vcpu + ` core(s)</b>
                    </div>
                </div>
                <div class="
    media
    font-size-1
    text-body
    mb-3
    align-items-center
    ">
                    <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
    <i class="fas fa-memory text-success"></i>
    </span>
    
                    <div class="media-body w-50">RAM</div>
                    <div class="media-body pl-2">
                        <b>` + $(this)[0].ram + `</b>
                    </div>
                </div>
                <div class="
    media
    font-size-1
    text-body
    mb-3
    align-items-center
    ">
                    <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
    <i class="fas fa-hdd text-success"></i>
    </span>
    
                    <div class="media-body w-50">Storage</div>
                    <div class="media-body pl-2">
                        <b>` + $(this)[0].ssd + `GB</b>
                    </div>
                </div>
                <div class="
    media
    font-size-1
    text-body
    mb-1
    align-items-center
    ">
                    <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
    <i class="fas fa-wifi text-success"></i>
    </span>
    
                    <div class="media-body w-50">Bandwidth</div>
                    <div class="media-body pl-2">
                        <b>2 TB</b>
                    </div>
                </div>
       
            </div>
            <hr>
            <div class="btn btn-soft-primary btn-block">$ ` + $(this)[0].price + `</div>
          </label>
            </div>
        </div>`)


            })

        }





    })
}


function compareinstance() {
    setTimeout(
        function() {
            $('#inloader').delay().fadeOut('slow')

        }, 1000);
    setTimeout(
        function() {
            $('#instancedata').delay().fadeIn('slow')
        }, 1500);

    let cms = $('.cmstype').find('input[name="cmsvalue"]:checked').val();
    let storage = $('.storagevalue').find('input[type="radio"]:checked').val();
    let monthlyvisitors = $('.monthlyvisitors').find('input[type="radio"]:checked').val();
    let websitecount = $('.websitecount').find('input[type="radio"]:checked').val();
    let fetchurl = 'https://sudarshan3.texa.ai/auth/linode/test?app=' + cms + '&disk=' + storage + '&visits=' + monthlyvisitors + '&wc=' + websitecount;
    console.dir(fetchurl)
    $.get(fetchurl, function(data) {

        if (data.length == 0) {
            $('#instancedata').append(`<h2 class="display-4 text-primary w-100 pt-5">OOPS!</h2><br> <span class="pb-5">No instances Available with selected configuration</span>`)

        }
        let cdigitalocean = data.data.digital_ocean[0];
        let clinode = data.data.linode[0];
        let digitalocean = data.data.digital_ocean;
        let linode = data.data.linode;
        console.log(digitalocean)
        console.log(linode)

        if (cdigitalocean == undefined) {
            $('.digital_col').css('display', 'none')
        } else {
            $('.dname').text(cdigitalocean.description);
            $('.ddesc').text(cdigitalocean.slug);
            $('.dvcpu').text(cdigitalocean.vcpus + " Core(s)");
            $('.dram').text(cdigitalocean.memory);
            $('.dstorage').text(cdigitalocean.disk);
            $('.dprice').text("$ " + cdigitalocean.price_monthly);
        }
        if (clinode == undefined) {
            $('.linode_col').css('display', 'none')
        } else {
            $('.lname').text(clinode.description);
            $('.ldesc').text(clinode.slug);
            $('.lvcpu').text(clinode.vcpus + " Core(s)");
            $('.lram').text(clinode.memory);
            $('.lstorage').text(clinode.disk);
            $('.lprice').text("$ " + clinode.price_monthly);
        }
        if(digitalocean == 0){
            $('#dotableparent').append(`<tr><td>No instatances available <td> </tr>`)
        }else{
            let convertdo = Object.assign({}, digitalocean);



            $.each(convertdo, function(index){
                $('#dotableparent').append(`
                <tr>
                    <td>
                        <div class="custom-control custom-radio">
                            <input value="typename" type="radio" class="custom-control-input" name="dotablechild" id="dotablechild`+index+1+`">
                            <label class="custom-control-label" for="dotablechild`+index+1+`"> </label>
                        </div>
                    </td>
    
                    <td>
                        <div class="media align-items-center text-left">
                            <img class=" avatar avatar-sm  mr-1 p-1 " width="50" height="50" src="./assets/svg/cloud-square/do.svg" alt="Image Description">
    
                            <div class="media-body">
                                <a class="d-inline-block text-dark">
                                    <h6 class="text-hover-primary mb-0 truncate">`+$(this)[0].description+`</h6>
                                </a> <br>
                                <small>`+$(this)[0].slug+`</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].memory+`</span>
                        </a>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].vcpus+`</span>
                        </a>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].disk+`</span>
                        </a>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].transfer+`TB	</span>
                        </a>
                    </td>
    
                    <td>
                        <a class="text-body">
                            <span class="font-weight-bold "> 
                            <span> $
    
                            `+$(this)[0].price_monthly+`
    
                            </span>
                            </span>
                        </a>
                    </td>
    
    
    
    
                </tr>`)
            });
            $('#dotablechild01').attr('checked','');
           
        }
        if(linode == 0){
            $('#lntableparent').append(`<tr><td>No instatances available <td> </tr>`)
        }else{
            let convertln = Object.assign({}, linode);
       
            $.each(convertln, function(index){
                $('#lntableparent').append(`
                <tr>
                    <td>
                        <div class="custom-control custom-radio">
                            <input value="typename" type="radio" class="custom-control-input" name="lntablechild" id="lntablechild`+index+1+`">
                            <label class="custom-control-label" for="lntablechild`+index+1+`"> </label>
                        </div>
                    </td>
    
                    <td>
                        <div class="media align-items-center text-left">
                            <img class=" avatar avatar-sm  mr-1 p-1 " width="50" height="50" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">
    
                            <div class="media-body">
                                <a class="d-inline-block text-dark">
                                    <h6 class="text-hover-primary mb-0 truncate">`+$(this)[0].description+`</h6>
                                </a> <br>
                                <small>`+$(this)[0].slug+`</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].memory+`</span>
                        </a>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].vcpus+`</span>
                        </a>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].disk+`</span>
                        </a>
                    </td>
                    <td>
                        <a class="text-body">
                            <span>`+$(this)[0].transfer+`TB	</span>
                        </a>
                    </td>
    
                    <td>
                        <a class="text-body">
                            <span class="font-weight-bold "> 
                            <span> $
    
                            `+$(this)[0].price_monthly+`
    
                            </span>
                            </span>
                        </a>
                    </td>
    
    
    
    
                </tr>`)
            });
            $('#lntablechild01').attr('checked','');
        }
        
       


    });
}

function showalltab(){
$('#instancedata').addClass('closeup');

$('#instancetable').removeClass('closeup');

}

function resetLoad() {
    $('#inloader').css('display', 'inline-block')
    $('#instancedata').css('display', 'none')
    $('.digital_col').css('display', 'block')
    $('.linode_col').css('display', 'block')
    $('#lntableparent').children().remove()
    $('#dotableparent').children().remove()
    $('#instancedata').removeClass('closeup');
    $('#instancetable').addClass('closeup');
        // $('#instancedata').children().css('display', 'none')
}
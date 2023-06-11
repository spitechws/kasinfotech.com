
$(document).ready(function () {
    $('#appMessageContainer').fadeOut(10000); // 10 seconds
});

function removeMessage() {
    document.getElementById('appMessageContainer').remove();
}

function reload() {
    window.location = window.location.href.split("?")[0];
}

function refresh() {
    window.location = window.location.href;
}

function goto(url) {
    window.location = url;
}

function submitOnEnter(buttonId, e) {
    e = e || window.event;
    if (e.keyCode == 13) // enter key
    {
        document.getElementById(buttonId).click();
        return false;
    }
    return true;
}

/*
Calling : nochange="previewImg('target_image_id')"
*/
function previewImg(input, target_image_id) {
    // var input=this;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#' + target_image_id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}


function loadState(country_id, state_id) {
    var country = $('#' + country_id).val();
    $.ajax({
        url: BASE_URL + 'common/load_state',
        type: 'POST',
        data: { country_id: country },
        dataType: 'json',
        success: function (response) {
            var strHtml = '';
            if (response.length > 0) {
                $.each(response, function (index, value) {
                    strHtml += '<option value="' + value.state_id + '">' + value.state_name + '</option>';
                });
            }
            $('#' + state_id).html(strHtml);
        }
    });
}


function loadCity(state_id, city_id) {
    var state = $('#' + state_id).val();
    $.ajax({
        url: BASE_URL + 'common/load_city',
        type: 'POST',
        data: { state_id: state },
        dataType: 'json',
        success: function (response) {
            var strHtml = '';
            if (response.length > 0) {
                $.each(response, function (index, value) {
                    strHtml += '<option value="' + value.city_id + '">' + value.city_name + '</option>';
                });
            }
            $('#' + city_id).html(strHtml);
        }
    });
}

function loadSubcategory() {
    var category_id = $('#category_id').val();
    $.ajax({
        url: BASE_URL + 'common/load_subcategory',
        type: 'POST',
        data: { category_id: category_id },
        dataType: 'json',
        success: function (response) {
            var strHtml = '';
            if (response.length > 0) {
                $.each(response, function (index, value) {
                    strHtml += '<option value="' + value.sub_category_id + '">' + value.title + '</option>';
                });
            }
            $('#sub_category_id').html(strHtml);
        }
    });
}

function changeModuleStatus(module_id) {
    $.ajax({
        url: BASE_URL + 'common/change_module_status',
        type: 'POST',
        data: { module_id: module_id },
        dataType: 'json',
        success: function (response) {
            console.log(response);
        }
    });
}

function generateSlug(source_id,target_id) {
    var a = document.getElementById(source_id).value;
    var b = a.toLowerCase().replace(/ /g, '-')
        .replace(/[^\w-]+/g, '');   
    document.getElementById(target_id).value = b;
}

function submitEnquiry(form_id){
    if(formValidateOnly(form_id)){
        var formData=$('#'+form_id).serialize();
        $.ajax({
            url:BASE_URL+'client/ajaxAdd/',
            type:'POST',
            data:formData,
            success:function(response){
                if(response>0){	
                    clearForm('form1');					
                    $('#'+form_id+' #errorMessages').html('');
                    $('#clientModal').modal('hide');
                    getClients();
                }else{
                    $('#'+form_id+' #errorMessages').html(response);
                }    
            }
        });
    }
}	
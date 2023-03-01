

/*notification*/
function _notify(m,t){
  $.notify({
      // options
      icon: "nc-icon nc-bell-55",
      message: m
    },{
      // settings
      type: t,
      timer: 8000
    });
}


$(document).ready(function(){
  //for acive link in sidebar
  if($(".nav").length>0){
    var current_url =window.location.href;
    $(".nav a[href*='"+current_url+"']").parent().addClass("active");  
  }


  if($('.method-selector').length>0){
    if($(".method-selector :selected").val()=="phone"){
      $(".email-input-div").hide();
      $(".phone-input-div").show();
      $(".email-input").attr("disabled","disabled");
      $(".phone-input").removeAttr("disabled");
    }else{
      $(".phone-input-div").hide();
      $(".email-input-div").show();
      $(".phone-input").attr("disabled","disabled");
      $(".email-input").removeAttr("disabled");
    }
  }
  if($message_data){
    _notify($message_data['msg'],$message_data['type']);
  }
/*request Validation*/
// Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });

});
/*show/hide input on method change*/
$(document).on("change",".method-selector",function(){
  if($(".method-selector :selected").val()=="phone"){
    $(".email-input-div").hide();
    $(".phone-input-div").show();
    $(".email-input").attr("disabled","disabled");
    $(".phone-input").removeAttr("disabled");
  }else{
    $(".phone-input-div").hide();
    $(".email-input-div").show();
    $(".phone-input").attr("disabled","disabled");
    $(".email-input").removeAttr("disabled");
  }
});



/*first letter capital*/
String.prototype.ucwords = function() {
    str = this.toLowerCase();
    return str.replace(/(^([a-zA-Z\p{M}]))|([ -][a-zA-Z\p{M}])/g,
        function($1){
            return $1.toUpperCase();
        });
}

/*add source fields*/
$(document).on("click",".add-more-source",function(e){
  e.preventDefault();
  var src_cnt = $(".source-main-div").attr("data-sources");
  var source_html = '<div class="row">\
                  <div class="col-md-4 mb-3">\
                    <div class="form-group">\
                      <label>Review Source</label>\
                      <input class="form-control" type="text" id="validationsource0'+src_cnt+'" name="source['+src_cnt+'][source]" required>\
                        <div class="invalid-feedback">\
                          Please add a source.\
                        </div>\
                    </div>\
                  </div>\
                  <div class="col-md-4 mb-3">\
                    <div class="form-group">\
                      <label for="validationCustom02"> Review Url</label>\
                      <input type="text" class="form-control" id="validationurl0'+src_cnt+'" value="" name="source['+src_cnt+'][url]" required>\
                      <div class="invalid-feedback">\
                          Please add a review url.\
                        </div>\
                    </div>\
                  </div>\
                  <a href="#" class="delete-source text-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>\
                </div>';
    $(".source-main-div").append(source_html);
    src_cnt++;
    $(".source-main-div").attr("data-sources",src_cnt);
    console.log(src_cnt);
});
/*delete source row*/
$(document).on("click",".delete-source",function(e){
  e.preventDefault();
  $(this).closest(".row").remove();
});
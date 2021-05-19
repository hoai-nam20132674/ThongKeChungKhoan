//progressloading
$(document).ajaxStart(function() {
   NProgress.start();
});
$(document).ajaxStop(function() {
   NProgress.done();
});

//loading che màn hình
function mLoading() {
    var tail = "<div style='background: rgba(1, 1, 1, .2); position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 9999;' id='my_loading' class='my_loading'><a style=' position: absolute; top: 45%; left: 46%; z-index: 99999; color: #fff;'><i class='fa fa-spinner fa-spin fa-3x' aria-hidden='true'></i></a></div>";
    $('body').append(tail);
    html100();
}
function rmLoading() {
    $('.my_loading').remove();
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
  }
  return "";
}

function checkCookie(cookieName) {
    var check = getCookie(cookieName);

    if(check != 1) {
      $('#myModalAlert').modal('show');
    }
}

function checkCookieFreeOrder(cookieName) {
    var check = getCookie(cookieName);

    if(check != 1) {
      $('#btnBlogDissmissFreeOrder').modal('show');
    }
}

function markCookie(cookieName) {
    setCookie(cookieName, 1, 365);
}

/*==================== all action confirm ====================*/
$('.btn-confirm-action').click(function(e){
   e.preventDefault();
   var _url = $(this).attr('href');
   var _type = $(this).data('type') || '';
   var _relation = $(this).data('relation') || '';
   var deleteBtn = $(this);
   swal({
      title: "Bạn có chắc chắn thực hiện?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ok",
      cancelButtonText: "Cancel",
      showLoaderOnConfirm: true,
      closeOnConfirm: false
   },
   function(){
      $.ajax({
         url : _url,
         type: "GET",
         beforeSend: function(){
            deleteBtn.addClass('disabled');
         },
         success: function(data)
         {
            if (data.status == 'success') {
               if (_type == 'delete') {
                  deleteBtn.parents('tr').hide('fast');
                  if (_relation != "") $(_relation).hide('fast');
               }
               var msg = data.msg || "Thực hiện thành công.";
               swal({
                  type: "success",
                  title: "Action!",
                  text: msg,
                  timer: 2000,
                  showConfirmButton: false
               });
            } else if (data.status == 'error') {
               deleteBtn.removeClass('disabled');
               var msg = data.msg || "Thực hiện thất bại.";
               swal({
                  type: "error",
                  title: "Action!",
                  text: msg,
                  timer: 2000,
                  showConfirmButton: false
               });
            }
         }
      });
   });
});


// notification
(function($) {
   var noti = {
      construct: function() {
         this.tabIconClick();
         $('.dropdown-msg').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */
         });
         this.notiIconClick();
         this.showNoti();
         this.readAll();
         this.readNoti();
         this.makeReaded();
         // $('#after_date').attr('placeholder', function() {
         //    return $('#after_date').attr('placeholder') + moment().format('DD/MM/YYYY');
         // });
      },
      notiIconClick: function() {
         $('a.dropdown-msg').on('click', function(e) {
            noti.loadData($('.dropdown-msg-parent').find('.msg-type.active').find('.msg-type-btn'));
            $(this).find('span').text(0);
         });
      },
      tabIconClick: function() {
         $('.msg-type-btn').on('click', function(e) {
            if ($(this).attr('data-type') == 0) {
               $('.make-readed').addClass('disabled');
            } else {
               $('.make-readed').removeClass('disabled');
            }
            $(this).addClass('active');
            if ($(this).hasClass('frontend')) {
               if (noti.loadData($(this)) == true && $(this).hasClass('has-unread')) {
                  noti.readAllByType($(this));
               }
            } else {
               noti.loadData($(this));
            }
            // remove auto readed all
            
         });
      },
      loadData: function(_btn) {
         var typeNoti = _btn.data('type');
         var module = _btn.data('module');
         if (_btn.data('loaded') == false && this.doLoadData(typeNoti, _btn.attr('href'), module) == true) {
            _btn.data('loaded', true);
            return true;
         }
      },
      doLoadData: function(typeNoti, containerNoti, module) {
         urlGetData = $('.dropdown-msg').attr('href');
         $.ajax({
            url: urlGetData,
            type: 'GET',
            dataType : 'JSON',
            data: {
               type: typeNoti,
               module: module
            },
            success: function(data) {
               $(containerNoti).html(data.message);
               if (data.data_unread) {
                  $.each(data.data_unread, function(index, el) {
                     if (index > 0 && (el == true || el > 0) ) {
                        $('.msg-type-btn[data-type='+ index +']').addClass('has-unread');
                     }
                  });
               }
               noti.readNoti();
               noti.loadMoreDataInit();
            }
         });
         return true;
      },
      statusLoadMore: true,
      loadMoreDataInit: function() {
         $('.customScrollDiv').scroll(function(event) {
            scrollTop = $(this).scrollTop();
            parentHeight = $(this).height();
            console.log('tp',scrollTop);
            console.log('pr', parentHeight);
            childHeight = $(this).find('.customScrollDivChild').height();
            console.log('child', childHeight);
            if (scrollTop + parentHeight > childHeight - 50 && noti.statusLoadMore == true) {
               parentElm = $(this).parents('.chat-tab');
               typeNoti = parentElm.attr('data-key');
               var page = $(this).attr('data-page');
               if (typeof page === typeof undefined || page === false) {
                  page = 1;
               }
               page = parseInt(page) + 1;
               $(this).attr('data-page', page);
               var module = $(this).attr('data-module');
               var container = $(this).find('.customScrollDivChild');
               noti.statusLoadMore = false;
               noti.doLoadMoreData(typeNoti, page, module, container);
            }
         });
      },
      doLoadMoreData: function(typeNoti, page, module, container) {
         urlGetData = $('.dropdown-msg').attr('href');
         $.ajax({
            url: urlGetData,
            type: 'GET',
            dataType : 'JSON',
            data: {
               type: typeNoti,
               module: module,
               page: page
            },
            beforeSend: function(){
               console.log('send');
            },
            success: function(data) {
               container.append(data.message);
               noti.statusLoadMore = true;
               noti.loadMoreDataInit();
               noti.readNoti();
            }
         });
         return true;
      },
      readAllByType: function(btn) {
         urlGetData = $('.dropdown-msg').attr('url-read');
         containerNoti = $('.dropdown-msg').find('span');
         $.ajax({
            url: urlGetData,
            type: 'GET',
            dataType : 'JSON',
            data: {
               type: btn.data('type')
            },
            success: function(data) {
               if (data.status == 1) {
                  countReaded = data.count;
                  if (countReaded === 'all' || (containerNoti.text() - countReaded) <= 0) {
                     containerNoti.remove();
                  } else {
                     containerNoti.text(containerNoti.text() - countReaded);
                  }
               }
            }
         });
      },
      readAll: function() {
         $('.read-all').on('click', function(event) {
            event.preventDefault();
            if ($('#chat_title_tab_99').hasClass('active')) {
               window.location = $(this).data('url');
            } else {
               window.location = $(this).attr('href');
            }
            /* Act on the event */
         });
      },
      makeReaded: function() {
         $('.make-readed').on('click', function(event) {
            event.preventDefault();
            btn = $('li.msg-type.active .msg-type-btn.has-unread');
            if (!$(this).hasClass('disabled')) {
               noti.readAllByType(btn);
               /* Act on the event */
               dataType = btn.attr('data-type');
               btn.removeClass('has-unread');
               $('#chat_tab_' + dataType + " .sl-item-notification").removeClass('item-unread');
            }
         });
      },
      showNoti: function() {
         $('.notification-contain').on('click', function(event) {
            event.preventDefault();
            thisNoti = $(this);
            swal({
               title: thisNoti.find('.notification-title').text(),
               text: thisNoti.find('.notification-message').html(),
               html: true
            });
         });
      },
      readNoti: function() {
         $('.notification-link').on('click', function(e) {
            thisNoti = $(this);
            newCount = $('#count-message').text() - 1;
            if (newCount < 0) {
               newCount = 0;
            }
            if (thisNoti.parents('.sl-item').hasClass('item-unread')) {
               thisNoti.parents('.sl-item').removeClass('item-unread');
               $('#count-message').text(newCount);
            }
            $.ajax({
               url: thisNoti.attr('data-read'),
               type: 'GET',
               dataType: 'json',
               success: function(data) {
                  thisNoti.parents('.sl-item').removeClass('item-unread');
               }
            });
         });
      },
      markRead: function() {
         $(document).on('click', '.notification-link', function(event) {
            var thisClick = $(this);
            $.ajax({
               url: thisClick.attr('data-read'),
               type: 'GET',
               dataType: 'JSON',
               data: {
                  _token: $('body').attr('data-token'),
               },
               success: function() {
                  // window.location.href = thisClick.href;
               }
            })
            
         });
      }
   }
   noti.construct();
})(jQuery)


// fix nav inside dropdown
// $('.dropdown.keep-open .nav-tabs').on('click', 'a', function(){
//    console.log('ok');
//     $(this).closest('.dropdown.keep-open').addClass('dontClose');
// })

// $('.dropdown.keep-open').on('hide.bs.dropdown', function(e) {
//    console.log('ok 2');
//     if ( $(this).hasClass('dontClose') ){
//          console.log('ok 3');
//         e.stopPropagation();
//         e.preventDefault();
//     }
//     $(this).removeClass('dontClose');
// });

// $('.dropdown .keep-open').on('click',  function(evt) {
//    console.log('ok');
//    // $(this).find('.nav-tabs').toggle();
//    // evt.stopPropagation('hide.bs.dropdown');
//    // hide.bs.dropdown
//    // show.bs.tab
//    // shown.bs.tab
//    // evt.preventDefault();
//    $(this).parents('.dropdown').on('hide.bs.dropdown', function(e) {
//       console.log('ok 2');
//       e.stopPropagation();
//       return false;
//    });
// });

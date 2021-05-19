var gComment = {
    loadComment : function(linkedId, frontend, cPrivate, commentContainer)  {
            if(typeof cPrivate === 'undefined') {
                cPrivate = 0;
            }
            $.ajax({
            url: '/comment/get-comment-' + linkedId + '?c_private=' + cPrivate + '&f=' + frontend,
            type: 'GET',
            dataType: 'JSON',
            beforeSend: function(){
            },
            success: function(data) {
                gComment.commentContainer(data, frontend, commentContainer);
                gComment.editComment();
            }
        });
    },

    checkImage: function(string) {
        console.log(string);
        if(typeof string != 'undefined')
            return(string.match(/\.(jpeg|jpg|gif|png|pdf)$/) != null);
        return false;
    },

    /**
     * width của ô comment
     */
    calcuComment : function(frontend) {
        return;

    },

    extractComment : function(comments, frontend) {
        if(typeof frontend === 'undefined') {
            frontend = 0;
        }
        tempContainer = '';

        $.each(comments, function(index, comment) {
            var sourcePath = '/uploads/comments/' + comment.c_linked_to + '/';

            // Kiểm tra nếu là ảnh
            // nếu là ảnh thì hiện ảnh
            var fileOut = '';
            if(gComment.checkImage(comment.c_file)) {
                fileOut = "<a class='btn-link btn-fancy-box' data-fancybox='gallery1' href='" + sourcePath + comment.c_file + "'>" + '<img style="width: 100%;" src="' + sourcePath + comment.c_file +'">' + "</a>";
            } else {
                fileOut = "<a class='btn-link' href='" + sourcePath + comment.c_file + "'>" +  comment.c_file + "</a>";
            }

            if(comment.c_style == 2) {
                tempContainer +=        "<div class='c-staff text-comment'><span title='" + comment.c_created_at + "'><b>" + comment.name + ": </b>"; 
                // nếu là file
                if(comment.c_body == 'file') {
                    tempContainer += fileOut ;
                    tempContainer += "<a class='btnDeleteComment btn btn-xs btn-link text-danger' data-id='" + comment.c_id + "'>Xóa</a>"
                    
                } else {

                    // nếu là frontend thì k được sửa
                    if(frontend) {
                        tempContainer += "<a class='' style='display: inline;' data-url='/comment/edit-comment-"+ comment.c_id +"' data-name='c_body' data-pk='" + comment.c_id +"' title='Sửa comment' data-type='textarea'>" + comment.c_body + "</a>";
                    } else {
                        tempContainer += "<a class='x-editable1' style='display: inline;' data-url='/comment/edit-comment-"+ comment.c_id +"' data-name='c_body' data-pk='" + comment.c_id +"' title='Sửa comment' data-type='textarea'>" + comment.c_body + "</a>";
                        tempContainer += "<a class='btnDeleteComment btn btn-xs btn-link text-danger' data-id='" + comment.c_id + "'>Xóa</a>"
                    }
                }

                tempContainer += "<br><small class='msg-time txt-grey pull-right'>" + comment.c_created_at + "</small></span><i class='clearfix'></i></div>";
            } else {
                tempContainer +=        "<div class='c-customer text-comment'><span title='" + comment.c_created_at + "'><b>" + comment.name + ": </b>";
                //file
                if(comment.c_body == 'file') {
                    tempContainer += fileOut;
                } else {
                    tempContainer += comment.c_body;
                }
                tempContainer += "<br><small class='msg-time txt-grey pull-left'>" + comment.c_created_at + "</small></span><i class='clearfix'></i></div>";
            }
        });
        // 
        return tempContainer;
    },

    toComment : function(){
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
        $('.body-comment, .body-comment .content').animate({
            scrollTop: $('.body-comment .content > .clearfix').offset().top + 10000000
        }, 1000);
    },


    /**
     * Comment
     */
    commentContainer : function(data, frontend, commentContainer){
        if(typeof commentContainer === 'undefined') {
            commentContainer = '.comment-container';
        }
        var com = $(commentContainer);

        var container = '';

        container += "<div class='body-comment t_scroll'>";
        container +=    "<div class='content' style='height: 100%;'>";

        if(data.code == 0) {
            container += "<div>Chưa có trao đổi nào</div>"
        } else {
            container += gComment.extractComment(data.comments, frontend);
        }
        container +=    "<i class='clearfix'></i>";
        container +=    "</div>";
        container += "</div>";

        container += "<div class='send-comment block-chatbox input-group attachment-container'>\
                <textarea placeholder='Type something' name='c_comment' class='form-control input-msg-send c_comment'></textarea>\
                <div class='input-group-btn emojis t_emojis'>\
                    <div class='dropup'>\
                        <button type='button' class='btn doComment btn-default dropdown-toggle'><i class='fa fa-paper-plane'></i></button>\
                    </div>\
                </div>\
                <div class='input-group-btn attachment'>\
                    <div class='fileupload btn btn-default'>\
                        <i class='zmdi zmdi-attachment-alt'></i><input class='upload'>\
                    </div>\
                </div>\
                <input type='file' name='file' class='hidden btn_upload'>\
            </div>";


        com.html(container);
        gComment.toComment();
    },

    doComment : function (frontend, private){
        $(document).on('click', '.doComment', function(event) {
            event.preventDefault();
            var thisDo = $(this);
            var value = thisDo.parents('.send-comment').find('.c_comment').val();
            if(value == '') {
                alert('Mời bạn gửi trao đổi cho chúng tôi');
                return;
            }
            var parentDo = thisDo.parents('.chat-content');
            var cStyle = parentDo.attr('data-style');
            var cType = parentDo.attr('data-type');
            var cLinked = parentDo.attr('data-linked');

            $.ajax({
                url: parentDo.attr('data-comment'), 
                type: 'POST',
                dataType: 'JSON',
                data: {
                    c_body : value,
                    _token : $('body').attr('data-token'),
                    c_style : cStyle,
                    c_type : cType,
                    c_linked_to : cLinked,
                    c_private: parentDo.attr('data-private')
                },
                beforeSend: function() {
                    $('.c_comment').val('');
                },
                success: function(data){
                    appendHtml = gComment.extractComment(data.comment, frontend);
                    thisDo.parents('.chat-content').find('.content').append(appendHtml);
                    gComment.toComment();
                    gComment.editComment();
                }
            });
        });
    },
    doCommentImage : function (frontend){
        $(document).on('click', '.attachment-container .attachment', function(event) {
            event.preventDefault();
            $(this).parents('.attachment-container').find('.btn_upload').click();
        });
        $(document).on('change', '.attachment-container .btn_upload', function(event) {
            var thisChange = $(this);
            var file_name = thisChange.val();
            var fileName = thisChange.val();
            var fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);

            if(fileExtension != 'jpeg' && fileExtension != 'jpg') {
                console.log('Chỉ có thể comment ảnh định dạng jpeg hoặc jpg.');
                // return;
            }
            var file_data= thisChange.prop("files")[0];
            var parentDo = thisChange.parents('.chat-content');
            var cStyle = parentDo.attr('data-style');
            var cType = parentDo.attr('data-type');
            var cLinked = parentDo.attr('data-linked');
            var cPrivate = parentDo.attr('data-private');

            var form_data = new FormData();
            form_data.append("c_file", file_data);
            form_data.append("c_style", cStyle);
            form_data.append("c_type", cType);
            form_data.append("c_linked_to", cLinked);
            form_data.append("c_private", cPrivate);
            form_data.append("c_body", 'file');
            form_data.append("_token", $('body').attr('data-token'));

            $.ajax({
                url: parentDo.attr('data-comment'),
                type: 'POST',
                dataType: 'JSON',
                data: form_data,
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                   $(".btn_upload").val('');
                },
                success: function(data){
                    if(data.error == 1) {
                        gNoti(data.message);
                        return;
                    }
                    appendHtml = gComment.extractComment(data.comment, frontend);
                    thisChange.parents('.chat-content').find('.content').append(appendHtml);
                    gComment.toComment();
                }
            });

        });
    },

    showHideCommentBar : function (){
        $('.public-comment').on('click', '.btnComment', function() {
          var linked = $('.comment-container').attr('data-linked');
          gComment.loadComment(linked);
          $(this).removeClass('btnComment').addClass('btnHide');
          $('.comment-container').show('fast');
       });
        $('.public-comment').on('click', '.btnHide', function(event) {
            $(this).removeClass('btnHide').addClass('btnComment');
        $('.comment-container').hide('fast');
       });
    },

    countUnreadComment : function() {
        return;
        var numberComment = $('.number-comment');
        linkedId = numberComment.attr('data-linked');
        $.ajax({
            url: '/comment/count-unread-' + linkedId,
            type: 'GET',
            dataType: 'JSON',
            success : function(data){
                numberComment.html(data);
            }
        });
        
    },
    editComment: function() {
        $.fn.editable.defaults.mode = 'inline';
        xEditable1();
    },
    deleteComment: function() {
      $(document).on('click', '.btnDeleteComment', function(){
        var thisClick = $(this);
        tConfirm(function(){
            $.ajax({
                url: '/comment/delete',
                type: 'POST',
                dataType: 'JSON',
                data: {
                  _token: $('body').attr('data-token'),
                  c_id: thisClick.attr('data-id'),
                },
                success : function(res){
                    gNoti(res.message);
                    if(res.error == 0) {
                      thisClick.parents('.c-staff').remove();
                      // swal({"type": "error", "title": "Có lỗi", "text": res.message});
                    } else {
                      swal({"type": "error", "title": "Có lỗi", "text": res.message});
                    }
                }
            });
        });
      });
    },
    setCommentRegular: function() {
        $('.comment_regular').change(function(event) {
            var parent = $(this).parents('.comment_customer').find('.c_comment');
            var value = $(this).val();
            parent.val(value);
        });
    }
}
jQuery(document).ready(function($) {
    frontend = $('.comment-container').attr('data-frontend');
    gComment.showHideCommentBar();
    gComment.doComment(frontend);
    gComment.doCommentImage(frontend);
    gComment.setCommentRegular();
    gComment.deleteComment();
});
// style

<div class="widget-body">
    <a href="#" class="btn-trigger-show-seo-detail">Chỉnh sửa SEO</a>
    <div class="seo-preview">
        <p class="default-seo-description ">Thiết lập các thẻ mô tả giúp người dùng dễ dàng tìm thấy trên công cụ tìm kiếm như Google.</p>
        <div class="existed-seo-meta">
            <span class="page-title-seo">
                 
            </span>

            <div class="page-url-seo ws-nm">
                <p>-</p>
            </div>

            <div class="ws-nm">
                <span style="color: #70757a;"></span>
                <span class="page-description-seo">
                    
                </span>
            </div>
        </div>
    </div>


    <div class="seo-edit-section">
        <hr>
        <div class="form-group">
            <label for="seo_title" class="control-label">Tiêu đề trang</label>
            <input class="form-control" onchange="seo_preview()" id="seo_title" value="{{old('title')}}" placeholder="Tiêu đề trang" data-counter="120" name="title" type="text" required >
        </div>
        <div class="form-group ">
            <div id="edit-slug-box"  class="" >
                <label class="control-label required" for="current-slug">Đường dẫn:</label>
                <span id="sample-permalink">
            
                <span class="default-slug">http://domain/<span id="editable-post-name">
                    <input type="text" onchange="seo_preview()" value="{{old('url')}}" name="url" id="new-post-slug" class="form-control is-valid" required value="" autocomplete="off"></span></span></span>
            ‎    <span id="edit-slug-buttons">
                    <!-- <button type="button" class="btn btn-secondary" id="change_slug">Sửa</button> -->
                    <button type="button" class="save btn btn-secondary" id="btn-ok">OK</button>
                    <button type="button" class="cancel button-link">Hủy bỏ</button>
                    <a class="btn btn-info btn-preview" target="_blank" >Preview</a>
                </span>
            </div>
            <input type="hidden" id="current-slug" name="slug" value="">
            <div data-url="#" data-view="#" id="slug_id" data-id="0"></div>
            <input type="hidden" name="slug_id" value="0">
        </div>
        <div class="form-group">
            <label for="seo_description" class="control-label">Từ khóa</label>
            <textarea class="form-control" onchange="seo_preview()" rows="3" id="seo_keyword" placeholder="từ khóa" data-counter="500" name="seo_keyword" required cols="50">{{old('seo_keyword')}}</textarea>
        </div>
        <div class="form-group">
            <label for="seo_description" class="control-label">Mô tả trang</label>
            <textarea class="form-control" onchange="seo_preview()" rows="3" id="seo_description" placeholder="Mô tả trang" data-counter="500" required name="seo_description" cols="50">{{old('seo_description')}}</textarea>
        </div>
    </div>

</div>
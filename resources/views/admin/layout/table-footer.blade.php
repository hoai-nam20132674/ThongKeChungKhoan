<div class="datatables__info_wrap">
	<div class="dataTables_paginate paging_simple_numbers" id="table-products_paginate">
		<ul class="pagination" request="{{$request->page}}">
			@if($items->currentPage() != 1)
				<li class="paginate_button page-item previous" id="table-products_previous">
					<a href="{{$items->url($items->currentPage()-1)}}" aria-controls="table-products" aria-label="&amp;laquo; Trước" data-dt-idx="0" tabindex="0" class="page-link">« Trước</a>
				</li>
			@else
				<li class="paginate_button page-item previous disabled" id="table-products_previous">
					<a href="{{$items->url($items->currentPage()-1)}}" aria-controls="table-products" aria-label="&amp;laquo; Trước" data-dt-idx="0" tabindex="0" class="page-link">« Trước</a>
				</li>
			@endif
			@for($i =1; $i<=$items->lastPage();$i++)
				@if($request->page == $i)
					<li data-dt-idx="{{$i}}" class="paginate_button page-item active"><a href="{{$items->url($i)}}" aria-controls="table-products" data-dt-idx="{{$i}}" tabindex="0" class="page-link">{{$i}}</a></li>
				@else
					<li data-dt-idx="{{$i}}" class="paginate_button page-item"><a href="{{$items->url($i)}}" aria-controls="table-products" data-dt-idx="{{$i}}" tabindex="0" class="page-link">{{$i}}</a></li>
				@endif
			@endfor
			@if( $items->currentPage() != $items->lastPage())
				<li class="paginate_button page-item next" id="table-products_next">
					<a href="{{$items->url($items->currentPage()+1)}}" aria-controls="table-products" aria-label="Sau &amp;raquo;" data-dt-idx="3" tabindex="0" class="page-link">Sau »</a>
				</li>
			@else
				<li class="paginate_button page-item next disabled" id="table-products_next">
					<a href="{{$items->url($items->currentPage()+1)}}" aria-controls="table-products" aria-label="Sau &amp;raquo;" data-dt-idx="3" tabindex="0" class="page-link">Sau »</a>
				</li>
			@endif
		</ul>
	</div>
	
	<div class="dataTables_info" id="table-products_info" role="status" aria-live="polite">
		<span class="dt-length-records">
			<i class="fa fa-globe"></i>
			@if($request->page =='')
				<span class="d-none d-sm-inline">Hiển thị từ</span> 1 đến 15 trong tổng số <span class="badge badge-secondary bold badge-dt">{{count($items)}} </span><span class="hidden-xs"> bản ghi</span>
			@else
				<span class="d-none d-sm-inline">Hiển thị từ</span> {{($request->page - 1)*15 + 1}} đến {{($request->page)*15}} trong tổng số <span class="badge badge-secondary bold badge-dt">{{count($items)}} </span><span class="hidden-xs"> bản ghi</span>
			@endif

		</span>
	</div>
	<div class="clearfix"></div>
	<script type="text/javascript">
		$(document).ready(function(){
			var request = $('.pagination').attr('request');
			if(request == ''){
				var select = $('.page-item[data-dt-idx="1"]');
				select.addClass('active');
			}
			console.log(request);
		});
		
		
	</script>
</div>
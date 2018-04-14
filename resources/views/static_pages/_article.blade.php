<!--EDUCATION-->
	<section class="grey-bg" id="education">
	  <div class="container">
		<div class="row">
		  <div class="col-md-3">
			<h3 class="title-small">
			  <span>Article</span>
			</h3>
			<p class="content-detail">
			  Recently
			</p>
		  </div>
		  <div class="col-md-9 content-right">
			<div class="row">

			  <ul class="listing-item">

			  	@foreach($articles as $article)
			  	@include('static_pages._disp_ar')
				@endforeach

			  </ul>

			</div>
		  </div>
		</div>
	  </div>
	</section>
	<!--/.EDUCATION END-->
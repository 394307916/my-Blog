<!-- <div align="center">
<a data-toggle="modal" data-target="#myModal">
	<button type="button" class="btn btn-default">留言</button>
</a>
</div>


<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-body">
				<form action="{{ route('comment.store')}}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="user">Name:</label>
						<input type="text" name="name" class="form-control" required="required" >
						<label for="comment">Comment:</label>
						<textarea class="form-control" rows="5" name="content" required="required" ></textarea>
						<div align="center">
						<button type="submit" class="btn btn-default">提交</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
-->


<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">留言</button>
<div id="demo" class="collapse">
	<form action="{{ route('comment.store')}}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="user">Name:</label>
			<input type="text" name="name" class="form-control" required="required" >
			<label for="comment">Comment:</label>
			<textarea class="form-control" rows="5" name="content" required="required" ></textarea>
			<div align="center" style="margin-top: 5px">
				<button type="submit" class="btn btn-info">提交</button>
			</div>
		</div>
	</form>
</div>
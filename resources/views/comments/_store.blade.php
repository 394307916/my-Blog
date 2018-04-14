<div align="center">
<a data-toggle="modal" data-target="#myModal">
	<span class="glyphicon glyphicon-pencil"></span>
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
						<input type="text" name="name" class="form-control">
						<label for="comment">Comment:</label>
						<textarea class="form-control" rows="5" name="content"></textarea>
						<div align="center">
						<button type="submit" class="btn btn-default">提交</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="search bar1">
        <form action="{{ route('link.search')}}" method="GET">
        	{{ csrf_field() }}
            <input type="text" name="sou" placeholder="请输入您要搜索的内容...">
            <button type="submit"></button>
        </form>
</div>
<!DOCTYPE html>
<html>
<head>
    <title>新留言</title>
</head>
<body>
    <h1>您有一条新的留言</h1>
    <h2>姓名:{{ $comment->name }}
    <p>内容:
    {{ $comment->content }}
    </p>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TODOリスト</title>
</head>
<body>
<div>
    <label for="task">やること：</label>
    <input type="text" name="name" id="name">
    <button type="submit" id="addButton">追加</button>
</div>
<ul id="taskList">
    @foreach ($tasks as $task)
        <li>{{ $task->name }}</li>
    @endforeach
</ul>
<script src="/bundle.js"></script>
</body>
</html>
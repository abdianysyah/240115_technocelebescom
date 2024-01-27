<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Article</title>
</head>
<body>
  <form method="post" action="{{ route('update-article-post') }}">
  {{ @csrf_field()}}
    <input type="hidden" name="article_id" value="{{ $article->article_id }}">
    <label>Title</label>
    <input type="text" name="title" value="{{ $article->title }}">

    <label>Image</label>
    <input type="text" name="image" value="{{ $article->image }}">

    <label>Isi</label>
    <input type="text" name="editor1" value="{{ $article->isi }}">

    <button type="submit">Update</button>
  </form>
</body>
</html>

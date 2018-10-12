<label for="">Статус</label>
<select class="form-control" name="published">
    <option value="0" @if (isset($article->id) && !$article->published) selected @endif>Не опубликовано</option>
    <option value="1" @if (isset($article->id) && $article->published) selected @endif>Опубликовано</option>
</select>
<br />

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{ $article->title ?? ''}}" required />
<br />

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $article->slug ?? ''}}" readonly />
<br />

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple>
    @include('admin.articles.partials.categories', [
        'categories' => $categories
    ])
</select>
<br />

<label for="">Краткое описание</label>
<textarea class="form-control ckeditor" name="description_short">{{ $article->description_short ?? '' }}</textarea>
<br />

<label for="">Описание</label>
<textarea class="form-control ckeditor" name="description">{{ $article->description ?? '' }}</textarea>
<br />

<label for="">META title</label>
<input type="text" class="form-control" name="meta_title" placeholder="META title" value="{{ $article->title ?? '' }}" />
<br />

<label for="">META keywords</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="META keywords" value="{{ $article->keyword ?? '' }}" />
<br />

<label for="">META description</label>
<input type="text" class="form-control" name="meta_description" placeholder="META description" value="{{ $article->description ?? '' }}" />
<br />

<hr />

<input class="btn btn-success" type="submit" value="Сохранить" />
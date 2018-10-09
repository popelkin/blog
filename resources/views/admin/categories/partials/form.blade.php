<label for="">Статус</label>
<select class="form-control" name="published">
    <option value="0" @if (isset($category->id) && !$category->published) selected @endif>Не опубликовано</option>
    <option value="1" @if (isset($category->id) && $category->published) selected @endif>Опубликовано</option>
</select>
<br />

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{ $category->title ?? ''}}" required />
<br />

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $category->slug ?? ''}}" readonly />
<br />

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories', [
        'categories' => $categories
    ])
</select>

<hr />

<input class="btn btn-success" type="submit" value="Сохранить" />
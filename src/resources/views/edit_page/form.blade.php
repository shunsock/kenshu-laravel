<form
    action="/edit_article?id={{ $article->getId() }}&author={{ $article->getAuthor() }}"
    method="post"
    class="signup"
>
    @csrf
    <label for="title">Title:</label>
    <input
        type="text"
        id="title"
        name="title"
        value={{$article->getTitle()}}
        required="required"
    />

    <label for="content">Content:</label>
    <textarea
        type="text"
        id="content"
        name="content"
        required="required"
    >{{ $article->getBody()  }}</textarea>

    <input
        type="hidden"
        id="id"
        name="id"
        value={{ $article->getId()}}
    />

    <button type="submit" class="submit_button">SUBMIT</button>
</form>

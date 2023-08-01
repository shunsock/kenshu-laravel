<form
    action="/create_article"
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

    <button type="submit" class="submit_button">SUBMIT</button>
</form>

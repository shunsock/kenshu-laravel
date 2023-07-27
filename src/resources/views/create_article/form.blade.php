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
        placeholder="enter title"
    />

    <label for="content">Content:</label>
    <textarea
        type="text"
        id="content"
        name="content"
        placeholder="enter content"
    ></textarea>

    <button type="submit" class="submit_button">SUBMIT</button>
</form>

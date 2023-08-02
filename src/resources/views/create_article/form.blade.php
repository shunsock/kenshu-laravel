<form
    action="/create_article"
    method="post"
    enctype="multipart/form-data"
    class="signup"
>
    @csrf
    <label for="thumbnail">Image:</label>
    <input
        type="file"
        id="image"
        name="image"
        class=""
        placeholder="enter image"
    />
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

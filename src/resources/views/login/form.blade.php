<form
    action="/login"
    method="post"
    class="signup"
>
    @csrf
    <label for="username">Name:</label>
    <input
        type="text"
        id="username"
        name="username"
        placeholder="please input your name"
    />

    <label for="password">Password:</label>
    <input
        type="password"
        id="password"
        name="password"
        placeholder="please input your password"
    />

    <button type="submit" class="submit_button">SUBMIT</button>
</form>

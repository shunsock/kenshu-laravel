<form
    action="/signup"
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

    <label for="email">Email:</label>
    <input
        type="email"
        id="email"
        name="email"
        placeholder="please input your email"
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

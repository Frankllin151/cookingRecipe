<form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <div>
        <label for="email">Email</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>

        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">
            Login
        </button>
    </div>
</form>


<x-layouts.app>
    <h2>Admin Login</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit', [], false) }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required class="p-10"><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</x-layouts.app>
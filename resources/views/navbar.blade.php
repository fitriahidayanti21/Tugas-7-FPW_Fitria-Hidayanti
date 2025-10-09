<nav>
    <ul style="list-style:none; display:flex; gap:15px; padding:0; margin:0;">
        <li><a href="/home">Home</a></li>
        <li><a href="/buku">Buku</a></li>
        <li><a href="/page">Page</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:blue; cursor:pointer; text-decoration:underline; padding:0; font:inherit;">
                    Logout
                </button>
            </form>
        </li>
    </ul>
</nav>

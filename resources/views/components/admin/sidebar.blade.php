<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="active">
            <a href="{{URL::to('/')}}">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li class="header">ADMIN</li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">people</i>
                <span>Manage Users</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="/admin/anggota">
                        <i class="material-icons">person</i>
                        <span>Anggota</span>
                    </a>
                </li>

                <li>
                   <a href="/admin/donatur">
                        <i class="material-icons">person</i>
                        <span>Donatur</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="/admin/timeline">
                <i class="material-icons">timeline</i>
                <span>Manage Timeline</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="/admin/anggota">
                        <i class="material-icons">create</i>
                        <span>Manage Posting Blog</span>
                    </a>
                </li>

                <li>
                   <a href="/admin/donatur">
                        <i class="material-icons">assignment_turned_in</i>
                        <span>Verifikasi Posting Blog</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/admin/blog">
                <i class="material-icons">assignment</i>
                <span>Manage Blog</span>
            </a>
        </li>
        <li>
            <a href="/admin/keuangan">
                <i class="material-icons">monetization_on</i>
                <span>Manage Keuangan</span>
            </a>
        </li>
        <li>
            <a href="/admin/chat">
                <i class="material-icons">chat</i>
                <span>Chatting</span>
            </a>
        </li>

    </ul>
</div>
<!-- #Menu -->
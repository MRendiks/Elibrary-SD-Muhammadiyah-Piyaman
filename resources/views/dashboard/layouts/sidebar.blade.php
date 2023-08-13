<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/buku') ? 'active' : ''}}" href="/data-buku">
              <span data-feather="book" class="align-text-bottom"></span>
              Buku
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{Request::is('/anggota') ? 'active' : ''}}" href="/data-anggota">
              <span data-feather="users" class="align-text-bottom"></span>
              Anggota
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{Request::is('/pinjam') ? 'active' : ''}}" href="/data-pinjam">
              <span data-feather="users" class="align-text-bottom"></span>
              Peminjaman
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{Request::is('/kembali') ? 'active' : ''}}" href="/data-kembali">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Pengembalian
            </a>
          </li>

        </ul>

       
          </li>
        </ul>
      </div>
    </nav>
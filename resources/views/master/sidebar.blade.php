<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Dikaretin</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">Dr</a>
      </div>
      <ul class="sidebar-menu">
          <li class="nav-item ">
            <a href="{{Route('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="{{Route('pendapatan')}}" class="nav-link" ><i class="fas fa-columns"></i> <span>Pendapatan Karet</span></a>
          </li>
          <li class=""><a class="nav-link" href="{{Route('perkiraan')}}"><i class="far fa-square"></i> <span>Perkiraan Pendapatan</span></a></li>
          <li class="nav-item dropdown">
            <a href="{{Route('keuangan')}}" class="nav-link"><i class="fas fa-th"></i> <span>Keuangan</span></a>
          </li>
          @if(Auth::user()->role_id != 3)
          <li class="nav-item dropdown">
            <a href="{{Route('pegawai')}}" class="nav-link"><i class="fas fa-th"></i> <span>Data Pegawai</span></a>
          </li>
          @endif
        </ul>

    </aside>
  </div>
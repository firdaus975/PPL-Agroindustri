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
          @if(Auth::user()->status_id!=2)
          <li class="nav-item dropdown">
            <a href="{{Route('pendapatan')}}" class="nav-link" ><i class="fas fa-columns"></i> <span>Pendapatan Karet</span></a>
          </li>
          <li class=""><a class="nav-link" href="{{Route('perkiraan')}}"><i class="fas fa-chart-bar"></i> <span>Perkiraan Pendapatan</span></a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-check-alt"></i> <span>Keuangan</span></a>
			<ul class="dropdown-menu">
			@if(Auth::user()->role_id == 1)
                  <li><a class="nav-link" href="{{Route('pengeluaranPabrik')}}">Pengeluaran Pabrik</a></li>
			  @endif
				  @if(Auth::user()->role_id != 3)
                  <li><a class="nav-link" href="{{Route('pendapatanPabrik')}}">Penjualan Karet</a></li>
				@endif
                  <li><a class="nav-link" href="{{Route('gaji',[Auth::user()->id,Auth::user()->role_id])}}">Gaji</a></li>
                </ul>
          </li>
          @if(Auth::user()->role_id != 3)
          <li class="nav-item dropdown">
            <a href="{{Route('pegawai')}}" class="nav-link"><i class="fas fa-users"></i> <span>Data Pegawai</span></a>
          </li>
          @endif
          @endif
        </ul>

    </aside>
  </div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is("bab5") ? 'active' : '' }}">
        <a href="/bab5/"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
    </li>
    <li class="{{ request()->is('bab5/guru') ? 'active' : '' }}">
        <a href="/bab5/guru"><i class="fa fa-dashboard"></i><span>Guru</span></a>
    </li>
    <li class="{{  request()->is('bab5/siswa') ? 'active' : '' }}">
        <a href="/bab5/siswa"><i class="fa fa-dashboard"></i><span>Siswa</span></a>
    </li>
    <li class="{{ request()->is('bab5/user') ? 'active' : '' }}">
        <a href="/bab5/user"><i class="fa fa-dashboard"></i><span>User</span></a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-share"></i>
            <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level One</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level One</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="https://adminlte.io/docs"><i class="fa fa-book"></i><span>Documentation</span></a>
    </li>
</ul>
<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin/dashboard')}}" class="visible-phone"><i class="fas fa-camera-retro"></i>Dashboard</a>
  <ul>
    <li class="active"><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span class="fa fa-lg-delete">Dashboard</span></a> </li>
    
    <li class="submenu"> <a href="#"><i class="fa fa-book fa-lg"></i><span>News</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/news-add')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Add News</a></li>
        <li><a href="{{url('/admin/news-view')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- View News</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="{{url('/admin/list-manu')}}"><i class="fa fa-book fa-lg"></i><span>Academic</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/academic-associate')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Associate</a></li>
        <li><a href="{{url('/admin/academic-bachelor')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bachelor</a></li>
        <li><a href="{{url('/admin/academic-master')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Master</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="{{url('/admin/list-manu')}}"><i class="fa fa-book fa-lg"></i><span>IT Learning</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/itlearn-programing')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Programming</a></li>
        <li><a href="{{url('/admin/itlearn-network')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Network</a></li>
        <li><a href="{{url('/admin/itlearn-design')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Design</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="{{url('/admin/activitis')}}"><i class="fa fa-book fa-lg"></i><span>Activitis</span> <span class="label label-important"></span></a>    </li>

    <li class="submenu"> <a href="{{url('/admin/list-member')}}"><i class="fa fa-book fa-lg"></i><span>Member</span> <span class="label label-important"></span></a>

    </li>
    <li class="submenu"> <a href="{{url('/admin/user')}}"><i class="fa fa-book fa-lg"></i><span>User</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="{{url('/admin/list-user')}}">List User</a></li>
        <li><a href="{{url('/admin/add-user')}}">Add User</a></li>
        
      </ul>
    </li>

    <li><a href="{{url('admin/settings')}}"><i class="fa fa-book fa-lg"></i><span>Settings</span></a></li>

    
  </ul>
</div>
<!--sidebar-menu--> 
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        
        <p> {{ Auth()->user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    @php
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'dashboard'){
         $active1 = 'active';
    }
    @endphp
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION </li>
      <li class="treeview {{$active1}}">
        <a href="{{route('dashboard')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
    
  
    @php
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'category.view' || $route == 'category.show'){
         $active1 = 'active';
    }
    @endphp
    @if (checkSlug('add_category') == true || checkSlug('list_category') == true)
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Category</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @if (checkSlug('add_category') == true )
          <li class="{{($route == 'category.show') ? 'active' : '' }}"><a href="{{route('category.show')}}" ><i class="fa fa-circle-o"></i> Add Category</a></li>
         @endif
         
         @if (checkSlug('list_category') == true )
          <li class="{{($route == 'category.view') ? 'active' : '' }}"><a href="{{route('category.view')}}"><i class="fa fa-circle-o"></i> List Category</a></li>
          @endif
        </ul>
      </li>
      @endif


      @php
      $active1 = '';
      if($route == 'tag.view' || $route == 'tag.show'){
      $active1 = 'active';
      }
      @endphp
   @if(checkSlug('add_tag') == true || checkSlug('list_tag') == true)
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Tag</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @if (checkSlug('add_tag') == true)
          <li class="{{($route == 'tag.show') ? 'active' : '' }}"><a href="{{route('tag.show')}}"><i class="fa fa-circle-o"></i> Add Tag</a></li>
         @endif
         @if (checkSlug('list_tag') == true)
          <li class="{{($route == 'tag.view') ? 'active' : '' }}"><a href="{{route('tag.view')}}"><i class="fa fa-circle-o"></i> List Tag</a></li>
        @endif
        </ul>
      </li>
@endif

      @php
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'post.view' || $route == 'post.show'){
         $active1 = 'active';
    }
    @endphp
      @if(checkSlug('add_post') == true || checkSlug('list_post') == true)
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Post</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @if(checkSlug('add_post') == true)
          <li class="{{($route == 'post.show') ? 'active' : '' }}"><a href="{{route('post.show')}}"><i class="fa fa-circle-o"></i> Add Post</a></li>
         @endif
         @if(checkSlug('list_post') == true )
          <li class="{{($route == 'post.view') ? 'active' : '' }}"><a href="{{route('post.view')}}"><i class="fa fa-circle-o"></i> List Post</a></li>
        @endif
        </ul>
      </li>
      @endif
      @php
     
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'admin.view' || $route == 'admin.show'){
         $active1 = 'active';
    }
    @endphp
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{($route == 'admin.show') ? 'active' : '' }}"><a href="{{route('admin.show')}}"><i class="fa fa-circle-o"></i> Add Admin</a></li>
          <li class="{{($route == 'admin.view') ? 'active' : '' }}"><a href="{{route('admin.view')}}"><i class="fa fa-circle-o"></i> List Admin</a></li>
        </ul>
      </li>
      @php
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'permission.view' || $route == 'permission.add'){
         $active1 = 'active';
    }
    @endphp
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Permission</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{($route == 'permission.add') ? 'active' : '' }}"><a href="{{route('permission.add')}}"><i class="fa fa-circle-o"></i> Add Permission</a></li>
          <li class="{{($route == 'permission.view') ? 'active' : '' }}"><a href="{{route('permission.view')}}"><i class="fa fa-circle-o"></i> List Permission</a></li>
        </ul>
      </li>
      @php
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'role.view' || $route == 'role.add'){
         $active1 = 'active';
    }
    @endphp
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Roles</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{($route == 'role.add') ? 'active' : '' }}"><a href="{{route('role.add')}}"><i class="fa fa-circle-o"></i> Add Role</a></li>
          <li class="{{($route == 'role.view') ? 'active' : '' }}"><a href="{{route('role.view')}}"><i class="fa fa-circle-o"></i> List Role</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
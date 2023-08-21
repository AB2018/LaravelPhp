<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
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
    if($route == 'category.view' || $route == 'category.show'){
         $active1 = 'active';
    }
    @endphp
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION </li>
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Category</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{($route == 'category.show') ? 'active' : '' }}"><a href="{{route('category.show')}}" ><i class="fa fa-circle-o"></i> Add Category</a></li>
          <li class="{{($route == 'category.view') ? 'active' : '' }}"><a href="{{route('category.view')}}"><i class="fa fa-circle-o"></i> List Category</a></li>
        </ul>
      </li>


      @php
      $active1 = '';
      if($route == 'tag.view' || $route == 'tag.show'){
      $active1 = 'active';
      }
      @endphp

      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Tag</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{($route == 'tag.show') ? 'active' : '' }}"><a href="{{route('tag.show')}}"><i class="fa fa-circle-o"></i> Add Tag</a></li>
          <li class="{{($route == 'tag.view') ? 'active' : '' }}"><a href="{{route('tag.view')}}"><i class="fa fa-circle-o"></i> List Tag</a></li>
        </ul>
      </li>
      @php
    $active1 = '';
    $route =request()->route()->getName();
    if($route == 'post.view' || $route == 'post.show'){
         $active1 = 'active';
    }
    @endphp
      <li class="treeview {{$active1}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Post</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{($route == 'post.show') ? 'active' : '' }}"><a href="{{route('post.show')}}"><i class="fa fa-circle-o"></i> Add Post</a></li>
          <li class="{{($route == 'post.view') ? 'active' : '' }}"><a href="{{route('post.view')}}"><i class="fa fa-circle-o"></i> List Post</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
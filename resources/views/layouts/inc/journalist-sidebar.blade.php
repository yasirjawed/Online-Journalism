<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Admin Panel</div>
                <a class="nav-link {{Request::Is('journalist/dashboard')?'active':'' }}" href="{{url('journalist/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{url('/')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Online Journalism Website
                </a>
                <a class="nav-link collapsed {{Request::Is('journalist/add-post') || Request::Is('admin/post') || Request::Is('admin/post/*') ? 'show active':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsepost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::Is('journalist/add-post')?'active':'' }}" href="{{url('journalist/add-post')}}">Add Posts</a>
                        <a class="nav-link {{Request::Is('journalist/post') || Request::Is('journalist/post/*') ?'active':'' }}" href="{{url('journalist/post')}}">View Posts</a>
                    </nav>
                </div>
                <a class="nav-link {{Request::Is('journalist/pending_post')?'active':'' }}" href="{{url('journalist/pending_post')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Pending Post
                </a>
                <a class="nav-link {{Request::Is('journalist/rejected_post')?'active':'' }}" href="{{url('journalist/rejected_post')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Rejected Post <span style="color: red"> @php Session::get('variableName'); @endphp</span>
                </a>
            </div>

        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Arsalan Siddiqui
        </div>
    </nav>
</div>

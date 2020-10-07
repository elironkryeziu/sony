<div class="c-sidebar c-sidebar-dark c-sidebar-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
      {{ config('app.name', 'Laravel') }}
        
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/">
             Dashboard
            <!-- <span class="badge badge-info">NEW</span> -->
            </a>
            </li>
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
             Logout</a></li>
        
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>

    
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
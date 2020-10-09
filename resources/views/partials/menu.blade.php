<div class="c-sidebar c-sidebar-dark c-sidebar-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
      Sony Playstation
        
      </div>
      <ul class="c-sidebar-nav">
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/">
             Home
            </a>
            </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/home">
             Dashboard
            </a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/sony">
             Sony
            </a>
            </li>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/pije">
             Pije
            </a>
            </li>
        <li class="c-sidebar-nav-title">Admin</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/admin/sony">
             Sony
            </a>
            </li>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/admin/pije">
             Pije
            </a>
            </li>
        <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
             Logout</a></li>
        
      </ul>
    </div>

    
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
{{-- <div class="page-header-inner">
    <div class="page-header-inner">
        <div class="navbar-header">
            <a href="{{ url('/') }}"
               class="navbar-brand">
                <img src="{{url('/quickadmin/images/daher-formation.png')}}"/>
            </a>


        </div>
        

        <div class="top-menu">
           
            <ul >
                <a href="{{ url('/') }}"
                   class="navbar-brand" class="nav navbar-nav pull-right" >
                    {{ Auth::user()->name }} <small>({{ Auth::user()->role_id == 1 ? 'Admin' :( Auth::user()->role_id == 2 ? 'Student' : 'Teacher') }})</small>
                </a>
            </ul>

            <a href="javascript:;"
            class="menu-toggler responsive-toggler"
            data-toggle="collapse"
            data-target=".navbar-collapse">
         </a>
        </div>
    </div>
</div> --}}

<div class="flex items-center justify-between bg-blue-500 py-4 px-6">
    <div class="flex items-center">
        <a href="{{ url('/') }}" class="mr-4">
            <img src="{{ url('/quickadmin/images/daher-formation.png') }}" alt="Logo" class="h-8">
        </a>
    </div>

    <div class="flex items-center">
        <ul class="flex items-center space-x-4">
            <li>
                <a href="{{ url('/') }}" class="text-white">
                    {{ Auth::user()->name }} <small>({{ Auth::user()->role_id == 1 ? 'Admin' : (Auth::user()->role_id == 2 ? 'Student' : 'Teacher') }})</small>
                </a>
            </li>
        </ul>

        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
    </div>
</div>



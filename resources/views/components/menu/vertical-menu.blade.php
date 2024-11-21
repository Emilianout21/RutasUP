{{-- 

/**
*
* Created a new component <x-menu.vertical-menu/>.
* 
*/

--}}

    
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="/dashboard">
                                <img src="https://designreset.com/cork/laravel/build/assets/logo.87d1e3bb.svg" class="navbar-logo logo-dark" alt="logo">
                                <img src="https://designreset.com/cork/laravel/build/assets/logo2.25baa396.svg" class="navbar-logo logo-light" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="" class="nav-link"> RutasUp </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled menu-categories ps ps--active-y" id="accordionExample">
                    <li class="menu">
                        <a href="/dashboard" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
<!--
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                    </li>
-->
                    <li class="menu ">
                        <a href="/plan-ruta" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M18 9C19.6569 9 21 7.88071 21 6.5C21 5.11929 19.6569 4 18 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M6 9C4.34315 9 3 7.88071 3 6.5C3 5.11929 4.34315 4 6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <ellipse cx="12" cy="17" rx="6" ry="4" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M20 19C21.7542 18.6153 23 17.6411 23 16.5C23 15.3589 21.7542 14.3847 20 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M4 19C2.24575 18.6153 1 17.6411 1 16.5C1 15.3589 2.24575 14.3847 4 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span>Planificador de rutas</span>
                            </div>
                        </a>
                    </li>
                    
            </ul>
                
            </nav>

        </div>

        <script>

            document.addEventListener('DOMContentLoaded', function () {
                const menuItems = document.querySelectorAll('.menu');

                menuItems.forEach(item => {
                item.querySelector('a').addEventListener('click', function () {
                    menuItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');
                });

                if (window.location.pathname === item.querySelector('a').getAttribute('href')) {
                    item.classList.add('active');
                }
                });
            });
        </script>
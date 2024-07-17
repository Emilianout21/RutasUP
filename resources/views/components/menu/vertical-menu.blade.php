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
                            <a href="" class="nav-link"> VacunApp </a>
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
                        <a href="/poblacion" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M18 9C19.6569 9 21 7.88071 21 6.5C21 5.11929 19.6569 4 18 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M6 9C4.34315 9 3 7.88071 3 6.5C3 5.11929 4.34315 4 6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <ellipse cx="12" cy="17" rx="6" ry="4" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M20 19C21.7542 18.6153 23 17.6411 23 16.5C23 15.3589 21.7542 14.3847 20 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M4 19C2.24575 18.6153 1 17.6411 1 16.5C1 15.3589 2.24575 14.3847 4 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span>Población</span>
                            </div>
                        </a>
                    </li>
                    
                    <li class="menu ">
                        <a href="/biblioteca" aria-expanded="false" class="dropdown-toggle">
                            <div class="">                      
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6V19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19V9C20 7.34315 18.6569 6 17 6H4ZM4 6V5" stroke="currentColor" stroke-width="2"/>
                                    <path d="M18 6.00002V6.75002H18.75V6.00002H18ZM15.7172 2.32614L15.6111 1.58368L15.7172 2.32614ZM4.91959 3.86865L4.81353 3.12619H4.81353L4.91959 3.86865ZM5.07107 6.75002H18V5.25002H5.07107V6.75002ZM18.75 6.00002V4.30604H17.25V6.00002H18.75ZM15.6111 1.58368L4.81353 3.12619L5.02566 4.61111L15.8232 3.0686L15.6111 1.58368ZM4.81353 3.12619C3.91638 3.25435 3.25 4.0227 3.25 4.92895H4.75C4.75 4.76917 4.86749 4.63371 5.02566 4.61111L4.81353 3.12619ZM18.75 4.30604C18.75 2.63253 17.2678 1.34701 15.6111 1.58368L15.8232 3.0686C16.5763 2.96103 17.25 3.54535 17.25 4.30604H18.75ZM5.07107 5.25002C4.89375 5.25002 4.75 5.10627 4.75 4.92895H3.25C3.25 5.9347 4.06532 6.75002 5.07107 6.75002V5.25002Z" fill="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M8 15.5H13.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span>Biblioteca de vacunas</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu ">
                        <a href="/campanias" aria-expanded="false" class="dropdown-toggle">
                            <div class="">                       
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.18201 10.5455L6.71234 11.0758L6.18201 10.5455ZM13.4547 17.8182L13.9851 18.3485L13.4547 17.8182ZM17.7376 9.0101L17.2072 9.54043L17.7376 9.0101ZM19.0241 10.5692L19.7289 10.3127L19.0241 10.5692ZM17.7376 13.5354L17.2072 13.005L17.7376 13.5354ZM19.0241 11.9763L19.7289 12.2328L19.0241 11.9763ZM14.9901 6.26263L15.5204 5.7323L14.9901 6.26263ZM13.431 4.97611L13.1745 5.68088L13.431 4.97611ZM10.4648 6.26263L10.9952 6.79296V6.79296L10.4648 6.26263ZM12.0239 4.97611L12.2804 5.68088L12.0239 4.97611ZM19.4699 7.43942C19.7628 7.73231 20.2376 7.73231 20.5305 7.43942C20.8234 7.14653 20.8234 6.67165 20.5305 6.37876L19.4699 7.43942ZM17.6214 3.46967C17.3285 3.17678 16.8537 3.17678 16.5608 3.46967C16.2679 3.76256 16.2679 4.23744 16.5608 4.53033L17.6214 3.46967ZM14.4598 6.79296L17.2072 9.54043L18.2679 8.47977L15.5204 5.7323L14.4598 6.79296ZM17.2072 13.005L12.9244 17.2879L13.9851 18.3485L18.2679 14.0657L17.2072 13.005ZM6.71234 11.0758L10.9952 6.79296L9.93451 5.7323L5.65168 10.0151L6.71234 11.0758ZM6.71234 17.2879C4.99693 15.5724 4.99693 12.7912 6.71234 11.0758L5.65168 10.0151C3.35048 12.3163 3.35048 16.0473 5.65168 18.3485L6.71234 17.2879ZM12.9244 17.2879C11.209 19.0033 8.42776 19.0033 6.71234 17.2879L5.65168 18.3485C7.95288 20.6497 11.6839 20.6497 13.9851 18.3485L12.9244 17.2879ZM17.2072 9.54043C17.5922 9.92536 17.851 10.1849 18.0361 10.4003C18.2161 10.6099 18.2852 10.7319 18.3193 10.8257L19.7289 10.3127C19.607 9.97792 19.4097 9.69728 19.1738 9.42281C18.9431 9.15428 18.6367 8.84854 18.2679 8.47977L17.2072 9.54043ZM18.2679 14.0657C18.6367 13.6969 18.9431 13.3912 19.1738 13.1226C19.4097 12.8482 19.607 12.5675 19.7289 12.2328L18.3193 11.7198C18.2852 11.8136 18.2161 11.9356 18.0361 12.1451C17.851 12.3606 17.5922 12.6201 17.2072 13.005L18.2679 14.0657ZM18.3193 10.8257C18.4244 11.1145 18.4244 11.431 18.3193 11.7198L19.7289 12.2328C19.9546 11.6126 19.9546 10.9328 19.7289 10.3127L18.3193 10.8257ZM15.5204 5.7323C15.1517 5.36353 14.8459 5.05708 14.5774 4.82636C14.3029 4.59053 14.0223 4.39317 13.6875 4.27134L13.1745 5.68088C13.2683 5.71501 13.3903 5.78407 13.5998 5.96408C13.8153 6.1492 14.0748 6.40802 14.4598 6.79296L15.5204 5.7323ZM10.9952 6.79296C11.3801 6.40802 11.6396 6.1492 11.8551 5.96408C12.0646 5.78407 12.1866 5.71501 12.2804 5.68088L11.7674 4.27134C11.4327 4.39317 11.152 4.59053 10.8775 4.82636C10.609 5.05708 10.3033 5.36353 9.93451 5.7323L10.9952 6.79296ZM13.6875 4.27134C13.0674 4.04562 12.3875 4.04562 11.7674 4.27134L12.2804 5.68088C12.5692 5.57578 12.8857 5.57578 13.1745 5.68088L13.6875 4.27134ZM18.0153 5.98488L19.4699 7.43942L20.5305 6.37876L19.076 4.92422L18.0153 5.98488ZM19.076 4.92422L17.6214 3.46967L16.5608 4.53033L18.0153 5.98488L19.076 4.92422Z" fill="currentColor" stroke-width="3"/>
                                    <path d="M17.0911 14.1819L9.81836 6.90918" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M6.18182 17.8184L4 20.0002" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M15.833 7.10608C15.5401 7.39897 15.5401 7.87384 15.833 8.16674C16.1258 8.45963 16.6007 8.45963 16.8936 8.16674L15.833 7.10608ZM19.0754 5.98492C19.3683 5.69203 19.3683 5.21715 19.0754 4.92426C18.7825 4.63137 18.3077 4.63137 18.0148 4.92426L19.0754 5.98492ZM16.8936 8.16674L19.0754 5.98492L18.0148 4.92426L15.833 7.10608L16.8936 8.16674Z" fill="currentColor" stroke-width="3"/>
                                    <path opacity="0.5" d="M14.3789 16.8942C14.6718 17.1871 15.1467 17.1871 15.4396 16.8942C15.7325 16.6013 15.7325 16.1264 15.4396 15.8336L14.3789 16.8942ZM12.5542 12.9482C12.2613 12.6553 11.7864 12.6553 11.4936 12.9482C11.2007 13.2411 11.2007 13.716 11.4936 14.0088L12.5542 12.9482ZM12.7426 18.5306C13.0354 18.8235 13.5103 18.8235 13.8032 18.5306C14.0961 18.2377 14.0961 17.7628 13.8032 17.4699L12.7426 18.5306ZM12.1573 15.824C11.8644 15.5311 11.3895 15.5311 11.0966 15.824C10.8037 16.1169 10.8037 16.5917 11.0966 16.8846L12.1573 15.824ZM15.4396 15.8336L12.5542 12.9482L11.4936 14.0088L14.3789 16.8942L15.4396 15.8336ZM13.8032 17.4699L12.1573 15.824L11.0966 16.8846L12.7426 18.5306L13.8032 17.4699Z" fill="currentColor" stroke-width="3"/>
                                </svg>
                                <span>Campañas de vacunación</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu ">
                        <a href="/vigilancia" aria-expanded="false" class="dropdown-toggle">
                            <div class="">   
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0565 18.9998C15.9224 19.031 19.031 15.9224 18.9998 12.0565C18.9686 8.19062 15.8094 5.03143 11.9435 5.00023C8.07765 4.96904 4.96904 8.07765 5.00023 11.9435C5.03143 15.8094 8.19062 18.9686 12.0565 18.9998Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M18 6L16.95 7.05003" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M5 5L7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M17.0498 18.0498L16.5 17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path opacity="0.5" d="M6 19.0498L7.05003 17.9998" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M16.5 13C16.5 14.1046 15.6046 15 14.5 15C13.3954 15 12.5 14.1046 12.5 13C12.5 11.8954 13.3954 11 14.5 11C15.6046 11 16.5 11.8954 16.5 13Z" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M11 9C11 9.55228 10.5523 10 10 10C9.44772 10 9 9.55228 9 9C9 8.44772 9.44772 8 10 8C10.5523 8 11 8.44772 11 9Z" stroke="currentColor" stroke-width="2"/>
                                    <circle opacity="0.5" cx="9" cy="13" r="1" fill="#1C274C"/>
                                    <circle cx="19.5" cy="4.5" r="1.5" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="1.5" cy="1.5" r="1.5" transform="matrix(-1 0 0 1 5 2)" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M2 12C2 12.8284 2.67157 13.5 3.5 13.5C4.32843 13.5 5 12.8284 5 12C5 11.1716 4.32843 10.5 3.5 10.5C2.67157 10.5 2 11.1716 2 12Z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="1.5" cy="1.5" r="1.5" transform="matrix(1 0 0 -1 17.0498 21.0498)" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="4.5" cy="20.5" r="1.5" transform="rotate(180 4.5 20.5)" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M13.5 3.5C13.5 4.32843 12.8284 5 12 5C11.1716 5 10.5 4.32843 10.5 3.5C10.5 2.67157 11.1716 2 12 2C12.8284 2 13.5 2.67157 13.5 3.5Z" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M19.5 13.5C20.3284 13.5 21 12.8284 21 12C21 11.1716 20.3284 10.5 19.5 10.5C19.3247 10.5 19.1564 10.5301 19 10.5854V13.4146C19.1564 13.4699 19.3247 13.5 19.5 13.5Z" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M10.5852 19C10.7911 19.5826 11.3468 20.0001 11.9999 20.0001C12.653 20.0001 13.2086 19.5826 13.4146 19L10.5852 19Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <span>Vigilancia epidemiológica</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu ">
                        <a href="/demandas" aria-expanded="false" class="dropdown-toggle">
                            <div class="">                
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M22 22H12C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M19.0002 7L15.8821 10.9264C15.4045 11.5278 15.1657 11.8286 14.8916 11.9751C14.47 12.2005 13.9663 12.2114 13.5354 12.0046C13.2551 11.8701 13.0035 11.5801 12.5002 11C11.9968 10.4199 11.7452 10.1299 11.4649 9.99535C11.034 9.78855 10.5303 9.7995 10.1088 10.0248C9.83461 10.1714 9.5958 10.4721 9.11819 11.0735L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span>Demanda de vacunas</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu ">
                        <a href="/usuarios" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="feather feather-file-text">
                                    <circle cx="9" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M12.5 4.3411C13.0375 3.53275 13.9565 3 15 3C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9C13.9565 9 13.0375 8.46725 12.5 7.6589" stroke="currentColor" stroke-width="2"/>
                                    <ellipse cx="9" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="2"/>
                                    <path opacity="0.5" d="M18 14C19.7542 14.3847 21 15.3589 21 16.5C21 17.5293 19.9863 18.4229 18.5 18.8704" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span>Gestión de usuarios</span>
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
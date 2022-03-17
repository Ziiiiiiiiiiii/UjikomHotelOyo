<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Hotel | Admin - @yield('title')</title>
    </head>
    <body>
        <aside>
            <div class="navbar-logo">
                <a href="/home" target="__blank">
                    <img src="/assets2/img/ComicReaderIcon.png" alt="logo" width="45px" />
                </a>
            </div>
            <nav class="sidebar-nav">
                <ul>
        
                    <!-- Home -->
                    <li class="nav-item">
                        <a href="/">
                            <span class="icon">
                                <svg width="22" height="22" viewBox="0 0 22 22">
                                    <path
                                        d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                                </svg>
                            </span>
                            <span class="text">Home</span>
                        </a>
                    </li>
        
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z" />
                                </svg>
                            </span>
                            <span class="text">Tables</span>
                        </a>
                        <ul id="ddmenu_1" class="collapse dropdown-nav">
                            <li>
                                <a href="/category_table"> Category </a>
                            </li>
                            <li>
                                <a href="/tag_table"> Tag </a>
                            </li>
                            <li>
                                <a href="/article_table"> Article </a>
                            </li>
                            <li>
                                <a href="/subcontent_table"> SubContent </a>
                            </li>
                        </ul>
                    </li>
        
                    <span class="divider">
                        <hr />
                    </span>
                </ul>
            </nav>
        </aside>
        
        <main class="main-wrapper">
            <header class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="header-left d-flex align-items-center">
                                <div class="menu-toggle-btn mr-20">
                                    <button id="menu-toggle" class="main-btn secondary-btn btn-hover">
                                        <i class="lni lni-chevron-left me-2"></i> Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 order-last order-md-first">
                            <div class="copyright text-center text-md-start">
                                <p class="text-sm">
                                    Designed and Developed by
                                    <a href="https://www.instagram.com/zizizizizizizizizizizidane/" rel="nofollow"
                                        target="__blank">
                                        <i class="lni lni-instagram-original"></i>
                                        Zi&e
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>
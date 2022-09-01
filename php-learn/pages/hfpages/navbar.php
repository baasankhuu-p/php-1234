<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="/user/home">
                            <i class="mdi mdi-view-dashboard mr-2"></i>Нүүр
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-chart-bar mr-2"></i>График
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none"
                            href=" <?php if ($_SESSION['type'] === 'Админ') {echo '/admin/home';}?>">
                            <i class="mdi mdi-book-open-page-variant mr-2"></i>
                            <?php if ($_SESSION['type'] === 'Админ') {echo 'Удирдлага';} else {echo 'Тохиргоо';}?>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="/hfpages/logout" id="topnav-layout"
                            role="button">
                            <i class="mdi mdi-cellphone-link mr-2"></i>Гарах
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
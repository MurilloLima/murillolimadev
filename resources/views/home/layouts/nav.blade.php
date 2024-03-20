<!--<< Header v-1 >>-->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="main__logo">
                <a href="index.html" class="logo">
                    <img src="{{ asset('home/img/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            <ul class="main-menu">
                <li>
                    <a href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.pages.sobre') }}">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="index.html#prot">
                        Trabalhos
                    </a>
                </li>
                <li>
                    <a href="index.html#services">
                        Servicos
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="service.html">
                                Service
                            </a>
                        </li>
                        <li>
                            <a href="service-details.html">
                                Service Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        Blog
                    </a>
                    <ul class="sub-menu">
                        <li class="subtwohober">
                            <a href="blog.html">Blog</a>
                        </li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('home.pages.contatos') }}">
                        Contatos
                    </a>
                </li>
            </ul>
            <div class="menu__components d-flex align-items-center">
                <a href="contact.html" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                    <span class="get__text">
                        Whatsapp
                    </span>
                    <span>
                        <i class="bi bi-arrow-right fz-20"></i>
                    </span>
                </a>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="remove__click">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<!--<< Header v-1 >>-->

<div id="wrapper" class="clearfix">
        <!-- Header
        ============================================= -->
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container clearfix menu-head">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="{{ asset('img/logo/logo-dark.png') }}">
                            <img src="{{ asset('img/logo-top.png') }}" alt="PopBox Logo">
                        </a>
                        <a href="{{ url('/') }}" class="retina-logo" data-dark-logo="{{ asset('img/logo/logo-dark@2x.png') }} ">
                            <img src="{{ asset('img/logo-top.png') }}" alt="PopBox Logo">
                        </a>                    
                    </div>
     
                    <nav id="primary-menu" class="dark">
                        <ul class="sf-js-enabled" style="touch-action: pan-y;">                    
                             <li><a href="#" onclick="onGoto('#about-us')" class="sf-with-ul">Tentang Kami</a></li>
                             <li><a href="#" onclick="onGoto('#find-input')" class="sf-with-ul">Cek Resi</a></li>
                             <li><a href="#" onclick="onGoto('#find-input')" class="sf-with-ul">Cek Tarif</a></li>
                             <li><a href="#" onclick="onGoto('#contact')" class="sf-with-ul">Hubungi Kami</a></li>
                        </ul>
                    </nav>                    
                </div>
            </div>
        </header>
        
    </div>
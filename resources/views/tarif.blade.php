<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include("partial.head")

<body  class="stretched">
  <div id="wrapper" class="clearfix">
        <!-- Header
        ============================================= -->
        <header id="header"  class="full-header">
            <div id="header-wrap">
                <div class="container clearfix menu-head">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="{{ asset('img/logo-dark.png') }}">
                            <img src="{{ asset('img/logo-top.png') }}" alt="PopBox Logo">
                        </a>
                        <a href="{{ url('/') }}" class="retina-logo" data-dark-logo="{{ asset('img/logo-dark@2x.png') }} ">
                            <img src="{{ asset('img/logo-top.png') }}" alt="PopBox Logo">
                        </a>                    
                    </div>
     
                    <nav id="primary-menu" class="dark">
                        <ul class="sf-js-enabled" style="touch-action: pan-y;">                    
                             <li><a href="/#about-us" class="sf-with-ul">Tentang Kami</a></li>
                             <li><a href="/#find-input" class="sf-with-ul">Cek Resi</a></li>
                             <li><a href="/#find-input" class="sf-with-ul">Cek Tarif</a></li>
                             <li><a href="/#contact" class="sf-with-ul">Hubungi Kami</a></li>
                        </ul>

                    </nav>
                    <!-- #primary-menu end -->
                </div>
            </div>
        </header>
        
    </div>

    <section id="content">
        <div class="container clearfix">
            <div class="row">                
                <div class="col-md-12">
                    <img src="img/banner-tarif.png">
                </div>
            </div>
            <div class="row input-tarif-detail">
                <div class="row">
                        <div class="col-md-12 label-cek-tarif">
                            CEK TARIF
                        </div> <br/>                        
                </div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <form method="post" action="/tarif">
                        <div class="col-md-3">
                            Dari :<br/>
                            <input type="text" name="from" class="form-control" value="JAKARTA" required disabled>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="col-md-3">
                            Ke :<br/>
                            <input type="text" name="to" class="form-control" value="{{$to}}" required>
                        </div>
                        <div class="col-md-2">
                            Berat :<br/>
                            <input type="text" name="weight" class="form-control" value="{{$weight}}" required>
                        </div>
                        <div class="col-md-1">
                            <br/>
                            Kg
                        </div>
                        <div class="col-md-1">
                            <br/>
                            <input type="submit" name="CEK" value="CEK" class="btn btn-cek-tarif">
                        </div>
                    </form>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 tarif-title">
                    <strong>Asal : </strong><span>JAKARTA</span><br/>
                    <strong>Tujuan : </strong><span>{{$to}}</span><br/>
                    <strong>Berat : </strong><span class="tarif-weight">{{$weight}} kg</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <table class="table">
                        <thead>
                            <th>SERVICE</th>
                            <th>ESTIMASI</th>
                            <th>TARIF</th>
                        </thead>
                        <tbody>
                            @if (isset($result->data))
                            <tr>
                                <td><strong>REG</strong></td>
                                <td>{{$result->data->est_delivery}} hari</td>
                                <td>{{$helpers->getNominal($result->data->regular_price*$weight)}}</td>
                            </tr>
                                @if ($result->data->oneday_price > 0)
                                <tr>
                                    <td><strong>ONE</strong></td>
                                    <td>1 hari</td>
                                    <td>{{$helpers->getNominal($result->data->oneday_price*$weight)}}</td>
                                </tr>
                                @endif
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </section>
    @include("partial.footer")

<!-- #footer end -->

</body>
@include("partial.script")

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include("partial.head")

<body  class="stretched">
  @include("partial.topmenu")
@section('content')
    <section id="content">
        <div class="container clearfix">
            <div class="row banner">                
                <div class="col-md-12">
                </div>
            </div>
        <div class="row" id="find-input">
                <div class="col-md-5 cek-resi">
                    <div class="row">
                        <div class="col-md-2">                            
                        </div>
                        <div class="col-md-10 label-cek-resi">                            
                            CEK RESI
                        </div>
                    </div>                    
                    <div class="row input-resi">
                        <div class="col-md-2">                        
                        </div>                
                        <form action="/tracking" method="post">
                            <div class="col-md-7">                        
                                <input type="text" name="awb" class="form-control" required>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>              
                            <div class="col-md-1">
                                <input type="submit" class="btn btn-cek-resi" value="CEK">                        
                            </div>
                        </form>                
                        <div class="col-md-1">                        
                        </div>                
                    </div>
                </div>
                <div class="col-md-7 cek-tarif">                    
                    <div class="row">
                        <div class="col-md-12">
                            CEK TARIF
                        </div>
                    </div>
                    <div class="row">
                        <form method="post" action="/tarif">
                            <div class="col-md-4">
                                <spam class="label-tarif">Dari</spam><br/>
                                <input type="text" name="from" value="JAKARTA" class="form-control" required disabled>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                            <div class="col-md-4">
                                <spam class="label-tarif">Ke</spam><br/>
                                <input type="text" name="to" class="form-control" required>
                            </div>
                            <div class="col-md-1 col-xs-8 col-sm-8 mobile-cek berat">
                                <spam class="label-tarif" required>Berat</spam><br/>
                                <input type="text" name="weight" value="1" class="form-control">
                            </div>
                            <div class="col-md-1 col-xs-4 col-sm-4 kg"><br/>
                                Kg
                            </div>
                            <div class="col-md-2"><br/>
                                <input type="submit" value="CEK" class="form-control btn-cek-tarif">
                            </div>
                        </form>                        
                    </div>
                    
                </div>
        </div>
         <div class="row" id="about-us">
                <div class="col-md-6">
                    <img src="img/people.png">
                </div>
                <div class="col-md-6 col-about-us"> 
                    <div class="row">
                        <div class="col-md-12 label-about-us">
                            TENTANG KAMI
                        </div> <br/>
                        <div class="line-label-about-us"></div>        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            IDR Express adalah perusahaan expedisi sejak tahun 2016<br/>
                            yang meliputi transportasi udara dan darat.<br/><br/>
                            Dengan motto 'serving', kami berkomitmen menjadi partner<br/>
                            terpercaya untuk pengiriman paket & dokumen khususnya bagi para<br/>
                            pelaku bisnis online dan e-commerce di seluruh Indonesia.
                        </div>                        
                    </div>
                </div>                
        </div>
        <div class="row" id="service">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 service-label">
                        SERVICE
                    </div>
                </div>
                <div class="row">
                    <div class="line-label-service">                        
                    </div>
                </div>
                <div class="row content-service">
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-7 col-xs-7 col-sm-7 label-one-service">
                                WAKTU PENGIRIMAN<br/>
                                <span class="lbl-day">1 HARI</span>
                            </div>
                            <div class="col-md-5 col-xs-5 col-sm-5">
                                <img src="img/service-one.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="row reguler">
                            <div class="col-md-5 col-xs-5 col-sm-5">
                                <img src="img/service-reguler.png">
                            </div>
                            <div class="col-md-7 col-xs-7 col-sm-7 label-reguler">
                                WAKTU PENGIRIMAN<br/>
                                <span class="lbl-day">1-2 HARI</span>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="company-value">
            <div class="col-md-12">            
                <div class="row">
                    <div class="col-md-12 label-company-value">
                        COMPANY VALUE
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                                                
                        <div class="line-company-value">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xs-3 col-sm-3 center">
                        <img src="img/rich1.png">
                        <p>RESOURCE</p>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-3 center">
                        <img src="img/rich2.png">
                        <p>INFLUENCE</p>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-3 center">
                        <img src="img/rich3.png">
                        <p>COMMITMENT</p>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-3 center">
                        <img src="img/rich4.png">
                        <p>HUMILITY</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="keunggulan">
            <div class="row">
                <div class="col-md-12 label-keunggulan-value">
                    KEUNGGULAN
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">                                                
                    <div class="line-keunggulan-value">
                    </div>
                </div>            
            </div>
            <div class="row">
                <div class="col-md-4 col-keunggulan">
                    <img src="img/keunggulan1.png">
                    <p>SMS RESI</p>
                </div>            
                <div class="col-md-4 col-keunggulan">
                    <img src="img/keunggulan2.png">
                    <p>
                        CUSTOMER CARE<br/>
                        RESPONSIF & FRIENDLY
                    </p>
                </div>            
                <div class="col-md-4 col-keunggulan">
                    <img src="img/keunggulan3.png">
                    <p>
                        GRATIS <br/>
                        PICKUP
                    </p>
                </div>            
            </div>
        </div>
        <div class="row" id="contact">
            <div class="row">
                <div class="col-md-12 label-contact">
                    HUBUNGI KAMI
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">                                                
                    <div class="line-label-contact">
                    </div>
                </div>            
            </div>
            
            <form method="post" action="/contact">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if(Session::has('flash_message'))
                    <div class="row input-contact">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                              <strong>{{Session::get('flash_message')}}</strong>.
                            </div>
                        </div>
                    </div><br/>
                @endif

                @if($errors->has())
                    <div class="row input-contact">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div><br/>
                @endif
                

                <div class="row input-contact">
                    <div class="col-md-12">
                        Nama :<br/>
                        <input type="text" name="nama" class="form-control" required/>
                    </div>
                </div><br/>
                <div class="row input-contact">
                    <div class="col-md-12">
                        E-mail :<br/>
                        <input type="text" name="email" class="form-control" required/>
                    </div>
                </div><br/>
                <div class="row input-contact">
                    <div class="col-md-12">
                        HP :<br/>
                        <input type="text" name="phone" class="form-control" required/>
                    </div>
                </div><br/>
                <div class="row input-contact">
                    <div class="col-md-12">
                        PESAN :<br/>
                        <textarea name="pesan" name="message" class="form-control" rows="10" required></textarea>
                    </div>
                </div><br/>
                <div class="row input-contact">
                    <div class="col-md-12">
                        <input type="submit" value="Kirim" class="btn btn-kirim">
                    </div>
                </div>
            </form>
        </div> 
    </section>
    @include("partial.footer")

<!-- #footer end -->

</body>
@include("partial.script")
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include("partial.head")

<body  class="stretched">
  @include("partial.topmenu")

    <section id="content">
        <div class="container clearfix">
            <div class="row">                
                <div class="col-md-12">
                    <img src="img/banner-tarif.png">
                </div>
            </div>
            <div class="row input-tarif-detail">
                <div class="row">
                        <div class="col-md-12 label-cek-resi">
                            CEK RESI
                        </div> <br/>                        
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 group-btn-cek-resi">
                        <input type="submit" name="CEK" value="CEK" class="btn btn-cek-resi">
                    </div>                    
                </div>
            </div>            
            <div class="row tbl-tracking">
                <div class="col-md-12"> 
                    <table class="table">
                        <thead>
                            <th colspan="2" class="center">SERVICE</th>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>REG</strong></td>
                                <td>1 - 2 hari</td>                                
                            </tr>
                            <tr>
                                <td><strong>ONE</strong></td>
                                <td>1 - 2 hari</td>                                
                            </tr>

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

<main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Thống kê doanh thu   </b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
        
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          

         
          <form class="row" action="Doanhthu/thongke" method="post" >
              
             
              <div class="form-group col-md-4">
                <label class="control-label">  Thống kê theo ngày  </label>
                <input class="form-control" type="date" name="date" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Thống kê theo tháng </label>
                <input class="form-control" type="month" name="thang" >
              </div>
              
            <div class="form-group col-md-4">
                <label class="control-label">Thống kê theo năm </label>
                <input class="form-control" type="number" name="nam" >
              </div>
           
              
              
     </div>
     <button class="btn btn-save"  type="submit" name="btn_thongke"><i class="fa fa-calculator"></i>
             Thực hiện thống kê</button>
        </div>
        
        
        </form>
    
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div>
                        <h3 class="tile-title">Bảng thống kê</h3>
                    </div>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Doanh thu</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($data['tk'] !=null){
                                    foreach($data['tk'] as $kt =>$value){

                                    
                                
                                ?>
                                <tr>
                                    <td><?php echo $value['thoigian']?></td>
                                    <td><?php echo $value['tongdoanhthu']?></td>
                                    
                                    
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
       

        <div class="text-right" style="font-size: 12px">
           
        </div>
    </main>
    
  
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
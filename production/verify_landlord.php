

  
        <!-- /top navigation -->



            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>審核 - 房東資料 （landlord - data）</h2>

<?php
  $verify_landlord_num = Admin::verify_landlord_num();
  if(!empty($verify_landlord_num)){
      foreach ($verify_landlord_num as $verify_landlordnum){

?>
<?php 
                    if( $verify_landlordnum['num'] !='0'){ 
                  ?>
                  <span class="badge bg-red " style="margin-top: 5px; color: white;">
                  <?php 
                        echo  $verify_landlordnum['num'];
                  ?>
                    
                  </span>
                  <?php
                  }
                  ?>
<?php
    }
  }
?>
                    <ul class="nav navbar-right panel_toolbox">

                       <li style="margin-left:68%;"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>請管理人員仔細遵守審核規範。</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                          <th style="width: 10%">房東名稱</th>
                          <th style="width: 13%">房東帳號</th>
                          <th style="width: 20%">房東信箱</th>
                          <th>申請日期</th>
                          <th style="width: 15%">房屋證明相關文件</th>
                          <th>確認審核 Verify</th>

                        </tr>
                      </thead>
<?php
$number = 1;
  $verify_landlord_data = Admin::verify_landlord_data();

    if(!empty($verify_landlord_data)){
      foreach ($verify_landlord_data as $verify_landlord){
   
?>
                      <tbody>
                        <tr>
                          <td><?php echo $number++;?></td>
                          <td>
                            <a><?php echo $verify_landlord['name']; ?></a>
                           
                          </td>
                          <td>
                            <a><?php echo $verify_landlord['account']; ?></a>
                          </td>
                         
                          <td>
                            <?php echo $verify_landlord['email']; ?>
                          </td>
                          
                          <td>
                            <?php echo $verify_landlord['mday']; ?>
                          </td>

                          <td>
                            <!-- Large modal -->
&nbsp;&nbsp;
                            <button type="button" class="btn btn-Primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php  echo $verify_landlord['mem_id']; ?>"><i class="fa fa-folder"></i> File</button>
                             

                            <div class="modal fade bs-example-modal-lg<?php echo $verify_landlord['mem_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">待審核資料</h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4><?php echo $verify_landlord['name']; ?> - 學生證明文件：</h4>
                                    <p>請管理人員仔細確認檔案是否符合規定，檢查完畢，即可關閉，"進行確認審核"。</p>
                                     <img width="100%" height="75%" id="image" src="../<?php echo $verify_landlord['file']; ?>" alt="Picture">

                                     
                                  </div>
                                
                                </div>
                              </div>
                            </div>


                          <td>
                            <a href="/renthouse/production/index.php?verify_landlord_nopass=<?php echo $verify_landlord['mem_id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> No Pass </a>
                            <a href="/renthouse/production/index.php?landlord_id=<?php echo $verify_landlord['mem_id']; ?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-ok"></i> Pass </a>
                          </td>
                 
                         
                        </tr>
                        <tr>           
                        </tr>
<?php
  }
}
?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              

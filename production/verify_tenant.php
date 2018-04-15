

        <!-- /top navigation -->



            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>審核 - 房客資料 （tenant - data）</h2>
<?php
  $verify_tenant_num = Admin::verify_tenant_num();
  if(!empty($verify_tenant_num)){
      foreach ($verify_tenant_num as $verify_tenantnum){

?>
                  <?php 
                    if( $verify_tenantnum['num'] !='0'){ 
                  ?>
                  <span class="badge bg-red" style="margin-top: 5px; color: white;">
                  <?php 
                        echo  $verify_tenantnum['num'];
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

                    <p>以下狀態會呈現審核狀態，請管理人員仔細遵守審核規範。</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                          <th style="width: 10%">房客名稱</th>
                          <th style="width: 13%">房客帳號</th>
                          <th style="width: 20%">房客信箱</th>
                          <th>申請日期</th>
                          <th style="width: 15%">學生證明文件</th>
                          <th>確認審核 Verify</th>

                        </tr>
                      </thead>
<?php
$number = 1;
  $verify_tenant_data = Admin::verify_tenant_data();

    if(!empty($verify_tenant_data)){
      foreach ($verify_tenant_data as $verify_tenant){
   
?>
                      <tbody>
                        <tr>
                          <td><?php echo $number++;?></td>
                          <td>
                            <a><?php echo $verify_tenant['name']; ?></a>
                           
                          </td>
                          <td>
                            <a><?php echo $verify_tenant['account']; ?></a>
                          </td>
                         
                          <td>
                            <?php echo $verify_tenant['email']; ?>
                          </td>
                          
                          <td>
                            <?php echo $verify_tenant['mday']; ?>
                          </td>

                          <td>
                            <!-- Large modal -->
&nbsp;&nbsp;
                            <button type="button" class="btn btn-Primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php  echo $verify_tenant['mem_id']; ?>"><i class="fa fa-folder"></i> File</button>
                             

                            <div class="modal fade bs-example-modal-lg<?php echo $verify_tenant['mem_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">待審核資料</h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4><?php echo $verify_tenant['name']; ?> - 學生證明文件：</h4>
                                    <p>請管理人員仔細確認檔案是否符合規定，檢查完畢，即可關閉，"進行確認審核"。</p>
                                     <img width="100%" height="75%" id="image" src="../<?php echo $verify_tenant['file']; ?>" alt="Picture">

                                     
                                  </div>
                                
                                </div>
                              </div>
                            </div>


                          <td>
                            <a href="/renthouse/production/index.php?verify_tenant_nopass=<?php echo $verify_tenant['mem_id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> No Pass </a>
                            <a href="/renthouse/production/index.php?tenant_id=<?php echo $verify_tenant['mem_id']; ?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-ok"></i> Pass </a>
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
             
<?php

$output = '';
include('../include/db.php');

if (isset($_POST["admin_team_action"])) {

  $sql = "SELECT team.id, team.team_name, team.team_code, team.degree_id, degree.degree_name FROM team,degree WHERE degree.degree_id=team.degree_id";

  if (mysqli_query($connect, $sql)) {

    $result = mysqli_query($connect, $sql);
    $output .= '  
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-secondary">ข้อมูลทีมทั้งหมด</h6>
                    </div>
                      <div class="card-body">
                        <div class="table-responsive">
                         <table class="table table-bordered">
                         
                         <thead>  
                          <tr>  
                               <th width="1">ระดับ</th>  
                               <th width="1">รหัสทีม</th>
                               <th width="1">ชื่อทีม</th>
                               <th width="1">ดู</th>  
                               <th width="1">แก้ไข</th>  
                               <th width="1">ลบ</th>  
                          </tr>  
                         <thead>
                ';
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                              <tbody>
                               <tr>  
                                    <td>' . $row["degree_name"] . '</td>  
                                    <td>' . $row["team_code"] . '</td>
                                    <td>' . $row["team_name"] . '</td>  
                                    <td><button type="button" class="btn btn-info btn-user btn-block bg-gradient-info" data-toggle="modal" data-target="#modalmoreinfo" data-id="' . $row['id'] . '" id="moreinfo">ดู</button></td>
                                    <td><button type="button" name="update" id="' . $row["id"] . '" class="btn btn-warning btn-user btn-block bg-gradient-warning update" onclick="topFunction()" align="center">แก้ไข</button></td>  
                                    <td><button type="button" name="delete" id="' . $row["id"] . '" class="btn btn-danger btn-user btn-block bg-gradient-danger delete" align="center">ลบ</button></td>  
                               </tr>  
                              </tbody>
                          ';
      }
    } else {
      $output .= ' 
                         <tbody> 
                          <tr>  
                               <td colspan="7">ไม่พบข้อมูล</td>  
                          </tr>  
                         </tbody>
                     ';
    }
    $output .= '</table>
                         <div class="modal fade" id="modalmoreinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-lg" role="document" >
                                <div class="modal-content ">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลเพิ่มเติม</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body" >
                                      <div id="modal-loader" style="text-align: center; display: none;">
                                          <img src="ajax-loader.gif">
                                      </div>
                                      <div id="dynamic-content">
                                        
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          </div></div></div>
                        
                    
                ';
    echo $output;
  }
}
?>

<script>
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>

<script>
  /* View Function*/
  $(document).ready(function() {

    $(document).on('click', '#moreinfo', function(e) {

      e.preventDefault();

      var orgzerid = $(this).data('id'); // it will get id of clicked row

      $('#dynamic-content').html(''); // leave it blank before ajax call
      $('#modal-loader').show(); // load ajax loader

      $.ajax({
          url: 'admin_team_moreinfo.php',
          type: 'POST',
          data: 'id=' + orgzerid,
          dataType: 'html'
        })
        .done(function(data) {
          console.log(data);
          $('#dynamic-content').html('');
          $('#dynamic-content').html(data); // load response 
          $('#modal-loader').hide(); // hide ajax loader 
        })
        .fail(function() {
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
        });

    });

  });
</script>
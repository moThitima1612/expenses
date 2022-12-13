
<?php include ("h.php");?>
<!-- <?php include ("h.php");?> -->

<?php include ("connect.php");
    $search=isset($_POST['search']) ? $_POST['search']:'';
      $sql="SELECT * FROM `number`   ORDER BY amount DESC ";
    $resual = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>

  
<div class="container "align ='center';>
 
        <!-- ************************************ -->
        <table  class="table table-bordered table-striped" id="example" >
          <thead class="thead-light">
          <tr align = 'center'; >
             <table  class="table table-bordered table-striped" id="example" >
                  <thead class="thead-light">
                  <tr align = 'center'; >
                   <th width="3%">ไอดี</th>
                   <th width="10%">ชื่อรายการ</th>
                   <th width="15%">วันที่ทำรายการ </th>
                   <th width="10%">ผู้ทำรายการ</th>
                   <th width="10%">จำนวนเงิน</th>
                 
                 
                   
                   
                  

                 

                
                   </tr>

</thead>
</thead>

<!-- Include bootstrap & jQuery -->
<link rel="stylesheet" href="bootstrap.css" />
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.js"></script>

<!-- Creating table heading -->

<?php

         while($row = mysqli_fetch_array($resual,MYSQLI_ASSOC)){
    ?>
   
    <tr align = 'center';>
    
      <td><?php echo $row["id"]; ?></td>
     
           <td><?php echo $row["item_name"]; ?></td>
           <td><?php echo date("d/m/Y",strtotime($row["date"])); ?></td>
           <td><?php echo $row["name"]; ?></td>
           
      
    
      <td align="right"><?php echo number_format($row['amount'],2);?></td>
</tr>
<?php
                   @$amount_total += $row['amount'];
                    }
                    
                    ?>
<tr class="table-danger">
   
   <td align="center">รวม</td>
   <td align="center"></td>
   <td align="center"></td>
  <td align="center"></td>
  <td align="right"><b>
  <?php echo number_format(@$amount_total,2);?></b></td></td>
</tr>
</table>
</div>
<?php mysqli_close($conn);?>
</div>
</div>
</div>
    
</div>

    </tr>
  <?php ?>
  
        </body>
      </div>
      </div>
      </div>
      </div>
      </table>
      </body>
      </html>
<center><a href="index.php" class="btn btn-info btn-sm"> กลับหน้าหลัก </a>
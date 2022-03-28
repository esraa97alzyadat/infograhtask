<?php include 'header.php'; ?>
<!-- admin complaints viewer part  -->
<center>
    <div style="padding-left: 100px;padding-right: 100px;">
        <table class="table table-bordered">
            <tr>
                <th> Complaints Number </th>
                <th> Name </th>
                <th> Complaints </th>
                <th> delete </th>
            </tr>
            </center>
<?php
        $con = new mysqli("localhost", "root", "", "nutri");
        $st = $con->prepare("select * from comp");
        $st->execute();
        $rs = $st->get_result();
        while ($row=$rs->fetch_assoc())
        {
            echo '<tr>';
            echo '<td>'.$row["usernumper"].'</td>';
            echo '<td>'.$row["name"].'</td>';
            echo '<td>'.$row["text"].'</td>';
             echo '<td><input type="button" value="Delete" class="btn btn-danger" id="btndel" data-smo="'.$row["name"].'" data-qty="'.$row["text"].'" /></td>';
            echo '</tr>';
        }
        ?>
             </table>
        
    </div>

<script> 
    $(document).ready (function(){
        
        $(document).on("click","#btndel",function(){
            if (confirm("do you want to delete?" )){
                
                var btn=$(this);
                var smo=(btn.attr("data-smo"));
                var qty=(btn.attr("data-qty"));
 window.location = "admin.php?smo=" + smo + "&qty=" + qty; 
            } 
            
            
        });
        
    });
    
    
    </script>
</center>
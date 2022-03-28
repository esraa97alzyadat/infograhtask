<?php include 'header.php' ; ?>
<!-- basket  add food and delete -->
<center>
    <div style="padding-left: 100px;padding-right: 100px;">
        <table class="table table-bordered">
            <tr>
                <th> name </th>
                <th> price </th>
                <th> qty </th>
                <th> sub total </th>
                <th> delete </th>
            </tr>
   <?php
        $con = new mysqli("localhost", "root", "", "nutri");
        $st = $con->prepare("select name,price,smo,qty from provitems inner join cart 
                on provitems.id=cart.itemid where userid=? order by smo");
        $st->bind_param("i", $_SESSION["userid"]);
        $st->execute();
        $total=0;
        $rs = $st->get_result();
        while ($row=$rs->fetch_assoc())
        {
            echo '<tr>';
            echo '<td>'.$row["name"].'</td>';
            echo '<td>'.$row["price"].'</td>';
            echo '<td>'.$row["qty"].'</td>';
            $subtotal=$row["price"]*$row["qty"];
            $total+=$subtotal;
            echo '<td>'.$subtotal.'</td>';
          echo '<td><input type="button" value="Delete" class="btn btn-danger" id="btndel" data-smo="'.$row["smo"].'" data-qty="'.$row["qty"].'" /></td>';
            echo '</tr>';
        }
        ?>
             </table>
        <center>  <h3> The Total Is  <?php if(isset ($_SESSION["userid"]))
                                         echo $total;  ?> JD</h3>
        <form action="confirm.php" method="post">
            <input type="submit" value ="confirm order" class="btn btn-danger"/>
            
        </form>
            </center>
    </div>
</div>
</div>
<script> 
    $(document).ready (function(){
        
        $(document).on("click","#btndel",function(){
            if (confirm("do you want to delete?" )){
                
                var btn=$(this);
                var smo=(btn.attr("data-smo"));
                var qty=(btn.attr("data-qty"));
 window.location = "delet_cart.php?smo=" + smo + "&qty=" + qty; 
            } 
            
            
        });
        
    });
    
    
    </script>
</center>
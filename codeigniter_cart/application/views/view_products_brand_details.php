<div style="float:right;width:84%">           
         <?php 
         foreach ($product as $row) 
         {  
            ?>
                    <div style="float:left;border:1px solid red;width:220px;height:320px;">
                    <img  src='../../images/<?php echo $row->mobile_img;?>' />
                    <div>Model: <?php echo $row->model_name;?></div>
                    <div>Price: <?php echo $row->price;?> </div>
                    </div>
               <?php }  
   ?> 
</div>

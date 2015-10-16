 <div style="float:right;width:84%" >

            
            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($products as $product) {
                $id = $product['model_no'];
                $name = $product['model_name'];
                $price = $product['price'];
                ?>

                <div  style="float:left;width:220;height:320;border:1px solid red">  
                    
                        <img src="<?php echo base_url() . $product['mobile_img'] ?>"/>
                   
                    
                        <div><?php echo $name; ?></div>
                       
                        <div><b>Price</b>:<big style="color:green">
                            $<?php echo $price; ?></big></div>
                        <?php
                        
                        // Create form and send values in 'shopping/add' function.
                        echo form_open('shopping_controller/add');
                        echo form_hidden('id', $id);
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        ?> 
						  <div id='add_button'>
                        <?php
                        $btn = array(
                            'class' => 'fg-button teal',
                            'value' => 'Add to Cart',
                            'name' => 'action'
							
                        );
                        
                        // Submit Button.
                        echo form_submit($btn);
						
                        echo form_close();
                        ?>
                    </div>
					
					</div> 
                  
                </div>

<?php } ?>

        </div>
      

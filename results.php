
                  <?php
                  include_once 'includes/dbh.inc.php';
                  if (isset($_POST['results'])) {
	           $name= mysqli_real_escape_string($conn,$_POST['results']);


}


   
    $sql = "SELECT * FROM products  WHERE product_name LIKE '%$name%' OR product_owner LIKE '%$name%' OR product_place LIKE '%$name%';";
   $result= mysqli_query($conn,$sql);
   $resultsCheck= mysqli_num_rows($result);
   echo "<h4>there are &emsp;".$resultsCheck." result(s) found</h4>";
   if ($resultsCheck > 0) {
   	while ($row = mysqli_fetch_assoc($result)) {
   		                   $productName = $row['product_name'];
                           $productPrice = $row['product_price'];
                           $productPlace = $row['product_place'];
                           $productLink = $row['product_link'];
                           $productLikes = $row['product_like'];
                           $productImg = $row['product_img'];
                           $productDesk = $row['product_desk'];
                           $productOwner = $row['product_owner'];
                           $productFace = $row['product_face'];
                           $productDate = $row['product_date'];

                           echo  "<div class='product-box'>
                        <div class='product-top'>

                            <div class='top-p'><p>".$productName."</p></div>

                            <div class='top-user'>
                          


                            <img src='uploads/profile/". $productFace ."'>

                            



                            </div>
                         




                        </div>

                       
                       <div class='product-img'>
                           <div class='product-photo'>
                           <img src='uploads/products/".$productImg."'>

                           </div>
                           <div class='product-words'>
                               <div class='product-price'><p>". $productPrice."</p></div>
                               <div class='product-funbox'><p>Descrption</p></div>
                               <div class='product-des'><p>". $productDesk."</p></div>
                           </div>
                       </div> 
                       <div class='product-footer'>
                           <div class='product-like'>
                               <div id='like-icon'>
                        <form action='includes/like.php' method='POST'>
                           <input type='text' value='".$productName."' name='product'>
                                  
                                   <button type='submit' title='LIKE' onclick='like()' id='btn' name='like'></button>
                           </form>
                               </div>
                               <p>".$productLikes." Likes</p>
                            </div>


                           <div class='product-place'><p>". $productPlace."</p></div>
                           <div class='product-link'>
                           <form action='guest-profile.php' method='POST'>

      <input type='text' name='profile' value ='".$productOwner."'>
      <button type='submit' name='submit'>".$productOwner."</button>


                           </form>


                           </div>
                       </div>

                    </div> <br><br><br><br> ";


                    }
                   
                  }
                  else{
                  	
                  	echo "<br>";

                  	echo " 
                  	<div class='upload-box'>
                  	 <div class='uploadi-top'>
                            
                                <p>Upload Your Product</p>
                            </div>

                            <form action='includes/submit-product.php' method='POST'>
                        <input type='text' name='pname' placeholder='Product name'>
                        <input type='text' name='price' placeholder='Price'>
                        <input type='text' name='place' placeholder='Your Location'>
                       <textarea  name='desk' placeholder='Product descrption'></textarea>
                       <button type='submit' name='submit'>Submit</button>
                                
                            </form>
                        
                    
                </div>
                
            </div>";


                  }
                  ?>



                

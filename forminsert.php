



    <div class="row mb-5 align-items-end ">
      <div class="col-md-6" data-aos="fade-up">
        <h2>Share with us</h2>
      </div>

    </div>

    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

        <form  method="post" action="" role="form">
  
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <div class="row gy-3">
            <div class="col-md-6 form-group">
              <label for="name">Pizza Name:</label>
              <input type="text" name="pizzaname" placeholder="Pizza name" class="form-control" id="pizzaname" required>
            </div>


            <div class="col-md-6 form-group">
              <label for="name">Country:</label>
              <input type="text" class="form-control" name="country" id="country" placeholder="Country " required>

              
            </div>
            <div class="col-md-12 form-group">
              <label for="name">Ingredients:</label>
              <input type="text" class="form-control" name="ingredients" id="ingredients" placeholder="Ingredients" required>

            </div>
            <div class="col-md-12 form-group">
              <label for="name">Image URL:</label>
              <input type="text" class="form-control" name="picture" id="ingredients" placeholder="URL" required>
              
            </div>

            

            <div class="col-md-6 mt-0 form-group">
              <input type="submit" class="readmore d-block w-100" value="Share Record" name="submit">
              
            </div>
          </div>

        </form>


      </div>

   

    

<?php
    //connect to db
    include "dbconnect.php";

    if(isset($_POST['submit'])){
        $pizzaname=$_POST['pizzaname'];
        $country=$_POST['country'];
        $ingredients=$_POST['ingredients'];
        $picture=$_POST['picture'];
    

        //sql command

        $sql="INSERT INTO pizzas (pizzaname,country,ingredients,picture)
            VALUE ('$pizzaname', '$country', '$ingredients', '$picture')";

        //execute sql
        $result=mysqli_query($conn,$sql);

        //evaluate the execution 
        if($result==TRUE){
            echo"The record for $pizzaname has been saved";
        } else{
            echo"UNKNOWN ERROR";
        }
    }

?>
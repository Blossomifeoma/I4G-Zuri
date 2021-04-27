<!DOCTYPE html>
<html>
 <head>
  <h1>DASHBOARD</h1>
 </head>
 <body>
 <div class="container">
    <table class="table">
       <tbody>
         <?php include 'read.php'; ?>
         </tbody>
    </table>
   <form class="form-inline m-2" action="create.php" method="POST">
    <label for="coursetittle">Course tittle:</label>
     <input type="text" class="form-control m-2" id="coursetittle" name="coursetittle">
     <label for="coursecode">Course code:</label>
     <input type="text" class="form-control m-2" id="coursecode"name="coursecode">
     <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
  </body>
  </html>

     

 
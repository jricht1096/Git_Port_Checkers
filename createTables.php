 
    
        <?php
        include './includes/header.html';
        
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
           createTables(); 
        }

        
        ?>
 <?php
        include './includes/nav.html'
        ?>

      <form action="createTables.php" method="POST">
    <br><br>
     <input type ="submit" value = "Create Tables in checkers DB"name="createTables">

     
    </form>

        <?php
        include './includes/footer.html'
        ?>
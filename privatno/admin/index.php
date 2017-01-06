<?php include_once '../../config.php';
if (!isset($_SESSION["autoriziran"]) || $_SESSION["autoriziran"] -> uloga != "administrator") {
	header("location: ../../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- head -->
  <?php include_once '../../head.php'; ?>
  <!-- /head -->
</head>
<body>
  <!-- header -->
  <?php include_once '../../header.php'; ?>
  <!-- /header -->
  <!-- Admin panel -->

  <section>
    <div class="container">
     <div class="row">
      <?php include_once 'adminleft.php'; ?>


      <div class="col-sm-9 padding-right">
       <div class="features_items"><!--features_items-->

        <h2 class="title text-center">Admin </h2>
        <?php include_once '../admin/adminleft.php'; ?>


        
        <?php 

        $poStranici=40;
        
        $izraz = $veza -> prepare("select count(id) from operater");
        $izraz -> execute();
        $ukupno = $izraz->fetchColumn();
        
        $ukupnoStranica=ceil($ukupno/$poStranici);
        
        
        
        if(isset($_GET["stranica"])){
          $stranica=$_GET["stranica"];
        }else{
          $stranica=1;
        }
        
        if($stranica>$ukupnoStranica){
          $stranica=1;
        }
        
        if($stranica==0){
          $stranica=$ukupnoStranica;
        }
        
        $odKuda = $stranica*$poStranici-$poStranici;
        

        $izraz = $veza -> prepare("
         select * from operater limit :odKuda, :poStranici;


         ");
        $izraz -> execute(array("odKuda"=>$odKuda,"poStranici"=>$poStranici));
        $niz = $izraz -> fetchAll(PDO::FETCH_OBJ);
        

        ?>  
        <a href="#" class="btn btn-danger ">Obriši</a>
        <a href="#" class="btn btn-info ">Promjeni</a>
        <a href="#" class="btn btn-success ">Dodaj</a>
        <a href="#" class="btn btn-warning ">Blokiraj</a>
        <br>
        <table  style="min-width: 100%;" class="table table-sm table-inverse" style="text-align: center;" >
          <tbody>

            <tr>
              <th>ID</th>
              <th>Email/korisnicko ime</th>
              <th>Lozinka</th>     
              <th>Uloga</th>
              
              

            </tr>
            <br>
            <?php foreach ($niz as $operater): ?>
              

              <tr ">
                <td><?php echo $operater -> id; ?></td>
                <td><?php echo $operater -> email; ?></td>
                <td><?php echo $operater -> lozinka; ?></td>
                <td><?php echo $operater -> uloga; ?></td>       
                
                
              </tr>

            <?php endforeach; ?>
          </tbody>
        </table>

        <div class="pagination-area" style="text-align: center;">
          <ul class="pagination">

            <li><a href="<?php echo "?stranica=" . ($stranica-1) ?>"><i class="fa fa-angle-double-left"></i></a></li>



          </li>
          <?php 
          
          
          for($i=1;$i<=$ukupnoStranica;$i++):
            if($i==$stranica):
              ?>
            <li><a href="?stranica=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endif; ?>
        <?php  endfor; ?>


        <li><a href="<?php echo "?stranica=" . ($stranica+5) ?>">+5</a></li>
        <li><a href="<?php echo "?stranica=" . ($stranica+5) ?>">+10</a></li>
        <li><a href="<?php echo "?stranica=" . ($stranica+1) ?>"><i class="fa fa-angle-double-right"></i></a></li>
        
      </ul>
    </div>  
  </div>

</div>
</div>
</section>

<!-- /Admin panel -->
















<!-- footer -->
<?php include_once '../../footer.php'; ?>
<!-- /footer -->

<!-- script -->
<?php include_once '../../script.php'; ?>
<!-- /script -->



</body>
</html>
<?php $size = sizeof($allresult);
      $cur_page = $_GET['page'];
      if(isset($_GET['sort'])) {
           $cur_page2 = '&sort='.$_GET['sort'];
      }
      else{
          $cur_page2 = "";
      }
     
      $all_pages = ceil($size/3);  
?>

<div class="col-md-6 col-md-offset-5 pagination">
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item <?php if($cur_page == 1) {echo "disabled";} ?>">
      <a class="page-link" href="<?php if($cur_page > 1) {echo "/?page=";echo $cur_page-1;} ?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
  <?php for($i=1;$i<=ceil($size/3);$i++): ?>
    <li class="page-item <?php if($cur_page == $i) {echo "active";} ?>" aria-current="page">
      <a class="page-link" href="/?page=<?=$i; ?><?=$cur_page2;?>"><?=$i; ?>
     <span class="sr-only">(current)</span></a>
    </li>
<?php endfor; ?>
    <li class="page-item <?php if($cur_page == $all_pages) {echo "disabled";} ?>">
      <a class="page-link" href="<?php if($cur_page != $all_pages) {echo "/?page=";echo $cur_page+1;} ?>">Next</a>
    </li>
  </ul>
</nav>
</div>



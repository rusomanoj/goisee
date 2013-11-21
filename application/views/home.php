<?php include_once('header.php'); ?>
<div class="container">
    <div class="js-masonry" data-masonry-options='{ "itemSelector": ".item", "columnWidth": 200 }'>
	 <ul class="grid effect-4" id="grid" style="position: relative;">
	     <div class="item">
<?php    

foreach($see as $s)
{
   // echo '<pre>';
   // print_r($s);
   
    echo '<img src ='.str_replace('localhost/goisee/','',$s->path).' padding-left="5px" width="25%" height="25%">';
//    echo "<br/>";
//    echo "<br/>";
}
?>
		 </div>
</ul>
</div>
</div>
<?php include_once('footer.php'); ?>
<?php include_once('header.php'); ?>
<div class="container">
 <?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" class="form-inline" name="userfile" size="20" />

<br /><br />

<input type="submit" class="btn btn-primary" name="submit" value="upload" />
    
  </form>
 
</div>         
<?php include_once('footer.php'); ?>
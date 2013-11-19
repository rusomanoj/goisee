
<div class="container">
    <?php echo $error; ?>
    <?php echo form_open_multipart('home/upload'); ?>
      <input type="file" class="form-inline" name="userfile" /><br/>
      <input type="submit" class="btn btn-primary" name ="submit" value="upload image">
  </form>
 
</div>         

<div class ="container2">
    <?php
    if(isset($_SESSION["login_admin"]))
    {
echo ($_SESSION["login_admin"]) .'<div class ="row">
    <form class="mainSettingsForm add newPage" action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image[]" multiple=""/>
<input type="submit" value="Upload" name="submit" />
    </form>
</div>';
    }
?>
</div>


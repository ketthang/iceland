Dashboard... Logged in only..

<br />

<form action="<?php echo URL;?>dashboard/create" method="post" enctype="multipart/form-data">
    <label> Việt Nam </label><input type="text" name="txtVietnam" />
    <br/><label> Iceland </label><input type="text" name="txtIceland" />
    <br/><label>Select your image</label>
    <br/><input type="file" name="image">
    <br><label>Select your sound</label>
    <label for="file">Filename:</label>
    <input type="file" name="sound"/> 
    <br/><input type="submit" />
</form>

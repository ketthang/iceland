<br />

<!--<form action="<?php echo URL;?>admin/create" method="post" enctype="multipart/form-data">
    <label> Việt Nam </label><input type="text" name="txtVietnam" />
    <br/><label> Iceland </label><input type="text" name="txtIceland" />
    <br/><label>Select your image</label>
    <br/><input type="file" name="image">
    <br><label>Select your sound</label>
    <label for="file">Filename:</label>
    <input type="file" name="sound"/> 
    <br/><input type="submit" />
</form>-->

<h1>catalog add</h1>
<form action="<?php echo URL?>catalog/catalogAdd" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label>name Iceland</label></td>
            <td><input type="text" name="txtNameIS"></td>
        </tr>
        <tr>
            <td><label>name VietNam</label></td>
            <td><input type="text" name="txtNameVN"></td>
        </tr>
        <tr>
            <td><label>Image</label></td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><label>Link</label></td>
            <td><input type="text" name="txtLink"></td>
        </tr>
    </table>
    <br>
    <input type="submit"/>   
</form>
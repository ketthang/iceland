<br />

<div class="adminMenu">
    <ul>
        <li><a href="catalog/add">Catalog Add</a></li>
        <li><a href="#">chua biet</a></li>
        <li><a href="#">eo biet</a></li>
    </ul>
</div>
<div class="row" id="intro">
    <?php foreach ($this->catalog as $key => $value) {
     echo '<div class="col">'
        . '<a href="body"> <img src="'.URL.$value['image'].'" width="260" height="260"/></a>'
             . '<div class="desc"><a href="'.$value['link'].'">'.$value['nameIS'].' - '.$value['nameVN'].'</a>'
             . '</div>'
             . '</div>';  
    }?>
</div>

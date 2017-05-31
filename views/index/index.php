
<div class="row" id="intro">
    <?php
    foreach ($this->catalog as $key => $value) {
        echo '<div class="col">'
        . '<a href="' . $value["link"] . '">'
        . '<img src="' . URL . $value["image"] . '" width="260" height="260"/>'
        . '<div class="desc">' . $value["nameIS"] . '-' . $value["nameVN"] . '</div>'
        . '</a>'
        . '</div>';
    }
    ?>
</div><!--row-->






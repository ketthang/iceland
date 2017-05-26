
<div class="row" id="intro">
<?php
        foreach ($this->hurtList as $key => $value) {
            echo '<div class="col">'.
            '<img src="' . URL . $value['image'] . '"width="300" height="300"/>' .
            '<div class="desc">' . $value['vietnam'] .'</div>'.
            '<div class="desc">' . $value['iceland'] .'</div>'.
            '<div><audio controls><source src="' . URL .$value['sound'].'"></audio></div>'.
            '</div>';
        }
?>
</div><!--row-->






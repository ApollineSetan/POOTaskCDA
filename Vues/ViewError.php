<?php
class ViewError implements InterfaceView {
    
    public function displayView(): string {
        ob_start();
        ?>
        <h1>Error 404 : Not found ! Cette page n'existe pas mon frère</h1>
        <?php
        return ob_get_clean();
    }

}

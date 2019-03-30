    <?php 
    session_start();
    require_once  $_GLOBAL['base_url'].'session.php';
        $link = $_SERVER['PHP_SELF'];
      
        $link_array = explode('/',$link);
        $page = end($link_array);
        $data['file']=  $page.".php";
        require_once $_GLOBAL['base_url'].'top-header.php';
        require_once $_GLOBAL['base_url'].'header.php';
    ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
        <?php 
            require_once $_GLOBAL['base_url'].'sidebar.php';
            
            // current file content 
            require_once $data['file '] ; 
        ?>
            
        </div>

       <?php require_once $_GLOBAL['base_url'].'footer.php'?>
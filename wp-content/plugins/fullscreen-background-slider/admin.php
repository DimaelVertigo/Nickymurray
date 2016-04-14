<?php

add_action('admin_menu', 'fullbackslider_admin_actions');
function fullbackslider_admin_actions(){
    add_menu_page( 'Fullscreen Background slider', 'BG Slider', 'manage_options', 'fbs', 'fullbackslider_admin_images', '', 15);
    add_submenu_page('fbs', 'Fullscreen background slider settings', 'Settings', 'manage_options', __FILE__, 'fullbackslider_admin');
}

function fullbackslider_admin_images(){

    global $wpdb;
    $mylink = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "fullbackslider WHERE id = 1");
    $folder = '../wp-content/uploads/fbslider/';

    if(isset($_FILES['file'])){
        for($i=0; $i < count($_FILES['file']['name']); $i++){
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"][$i]);
            $extension = end($temp);
            if ((($_FILES["file"]["type"][$i] == "image/gif") || ($_FILES["file"]["type"][$i] == "image/JPG") || ($_FILES["file"]["type"][$i] == "image/JPEG") || ($_FILES["file"]["type"][$i] == "image/jpeg") || ($_FILES["file"]["type"][$i] == "image/jpg")
            || ($_FILES["file"]["type"][$i] == "image/pjpeg") || ($_FILES["file"]["type"][$i] == "image/x-png")|| ($_FILES["file"]["type"][$i] == "image/png"))
            && ($_FILES["file"]["size"][$i] < 10000000) && in_array($extension, $allowedExts)){
                if ($_FILES["file"]["error"][$i] > 0){
                    echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
                } else {
                    if (file_exists($folder . $_FILES["file"]["name"][$i])){
                        echo $_FILES["file"]["name"][$i] . " already exists. ";
                    } else {
                        if (!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }
                        move_uploaded_file($_FILES["file"]["tmp_name"][$i],
                        $folder . $_FILES["file"]["name"][$i]);
                    }
                }
            } else {
                echo "Invalid file";
            }
        }
    }

?>
    <h2>Fullscreen background slider</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table class="form-table">
            <tbody>
                <tr class="uploadfile">
                    <th>Upload your images:</th>
                    <td><input type="file" multiple="true" name="file[]" id="async-upload"></td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Upload and save" />
        </p>
    </form>
<?php

    $filetype = '*.*';
    $files = glob($folder.$filetype);

    if(count($files)==0){
        echo '<div class="nofiles">You have no files uploaded in '. $folder .'</div>';
    }
    for ($i=0; $i<count($files); $i++) {
        echo '<div class="adminbg"><img class="background background' . $i . ' " src="' . $files[$i] . '" /></div>';
    }

}

function fullbackslider_admin(){

    global $wpdb;

    if( isset( $_POST['slidetime'] ) && isset( $_POST['timeout'] ) && isset( $_POST['folder'] ) ){
        $slidetime  = $_POST['slidetime'];
        $timeout  = $_POST['timeout'];
        $folder  = $_POST['folder'];
        $table_name = $wpdb->prefix . "fullbackslider";

        $insert = $wpdb->update(
            $table_name,
            array(
                'slide_time' => $slidetime,
                'timeOut' => $timeout,
                'folder' => $folder
            ),
            array( 'id' => 1 )
        );
    }

    $mylink = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "fullbackslider WHERE id = 1");

    ?>
    <div class="wrap">
        <h2>Fullscreen background slider settings</h2>
        <form action="" method="post">
            <table class="form-table">
                <tbody>
                    <tr>
                        <th><label>Slide Time:</label></th>
                        <td><input name="slidetime" type="text" value="<?php echo $mylink->slide_time; ?>" /><p class="description">(in milliseconds)</p></td>
                    </tr>
                    <tr>
                        <th><label>Time Out:</label></th>
                        <td><input name="timeout" type="text" value="<?php echo $mylink->timeOut; ?>" /><p class="description">(in milliseconds)</p></td>
                    </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Save changes" />
            </p>
        </form>
    </div>
<?php
}

function fullbackslider_admin_js(){
    wp_enqueue_script(
        'fbslider-script',
        plugin_dir_url(__FILE__) . 'admin-script.js',
        array('jquery')
    );

    wp_register_style('fbs-script-admin', plugins_url('admin.css', __FILE__) );
    wp_enqueue_style('fbs-script-admin');
}
add_action('admin_enqueue_scripts', 'fullbackslider_admin_js');

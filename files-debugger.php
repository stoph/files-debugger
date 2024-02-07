<?php
/**
 * Plugin Name: $_FILES Debugger
 * Description: Display contents of $_FILES array for multiple uploads
 * Version: 1.0
 * Author: Stoph
 */

 add_action('admin_menu', 'files_debugger_menu');

function files_debugger_menu() {
  add_menu_page('$_FILES Debugger', '$_FILES Debugger', 'manage_options', 'files-debugger', 'files_debugger_page');
}

function files_debugger_page() {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
  }

  echo '<form method="post" enctype="multipart/form-data">';
  echo '<input type="file" name="files[]" multiple>';
  echo '<input type="submit" value="Upload">';
  echo '</form>';
}
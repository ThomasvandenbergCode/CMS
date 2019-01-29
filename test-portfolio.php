<?php
/*
Plugin Name:  test-portfolio
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Deze plugin zorgt ervoor dat  alle woorden op je website willekeurige kleuren toegewezen krijgen, dit voor een leuke sfeer.
Version:      1.0
Author:       ThomasvanBerg
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  test-portfolio
Domain Path:  /languages
*/

add_action("admin_menu", "addMenu");
function addMenu() {
    add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu");
    add_submenu_page("example-options", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
    echo <<<'EOD'

        <h1> header <h1>
        
        <p>welkom op de coolste pagina ooit, hier vind je dingen die je nergens anders vindt!</p>
        <img src="https://set.kuleuven.be/set-it/images/welkom.jpg/image" alt="hoi">
        <input value="naar google!" type="button" onclick="window.open('http://www.google.com','_blank','resizable=yes')"/>


EOD;

}

function option1()
{
    echo "Walrus";
}
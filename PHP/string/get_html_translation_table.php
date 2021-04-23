<?php
    echo '<pre>';
    print_r (get_html_translation_table(HTML_SPECIALCHARS, ENT_QUOTES));
    echo '</pre>';

    echo '<pre>';
    print_r (get_html_translation_table(HTML_ENTITIES));
    echo '</pre>';
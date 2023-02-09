<?php

function highlight_word( $content, $word, $color ) {
    $replace = '<span style="background-color: ' . $color . ';">' . $word . '</span>'; 
    $content = str_replace( $word, $replace, $content ); 

    return $content;
}

// Çağırma Örneği
// $result = highlight_word('Some normal text with normal words isn\'t abnormal at all', 'normal', '#6bcf70a9' );
// echo '<p>' . $result . '</p>';

?>

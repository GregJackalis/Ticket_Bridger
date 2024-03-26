<?php
    function addClassesIcons() {
        echo '<script>';
        echo "document.addEventListener('DOMContentLoaded', function() {";
        echo "    const closeGetStarted = document.querySelectorAll('.getStarted');";
        echo "    const carticon = document.querySelector('.carticon');";
        echo "    const usericon = document.querySelector('.usericon');";
        echo "    carticon.classList.add('active');";
        echo "    usericon.classList.add('active');";
        echo "    closeGetStarted.forEach(function(el){";
        echo "        el.classList.add('close');";
        echo "    });";
        echo "    removeActive();";
        echo "});";
        echo '</script>';
        
    }
?>
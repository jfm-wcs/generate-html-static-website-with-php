<?php

function makeMenu(array $pages, string $current = '')
{
    $html = '<ul>';
    foreach ($pages as $page) {
        $html .= '<li><a';
        $html .= $current === $page['file'] ? ' class="active"' : '';
        $html .= ' href="' . $page['file'] . '">' . $page['name'] . '</a></li>';
    }
    $html .= '</ul>';
    return $html;
}

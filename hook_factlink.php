<?php
// - Extension: Factlink for PivotX
// - Version: 1.0
// - Author: Factlink
// - Email: support@factlink.com
// - Site: https://factlink.com
// - Description: Integrates the Factlink commenting & annotation tool in your PivotX website
// - Date: 2014-02-24
// - Identifier: factlink

$this->addHook(
    'before_output',
    'callback',
    'integrateFactlink'
);

function integrateFactlink(&$html) {
    $str = array();
    $insert = true;

    $factlink_js = <<<EOF
    <script async defer src="https://static.factlink.com/lib/dist/factlink_loader.min.js"></script>
EOF;

    if ($insert) {
        $str[] = $factlink_js;
    }

    $str[] = '</head>';
    $html = str_replace('</head>', implode("\n", $str), $html);
}

?>

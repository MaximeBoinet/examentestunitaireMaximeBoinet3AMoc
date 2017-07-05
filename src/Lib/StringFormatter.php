<?php
namespace Lib;

class StringFormatter {
    private function concat($stringun, $stringdeux) {
        return $stringun + $stringdeux;
    }

    private function toCamelCase($stringun, $stringdeux) {
        return strtolower($stringun) + ucfirst(strtolower($stringdeux));
    }

    public function suffix($string, $suffix, $tcc) {
        if ($tcc)
            return toCamelCase($string, $suffix);

        return concat($string, $suffix);
    }

    public function prefix($string, $prefix, $tcc) {
        if ($tcc)
            return toCamelCase($prefix, $string);

        return concat($prefix, $string);
    }
}
?>

<?php
namespace lib;

class StringFormatter
{
    public function concat($stringun, $stringdeux)
    {
        return $stringun . $stringdeux;
    }

    public function toCamelCase($stringun, $stringdeux)
    {
        $str1 = explode(" ", $stringun);
        $str2 = explode(" ", $stringdeux);
        $res = "";

        foreach ($str1 as $value) {
            $res .= ucfirst(strtolower($value));
        }

        foreach ($str2 as $value) {
            $res .= ucfirst(strtolower($value));
        }

        return $res;
    }

    public function suffix($string, $suffix, $tcc)
    {
        if ($tcc) {
            return $this->toCamelCase($string, $suffix);
        }

        return $this->concat($string, $suffix);
    }

    public function prefix($string, $prefix, $tcc)
    {
        if ($tcc) {
            return $this->toCamelCase($prefix, $string);
        }

        return $this->concat($prefix, $string);
    }
}

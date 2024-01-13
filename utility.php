<?php

namespace MieClassi;

class Utility
{
    public static function controllaRangeStringa($stringa, $min = null, $max = null)
    {
        $rit = 0;
        $n = ($stringa);
        if ($min != null && $n < $min) {
            $rit++;
        }
        if ($max != null && $n > $max) {
            $rit++;
        }
        return ($rit == 0);
    }

    public static function leggiTesto($file)
    {
        $rit = false;
        if (!$fp = fopen($file, 'r')) {
            echo "Non posso aprire il file $file<br>";
        } else {
            if (is_readable($file) === false) {
                echo "il file $file non è leggibile<br>";
            } else {
                $rit = fread($fp, filesize($file));
            }
        }
        fclose($fp);
        return $rit;
    }

    public static function leggiTestoCSV($file)
    {
        $rit = false;
        $riga = 0;
        if (!$fp = fopen($file, 'r')) {
            echo "Non posso aprire il file $file<br>";
        } else {
            if (is_readable($file) === false) {
                echo "il file $file non è leggibile<br>";
            } else {
                while (($data = fgetcsv($fp, null, ";")) !== false) {
                    $rit [$riga] = $data;
                    $riga++;
                }
            }
        }
        fclose($fp);
        return $rit;
    }
    
    public static function richiestaHTTP($str)
    {
        $rit = null;
        if ($str !== null) {
            if (isset($_POST[$str])) {
                $rit = $_POST[$str];
            } elseif (isset($_GET[$str])) {
                $rit = $_GET[$str];
            }
        }
        return $rit;
    }

    public static function scriviTesto($file, $stringa, $commenta = false) 
    {
        $rit = false;
        if (!$fp = fopen($file, 'a')) {
            echo "Non posso aprire il file $file<br>";
        } else {
            if (is_writable($file) === false) {
                echo "Il file $file non è scrivibile<br>";
            } else {
                if (!fwrite($fp, $stringa)) {
                    echo "Non posso scrivere il file $file<br>";
                } else {
                    if ($commenta) echo "Operazione completata!<br>";
                    $rit = true;
                }
            }
        }
        fclose($fp);
        return $rit;
    }
        
}

define("COMMENTA", true);

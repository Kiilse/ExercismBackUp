<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $str = str_replace(' ', '', $name);
        return mb_substr($str, 0, 1);    
    }

    public function initial(string $name): string
    {
        $result = strtoupper($this->firstLetter($name));
        return $result . ".";
    }

    public function initials(string $name): string
    {
        $list = explode(' ', $name);
        return $this->initial($list[0]) . ' ' . $this->initial($list[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $firstPart = $this->initials($sweetheart_a);
        $secondPart = $this->initials($sweetheart_b);
        return 
"     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $firstPart  +  $secondPart     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *";
       
    }
}

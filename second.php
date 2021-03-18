<?php
function generator_str($pr,$mass)
{
    foreach ($mass as $item)
    {
        if (mb_strpos($item,$pr)===0) {

            yield $item;

        }
    }

}




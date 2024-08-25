<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniveristesi

*******************************************************************************/
// Değişken Öldürme Methodu için unset() kullanılır
$emre = "emre üçbudak";
echo($emre);
unset($emre);
//  Gördüğünüz Gibi ilk başta yazarken sonradan böyle bir Değişken yok hatası verdi
echo($emre);
?>

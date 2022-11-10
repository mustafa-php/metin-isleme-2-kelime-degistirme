# PHP Metin İşleme Bölüm 2 / Kelime değiştirme

str_replace — Bir alt dizgenin bütün örneklerini yenisiyle değiştirir
  

```php
<?php
$konu = "Merhaba Dünya";
$eski = "Dünya";
$yeni = "PHP";

$sonuc = str_replace(
    array|string $eski,
    array|string $yeni,
    string|array $konu
):

> $sonuc : "Merhaba PHP" ;
?>
```
  
Konu dizgesi içindeki eski dizgelerinin her birini yeni dizgesiyle değiştirerek elde edilen dizi veya dizgeyi döndürür.

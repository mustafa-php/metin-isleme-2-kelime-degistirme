# PHP Metin İşleme ile Kelime değiştirme

str_replace — Bir alt dizgenin bütün örneklerini yenisiyle değiştirir
  

```php
<?php
$konu = "Merhaba Dünya";
$eski = "Dünya";
$yeni = "PHP";

str_replace(
    array|string $eski,
    array|string $yeni,
    string|array $konu
):

> çıktı : Merhaba PHP
?>
```
  
Konu dizgesi içindeki eski dizgelerinin her birini yeni dizgesiyle değiştirerek elde edilen dizi veya dizgeyi döndürür.

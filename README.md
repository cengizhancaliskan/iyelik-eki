iyelik-eki
==========

PHP iyelik eki ekleme fonksiyonu

iyelikEkle($kelime,$soneEkle='',$bicimlendir=false)
- $kelime => iyelik eklenecek kelime
- $sonaEkle => kelimenin sonuna istede bağlı birşeyler ekleme
- $bicimlendir => kelimeyi istede bağlı biçimlendirme
- - $bicimlendir Değerleri
- - 1. 'k' => strtolower // küçültür
- - 2. 'b' => strtoupper // büyültür
- - 3. 'i' => ucfirst // ilk harf büyük

=====================

### Örnekler

``` html

- echo iyelikEkle('muntaza',false); // muntaza'nın
- echo iyelikEkle('muntaza','evi'); // muntaza'nın evi
- echo iyelikEkle('DENİZ',false,'k'); deniz'in

```

iyelik-eki
==========

PHP iyelik eki ekleme fonksiyonu

=====================
Örnek Kullanımlar
====
iyelikEkle($kelime,$soneEkle='',$bicimlendir=false)
- $kelime => iyelik eklenecek kelime
- $sonaEkle => kelimenin sonuna istede bağlı birşeyler ekleme
- $bicimlendir => kelimeyi istede bağlı biçimlendirme
--     'k' => strtolower // küçültür
--     'b' => strtoupper // büyültür
--     'i' => ucfirst // ilk harf büyük


- echo iyelikEkle('muntaza',false); // muntaza'nın
- echo iyelikEkle('muntaza','evi'); // muntaza'nın evi
- echo iyelikEkle('DENİZ',false,'k'); deniz'in

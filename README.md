## Genel Bakış
Genellikle yeni bir php projesine başlıyacağım zaman biraz vakit kaybederim, url yapısının hazırlanması ve temel kod yapısının oturması vb. açıkcası 
biraz zaman kaybettiriyor, Peki neden bir freamwork kulanmıyorum (laravel, symfony), genellikle bir freamwork kullanma amacı büyük projelerde küçük işlerle vakit
kaybetmemek adına kullanılan sistemdir, peki ya küçük sistemler için (blog, portoy) gibi sayfalar için bir freamwork mü? kuralım, tabiki hayır. Bu projemde benim 
bir yeni php projesine başlarken kurduğum sistemin bir benzerini sizlerle paylaşıyorum. İyi çalışmalar.

## Kurulum
- ``composer create-project sahvezir/base [project-name]`` komutunu istemcinizde çalıştırdığınız anda indirilen projeyi apache web sunucunuzun klasörüne kopyalayınız 
- klasör dizininizde terminali açınız
- Açılan terminalde ``php -S localhost:8000 -t .`` komutu ile projenizi ayağa kaldırabilrsiniz
- ``http://localhost:8000/`` linkinden yararlanarak projenizi tarayıcınızda açabilirsiniz

## Dökümantasyon
* ### Router
Bir web uygulamasında rotasyon işlemi uygulamanızın yapı taşıdır. Base bu işlemi temelden alır eğer önemli uygulamalar geliştiriyor iseniz daha güçlü bir freamwork öneririz



![alt text](/app/views/images/docs/app_web.php.png)
Yukarıda belirtilen rotasyon işlemi v1 dir. Base için ele alınmış basit bir router sistemidir. Evet üzgünüm dinamik bir rota yapısı değil, Henüz.
Aslında web.php geriye bir array döndürüyor, döndürülen array içerisinde ilk değerimiz bizim endpointimiz, ilk endpointin içerisinde olan iki değer ise bizim controller ve methodumuz.

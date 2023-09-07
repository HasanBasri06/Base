## Genel Bakış
Genellikle yeni bir php projesine başlıyacağım zaman biraz vakit kaybederim, url yapısının hazırlanması ve temel kod yapısının oturması vb. şeyler, açıkcası 
biraz zaman kaybettiriyor, Peki neden bir freamwork kulanmıyorum (laravel, symfony). Genellikle bir freamwork kullanma amacı büyük projelerde küçük işlerle vakit
kaybetmemek adına kullanılan sistemdir, peki ya küçük sistemler için (blog, portoy) gibi sayfalar için bir freamwork mü? kuralım, tabiki hayır. Bu projemde benim 
bir yeni php projesine başlarken kurduğum sistemin bir benzerini sizlerle paylaşıyorum. İyi çalışmalar.

## Kurulum
- ``composer create-project sahvezir/base [project-name]`` komutunu istemcinizde çalıştırdığınız anda indirilen projeyi apache web sunucunuzun klasörüne kopyalayınız 
- klasör dizininizde terminali açınız
- Açılan terminalde ``php -S localhost:8000 -t .`` komutu ile projenizi ayağa kaldırabilirsiniz
- ``http://localhost:8000/`` linkinden yararlanarak projenizi tarayıcınızda açabilirsiniz

## Dökümantasyon
### Genel Bakış
Bu freamwork benim pure php yazarken zaman kaybettiren kısmıları kısaltarak ve üstüne koyarak yeni başlanılacak olan php uygulamasını daha keyifli hale getirilmek için yapıldı. Tabi en iyisi değil 😥. Başlangıç olarak aslında herşey routerdan dallanıyor. routera gelen istek eğer get parametresindeki ```$_GET["path"]``` ile uyuşuyorsa size bir controller gösteriyor, artık iş sizin bu controllerda ne yapmak istediğinize kalıyor, Bütün bu işlemleri app/Kernel sayfasında görebilirsiniz.  
 
* ### Router
Bir web uygulamasında rotasyon işlemi uygulamanızın yapı taşıdır. Base bu işlemi temelden alır eğer önemli uygulamalar geliştiriyor iseniz daha güçlü bir freamwork öneririz.



![alt text](/app/views/images/docs/app_web.php.png)
Yukarıda belirtilen rotasyon işlemi v1 dir. Base için ele alınmış basit bir router sistemidir. Evet üzgünüm dinamik bir rota yapısı değil, Henüz.
Aslında web.php geriye bir array döndürüyor, döndürülen array içerisinde ilk değerimiz bizim endpointimiz, ilk endpointin içerisinde olan iki değer ise bizim controller ve methodumuz.

Eğer yazmış olduğunuz tüm routerları gözden geçirmek isterseniz.
```php basri route:list```
komutu ile erişebilirsiniz 

### Controller
Projenizin birçok işi üstlendiği ve ekranda gösterilecek olan verilerimizin işlendiği katmandır


![alt text](/app/views/images/docs/controller1.png)
Yukarıda görmüş olduğunuz bir controller dir, aslında bu basit bir controllerdir. namespace adlandırıması PSR-4 den alınmadır.

### View
View katmanı controller da işlenmiş veriyi ekranda güzel bir görüntüyle göstermeye yarar.

```Controller::view("app", ["classes" => $methodName[2]]);```
controllerda yazılmış olan bu methodumuzla controller verimizi view katmanına göndermiş bulunuyoruz.

### Models
Model katmanı projemizde var olan entity'lerin veritabanına karşılık gelen katmandır. Genel CRUD işlemlerimizi bu katmana yapıyoruz

### Veri Alma

Veritabanı işlemlerini güvenlik amacıyla Base .env dosyasında tutar, veritabanı işlemlerini .env dosyasından değiştirmeyi unutmayın 😊.

Controllerda yazıcağınız service işleminde eğer veritabanında bir veri almak gerekiyorsa bu işlemi sizin için basitleştirdik 

![alt text](/app/views/images/docs/db1.png)

Yukarda görmüş olduğunuz işlem ORM ile yapılıyor. Bu işlem sayesinde veritabanındaki ```table('example')``` ile belirtilen tablodaki bütün veriyi getirir.

- Where komutu

Eğer tüm veriyi çağırmak istemiyor iseniz where komutunu kullanabilrsiniz

![alt text](/app/views/images/docs/db2.png)

- Order By

Eğer gelen veriyi bir sıraya sokmak istiyor iseniz ordeyBy methodunu kullanabilirsiniz.

![alt text](/app/views/images/docs/db3.png)

- Limit

Eğer gelen veriyi limit koymak ister iseniz limit methodunu kullanabilirsiniz

![alt text](/app/views/images/docs/db4.png)

### Front-End 

Bu uygulamda front-end yazmak isteyen arkadaşlarımızıda yanlız bırakmıyoruz. Controllerdan göndermiş olduğunuz view sayfası sadece html ve css den oluşmasını istemiyor iseniz.
config/integrated.php sayfası sizin için hazır bekliyor.Base sizin için style dosyasını hazırda bekletiyor app/views/css/style.css dosyasından ulaşabilirsiniz.

Base şuanda sadece AngularJs, tailwindcss ve jquery kapsıyor.

Örnek olarak

![alt text](/app/views/images/docs/integrated1.png)

bu şekilde projenize tailwincss eklemiş oluyorsunuz

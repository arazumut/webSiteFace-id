Yüz ve Göz Algılama Projesi
Giriş


Bu proje, OpenCV kütüphanesi kullanarak gerçek zamanlı olarak bir video akışında yüz ve göz algılama işlemlerini gerçekleştirmeyi amaçlamaktadır. Video akışı sırasında yeni yüzler algılandığında, kullanıcıdan kimlik doğrulaması istenir. Daha önce algılanmış yüzler güvenilir olarak kabul edilir ve hoş geldiniz mesajı gösterilir.
Kullanılan Teknolojiler

    OpenCV: Görüntü işleme ve bilgisayarla görme uygulamaları için yaygın olarak kullanılan açık kaynaklı bir kütüphane.
    Haarcascade Algoritmaları: Yüz ve göz algılamak için kullanılan önceden eğitilmiş modeller.
    

Yöntem


    Modellerin Yüklenmesi:
    Proje başlangıcında, Haarcascade sınıflandırıcı dosyaları yüklenir. Bu dosyalar, yüz ve göz algılama işlemleri için kullanılır.

    Video Akışının Başlatılması:
    Bilgisayar kamerasından video akışı başlatılır ve her bir kare işlenir. Video akışındaki görüntüler, yüz ve gözlerin tespit edilmesi için gri tonlamalı görüntülere dönüştürülür.

    Yüz Algılama:
    Her bir karede, Haarcascade sınıflandırıcısı kullanılarak yüz algılama işlemi yapılır. Algılanan yüzler, daha önce algılanıp algılanmadığına göre değerlendirilir:
        Yeni Algılanan Yüzler: Yeni algılanan yüzler yeşil çerçeve ile işaretlenir ve kullanıcıdan kimlik doğrulaması istenir.
        Tanınan Yüzler: Daha önce algılanan ve tanınan yüzler sarı çerçeve ile işaretlenir ve kullanıcıya hoş geldiniz mesajı gösterilir.

    Göz Algılama:
    Yüzler algılandıktan sonra, yüz bölgesinde gözlerin algılanması için bir alt işlem yapılır. Gözler, mavi çerçeve ile işaretlenir.

    Sonuçların Görüntülenmesi:
    İşlenen her bir kare, gerçek zamanlı olarak ekranda görüntülenir. Kullanıcı, 'q' tuşuna basarak video akışını sonlandırabilir.

Sonuç

Bu proje, OpenCV ve Haarcascade algoritmalarını kullanarak gerçek zamanlı yüz ve göz algılamanın nasıl gerçekleştirileceğini göstermektedir. Video akışındaki yüzler, yeni algılanan veya tanınan yüzler olarak sınıflandırılır ve kullanıcıya uygun mesajlar gösterilir. Bu yöntem, güvenlik sistemleri, kullanıcı tanıma uygulamaları ve interaktif sistemler için temel bir yapı sunar.
Gelecek Çalışmalar

Gelecekte, yüz tanıma algoritmalarının doğruluğunu artırmak için derin öğrenme tabanlı yöntemler kullanılabilir. Ayrıca, daha karmaşık kimlik doğrulama sistemleri ve kullanıcı izleme mekanizmaları entegre edilebilir. Bu sayede, uygulamanın güvenliği ve kullanıcı deneyimi geliştirilebilir.
Not : Yüzünüzün algılandığından emin olduktan sonra kameranızı kapatmak için q tuşuna basınız.

![Ekran görüntüsü 2024-03-30 184210](https://github.com/arazumut/webSiteFace-id/assets/150933483/ab7f3a41-0bf7-41ac-8fd3-961837f40d03)
![Ekran görüntüsü 2024-03-30 183319](https://github.com/arazumut/webSiteFace-id/assets/150933483/e94440a2-ee43-4d20-8cf3-a75341e65912)

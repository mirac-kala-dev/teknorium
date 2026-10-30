# Teknorium Bilişim – Kurumsal Web Sitesi

Teknorium Bilişim için geliştirilen bu proje, firmanın ürün ve hizmetlerini tanıtan çok sayfalı bir kurumsal web sitesidir. Ziyaretçiler cihaz ve yazılım çözümlerini inceleyebilir, firma hakkında bilgi alabilir ve iletişim formu üzerinden mesaj gönderebilir.

**Proje türü:** Web geliştirme / staj çalışması  
**Geliştirici:** Miraç Kala

## Proje Hakkında

Web sitesi; güvenlik ve geçiş kontrol sistemleri, kamera çözümleri, network altyapısı ve web yazılımı gibi hizmetlerin tanıtımına yönelik sayfalardan oluşur.

Ana sayfada öne çıkan hizmetler kartlar hâlinde sunulur. Üst menü üzerinden cihaz kategorilerine, yazılımlara, destek, hakkımızda ve iletişim sayfalarına geçiş yapılabilir.

## Özellikler

- Kurumsal ana sayfa ve hizmet tanıtım alanları
- Kamera, parmak izi, yüz tanıma ve kartlı geçiş sistemi sayfaları
- Network altyapısı ve web yazılımı tanıtım sayfaları
- Yazılım, destek ve firma hakkında bilgilendirme sayfaları
- Telefon, e-posta ve WhatsApp bağlantıları
- Google Maps harita yerleştirmesi
- İletişim formu
- PHP ile form verilerinin MySQL veritabanına kaydedilmesi
- CSS ile sayfa ve bileşen tasarımları

## Kullanılan Teknolojiler

- **HTML5** – Sayfa yapısı ve içerik
- **CSS3** – Görsel tasarım ve sayfa düzenleri
- **PHP** – İletişim formu işlemleri
- **MySQL** – İletişim formu verilerinin saklanması
- **Font Awesome** – Arayüz ikonları
- **Google Fonts** – Yazı tipleri
- **Google Maps Embed** – Harita gösterimi

## Proje Yapısı

```text
teknorium/
├── css/
├── images/
├── php/
│   ├── baglanti.php
│   └── iletisim.php
├── index.html
├── cihazlar.html
├── kamera.html
├── parmakizi.html
├── yüztanıma.html
├── kartlıgecis.html
├── network.html
├── website.html
├── yazılımlar.html
├── destek.html
├── hakkımızda.html
└── iletisim.html
```

## Yerel Ortamda Çalıştırma

PHP ve MySQL kullanan iletişim formunu çalıştırmak için XAMPP kullanılabilir.

1. XAMPP'i kurup Apache ve MySQL servislerini başlatın.
2. Proje klasörünü XAMPP'in `htdocs` dizinine kopyalayın.
3. phpMyAdmin üzerinden `teknorium` adında bir veritabanı oluşturun.
4. İletişim formunun kullandığı tabloyu oluşturun.
5. Gerekirse `php/baglanti.php` dosyasındaki bağlantı bilgilerini kendi ortamınıza göre düzenleyin.
6. Tarayıcıdan `http://localhost/teknorium/` adresini açın.

### Örnek veritabanı tablosu

```sql
CREATE TABLE iletisim_formu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    konu VARCHAR(255) NOT NULL,
    ad VARCHAR(150) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefon VARCHAR(30),
    firma VARCHAR(150),
    mesaj TEXT NOT NULL
);
```

## Önemli Notlar

- Veritabanı bağlantısı `php/baglanti.php` dosyasında tanımlanmıştır.
- Depodaki örnek bağlantı ayarları yerel XAMPP ortamı içindir.
- İletişim formunun çalışması için `iletisim_formu` tablosunun oluşturulması gerekir.
- Canlı ortamda kullanılmadan önce veritabanı bağlantı bilgileri ve form güvenliği gözden geçirilmelidir.

## Geliştirici

**Miraç Kala**  
GitHub: [@mirac-kala-dev](https://github.com/mirac-kala-dev)

---

Bu proje, kurumsal web sitesi geliştirme ve PHP-MySQL ile temel form/veritabanı işlemlerini uygulama çalışmalarını içerir.

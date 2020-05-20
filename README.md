# CEC (Cendekia Entrepeneurship Club) Stock Management
SMP Cendekia Baznas mempunyai salah satu kegiatan ekstrakulikuler yaitu CEC (Cendekia Entrepreneur Club) yang bergerak dalam bidang kewirausahaan di sekolah tersebut. 
CEC sendiri bertujuan untuk melatih dan mengembangkan kemampuan anak-anak di bidang kewirausahaan itu sendiri melalui media yang salah satunya adalah kantin sekolah.
CEC dibuka setiap hari sabtu dan minggu dengan anggota berjumlah 14 orang beserta 1 orang pembina yang akan bergantian menjaga kantin milik CEC.

# Ruang Lingkup Pengembangan
Stock Management System merupakan sistem yang dibangun untuk membantu anggota CEC dalam melakukan proses penyimpanan, pengendalian stock produk, serta pembukuan. Pada sistem ini, tidak menyediakan fitur untuk cek saldo dari masing-masing siswa.
Secara garis besar, sistem ini (pembina maupun anggota CEC), dapat melakukan hal-hal sebagai berikut :
- Manajemen produk (kategori dan produk)
- Melakukan transaksi

Sedangkan untuk pembina sendiri akan mengambil role sebagai admin pada sistem yang dapat melakukan beberapa task khusus seperti :
- Manajemen user
- Manajemen order
- Mencetak report sesuai kebutuhan


# Diagram
### Use Case
![Use Case](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/usecaseCEC.png)

### Activity Diagram
![Activity Diagram](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/ActivityDiagram.png)

### Class Diagram
![Class Diagram](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Copy%20of%20classdiagramSM.png)

# Fitur Umum
Pada CEC Stock Management System ini terdapat beberapa fitur umum yang dapat digunakan baik oleh pembina maupun anggota dari CEC sendiri. Berikut adalah beberapa dari fitur tersebut
### Manajemen Kategori
Fitur ini dapat digunakan oleh pembina (admin) dan siswa sebagai pengurus CEC untuk menambahkan "kategori" dari produk-produk yang akan dijual di kantin CEC
![Manajemen Kategori](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Kategori.png)

### Manajemen Produk
Fitur ini dapat digunakan oleh pembina (admin) dan siswa sebagai pengurus CEC untuk melihat daftar produk yang dijual, mengedit, menambahkan produk-produk yang akan dijual di kantin CEC dengan identitas produk seperti kode produk, nama produk, deskripsi, stok harga, kategori, dan foto produk, serta menghapus record
![Manajemen Produk](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Produk.png)

### Transaksi
Fitur ini dapat digunakan oleh pembina (admin) dan siswa sebagai pengurus CEC untuk merekam pencatatan produk yang keluar atau dibeli di kantin CEC. Melalui fitur ini juga, akan diperoleh informasi mengenai jumlah pendapatan
![Transaksi](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Transaksi.png)

### Manajemen Order
Fitur ini hanya dapat digunakan oleh pembina (admin). Pada laman ini terdapat informasi mengenai jumlah item yang terjual, total omset, total pelanngan, dan total keuntungan. Kemudian, admin dapat melihat history dari data transaksi yang telah dilakukan. Admin juga dapat mencetak report yang dilengkapi dengan fitur filter data transaksi berdasarkan tanggal mulai dan tanggal akhir, identitas pelanggan, maupun identitas yang menjaga kasir
![Mmanajemen Order](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Order.png)

### Manajemen Role
Fitur ini hanya dapat digunakan oleh pembina (admin). Fitur ini memungkinkan admin untuk melihat daftar, menambahkan, dan menghapus role (peran) dari setiap pengurus CEC.
![Manajemen Role](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Role.png)

### Role Permission
Fitur ini hanya dapat digunakan oleh pembina (admin). Setelah menentukan role (peran) apa saja yang terdapat pada CEC, admin dapat mengatur task atau fitur apa saja yang dapat sebuah role kerjakan pada sistem
![Role Permission](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Permission.png)

### Manajemen User
Fitur ini hanya dapat digunakan oleh pembina (admin). Pada fitur ini, admin dapat menambahkan, mengedit, dan menghapus user yang mengakses sistem dengan beberapa identitas seperti Nama, Email, Role, dan Status.
![Manajemen User](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/Screenshot%20Pages/Users.png)

# Konsep OOP yang digunakan
Konsep OOP yang digunakan Sistem CEC Stock Management ini yaitu:
### Objek
Objek adalah entitas runtime dasar yang dapat diidentifikasi dalam OOP.
### Class
Kelas adalah struktur pembuatan tipe data yang ditentukan pengguna yang menampung seluruh kumpulan data suatu objek.
### Encapsulation
Encapsulation merupakan teknik untuk menjaga suatu proses program agar tidak dapat diakses secara sembarangan atau di intervensi oleh program lain.
### Inheritance
Inheritance atau Pewarisan/Penurunan adalah konsep pemrograman dimana sebuah class dapat menurunkan atribut dan method yang dimilikinya kepada class lain. Konsep inheritance digunakan untuk memanfaatkan fitur code reuse untuk menghindari duplikasi kode program.  
### Polymorphism
Polimorfisme adalah kemampuan suatu obyek untuk mempunyai lebih dari satu bentuk


# Design Pattern
![Design Pattern](https://github.com/fadiarmdhn/PSBO_CEC_inventory/blob/master/Diagrams/StockManagement.png)

Design pattern yang digunakan pada sistem CEC Stock Management yaitu **MVC (Model View Controller)**. MVC merupakan sebuah konsep untuk mempermudah proses penyatuan antara back-end dan front-end. Cara kerja MVC yaitu dengan memecah sebuah aplikasi menjadi tiga bagian, yaitu yang berhubungan dengan basis data (model), Tampilan design/user interface (view), dan yang mengatur alur jalannya aplikasi/alur logika program (controller). Framework yang digunakan kelompok kami yaitu Laravel, yang menerapkan proses MVC. MVC dapat membantu pekerjaan kami dapat dipermudah. Desain ini digunakan untuk membedakan penyajian data dari cara data diterima dari pengguna ke data yang ditampilkan. 

Pola desain MVC membantu dalam penggunaan kembali kode dan pengembangan paralel. Ini membuat bekerja lebih mudah dan sederhana. Komponen yang dibuat melalui pola desain MVC bersifat independen satu sama lain. Fitur ini membantu kami untuk menggunakan kembali komponen dan kode dengan mudah dan cepat di beberapa aplikasi lainnya. Karena data dimonitor oleh view dan diatur sedemikian rupa untuk disajikan kepada pengguna, kami dapat menggunakan tampilan serupa dengan data berbeda untuk aplikasi yang berbeda. Ini menghemat banyak waktu dan upaya dalam pengembangan. 

Ada beberapa komponen yang ada pada Laravel untuk mendukung konsep MVC pada sistem CEC Stock Management.

### Router
Router merupakan bagian pemetaan/mapping antara url dengan controller. Fungsi tersebut dituliskan dalam file yang berada folder routes yang bernama web.php. Ada 2 route file yang tersedia di laravel yaitu web.php dan api.php. Semua route web terdaftar dalam file web.php dan route terkait API akan terdaftar di api.php.
Contoh dalam projek kami: Route untuk Manajemen Kategori, Manajemen Produk, Transaksi, dan Laporan.

### Controller
Controller berisi method-method yang berisi perintah yang harus dilakukan pada suatu method. Setelah Route menghubungkan ke controller dan method mana yang akan dituju, method suatu controller akan mengembalikan nilai atau tujuan url yang akan dituju. Pada laravel, direktori controller berada di **app>Http>Controller**.
Contoh dalam projek kami: CategoryController, ProductController, OrderController, dan UserController

### View
View merupakan file berisi kode yang akan menampilkan desain dari web kamu. Pada laravel, file view berada pada direktori resources>views. Format dari nama file view adalah **[namaview].blade.php**.
Contoh dalam projek kami: category.index, category.add, product.index, product.add dan order.add

### Model
Model merupakan salah satu komponen MVC yang berhubungan langsung dengan database. Di database sendiri model dipresentasikan tabel-tabel yang nantinya diisi dengan data. Model berisi atribut yang nantinya atribut tersebut menjadi kolom pada tabel database. Semua model disimpan di direktori aplikasi. 
Contoh dalam projek kami: Kategori, Produk, Order, dan User

# Developer dan Jobdesk
Developer | Jobdesk
------------ | -------------
Muhammad Guntur | Backend
Fadia Ramadhana | Frontend
Meia Noer Muslimah | Frontend, Project Manager
Bella Anggita Safitri | Frontend
Fajar Yuda Apriliano | Backend
Muhammad Alfin Khalidi | Backend

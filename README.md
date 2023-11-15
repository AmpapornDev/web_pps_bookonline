<b>###### Website Backoffice ######</b><br/>
<b>###### Language : PHP , Database : MySql ######</b><br/><br/>
<b>Database :</b><br/>
<br/>
1.tb_admin : ไว้สำหรับเก็บรายละเอียด Admin เสำหรับเข้าใช้งาน Backoffice<br/>
CREATE TABLE `tb_admin` (<br/>
  `id_admin` int(10) NOT NULL,<br/>
  `name_admin` varchar(300) NOT NULL,<br/>
  `lastname_admin` varchar(300) NOT NULL,<br/>
  `email_admin` varchar(300) NOT NULL,<br/>
  `password_admin` varchar(100) NOT NULL,<br/>
  `date_add` datetime NOT NULL<br/>
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
<br/><br/>

2.tb_book : ไว้สำหรับเก็บรายละเอียดหนังสือ<br/>
CREATE TABLE `tb_book` (<br/>
  `id_book` int(10) NOT NULL,<br/>
  `id_book_cate` int(10) NOT NULL,<br/>
  `namebook_book` varchar(250) NOT NULL,<br/>
  `isbn_book` varchar(17) NOT NULL,<br/>
  `author_book` varchar(250) NOT NULL,<br/>
  `price_book` int(7) NOT NULL,<br/>
  `image_book` text DEFAULT NULL,<br/>
  `detail_book` text NOT NULL,<br/>
  `date_time` datetime NOT NULL<br/>
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
<br/><br/>

3.tb_book_category : ไว้สำหรับเก็บรายชื่อหมวด<br/>
CREATE TABLE `tb_book_category` (<br/>
  `id_book_cate` int(10) NOT NULL,<br/>
  `name_book_cate` varchar(350) NOT NULL,<br/>
  `id_user` int(10) NOT NULL,<br/>
  `add_date` datetime NOT NULL,<br/>
  `edit_date` datetime NOT NULL<br/>
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
<br/><br/>

4.tb_cart_order : ไว้สำหรับเก็บรายละเอียดตะกร้าสินค้าแต่ละ Member<br/>
CREATE TABLE `tb_cart_order` (<br/>
  `id_cart_order` int(10) NOT NULL,<br/>
  `id_payment` int(10) NOT NULL,<br/>
  `id_member` int(10) NOT NULL,<br/>
  `id_book` int(10) NOT NULL,<br/>
  `name_book` varchar(350) NOT NULL,<br/>
  `price_book` decimal(10,0) NOT NULL,<br/>
  `qty_book` int(3) NOT NULL,<br/>
  `add_cart_order` datetime NOT NULL,<br/>
  `update_cart_order` datetime NOT NULL<br/>
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
<br/><br/>
5.tb_acc_bank : ไว้สำหรับเก็บรายละเอียดบัญชีของร้านค้า<br/>
CREATE TABLE `tb_acc_bank` (<br/>
  `id_acc_bank` int(10) NOT NULL,<br/>
  `name_acc_bank` varchar(300) NOT NULL,<br/>
  `name_bank` varchar(300) NOT NULL,<br/>
  `id_admin` int(10) NOT NULL,<br/>
  `update_datetime` datetime NOT NULL<br/>
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
<br/><br/>
<h3>********* สำคัญ ให้ใช้จาก database ที่ให้ไป tb_member ***********</h3>
6.tb_member : เก็บรายละเอียดข้อมูลลูกค้าที่สมัครเป็นสมาชิก<br/>
CREATE TABLE `tb_member` (<br/>
  `id_member` int(10) NOT NULL,<br/>
  `name_member` varchar(300) NOT NULL,<br/>
  `lastname_member` varchar(300) NOT NULL,<br/>
  `email_member` varchar(300) NOT NULL,<br/>
  `password_member` varchar(32) NOT NULL,<br/>
  `image_member` varchar(100) NOT NULL,<br/>
  `mobile_member` varchar(15) NOT NULL,<br/>
  `address_member` text NOT NULL,<br/>
  `province_member` varchar(100) NOT NULL,<br/>
  `amphur_member` varchar(100) NOT NULL,<br/>
  `district_member` varchar(100) NOT NULL,<br/>
  `postcode_member` int(5) NOT NULL,<br/>
  `add_datetime` datetime NOT NULL,<br/>
  `update_datetime` datetime NOT NULL<br/>
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;<br/>
<br/><br/>

7.tb_payment : เก็บรายละเอียดการสั่งซื้อสินค้าของลูกค้าแต่ละคน<br/>
CREATE TABLE `tb_payment` (<br/>
  `id_payment` int(10) NOT NULL,<br/>
  `id_bank` int(10) NOT NULL,<br/>
  `id_member` int(10) NOT NULL,<br/>
  `order_no_payment` varchar(20) NOT NULL,<br/>
  `total_price_payment` int(5) NOT NULL,<br/>
  `total_qty_payment` int(5) NOT NULL,<br/>
  `total_delivery_payment` int(5) NOT NULL,<br/>
  `total_amount` int(5) NOT NULL,<br/>
  `create_datetime` datetime NOT NULL,<br/>
  `update_datetime` datetime NOT NULL<br/>
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


<b>###### Folder Structure ######</b><br/><br/>
<b>- lib : เก็บไฟล์ที่ใช้ในการ include to website</b><br/>
----> check_login.php : ไว้สำหรับเช็คว่า Admin ได้ login มั้ยถ้าไม่จะบังคับให้ login<br/>
----> conect_database.php : connect database<br/>
----> function.php : ไว้สำหรับเก็บฟังก์ชั่นต่างๆที่ใช้ในเว็บไซต์<br/><br/>

<b>- view : เก็บไฟล์ Html หน้าเว็บไซต์</b><br/>
----> admin_login ****(Admin 1 Person)**** : หน้า Login / หน้า Edit profile admin<br/>
----> home : list / add / edit / delete รายการหนังสือ<br/>
----> category : list / add / edit / delete หมวดหนังสือ<br/>
----> order : index / detail รายการสั่งซื้อ<br/>
----> header.php : header in website<br/>
----> footer.php : footer in website<br/>
----> nav_menu.php : menu in website<br/><br/>

<b>- controller : เก็บ code เว็บไซต์</b><br/>
----> admin_login : Controller สำหรับจัดการเรื่อง Admin login<br/>
----> home : Controller สำหรับจัดการเรื่อง รายละเอียด ต่างๆของหนังสือ<br/>
----> category : Controlleสำหรับจัดการหมวดหนังสือ<br/><br/>
----> order : Controller สำหรับจัดการรายการสั่งซื้อของลูกค้า<br/><br/>

<b>- assets : เก็บไฟล์ต่างๆที่ใช้ในเว็บไซต์ เช่น template, image ...</b><br/>
----> js : เก็บไฟล์ javascript<br/>
----> css : เก็บไฟล์ css <br/>
----> bootstrap : เก็บไฟล์ bootstrap ที่เอามาใช้ในเว็บไซต์ ส่วนของ template<br/>
----> image : เก็บไฟล์รูปทั้งหมดที่ใช้ในเว็บไซต์<br/><br/>






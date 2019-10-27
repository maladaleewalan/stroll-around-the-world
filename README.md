# stroll-around-the-world
- การติดตั้งระบบ
    - git clone https://github.com/maladaleewalan/stroll-around-the-world.git
    - เข้าไปในไฟล์ : cd stroll-around-the-world
    - ใน .env ตั้ง DB_DATABASE, DB_USERNAME, DB_PASSWORD
    ```
    DB_DATABASE=strollaroundtheworld
    DB_USERNAME=userstroll
    DB_PASSWORD=stroll123
    ```
    - composer install
    - คลิกขวาที่ laragon เลือก MySQL แล้วเลือก Start MySQL
    - คลิกปุ่ม Database กด open
    - สร้าง database คลิกขวาที่ปุ่ม Laragon เลือก Create new เลือก Database 
    - ตั้งชื่อว่า strollaroundtheworld เลือก collation เป็น utf8mb4_unicode_ui แล้วกด ok
    - ตั้งค่าสิทธิของ user กดตรง icon คน2คน, กด Add, ใส่ User name, Password
    ```
     User name: userstroll
     Password: stroll123
     Repeat password: stroll123
    ```
    - กด Add object แล้วเลือก database strollaroundtheworld กด OK
    - คลิกตรงช่อง Database: test กด Save ตามด้วย Close
    - ใน terminal :  php artisan migrate
    - php artisan migrate:refresh --seed

- ข้อมูลที่เตรียมไว้ให้ สามารถ นำ email, password ไป login ได้เลย
    ```
    Admin คนที่ 1
    - E-Mail Address : gam3542@hotmail.com
    - password : gam3542
    ```
    
    ```
    Admin คนที่ 2
    - E-Mail Address : thanapass.p@hotmail.com
    - password : Immmmmmm
    ```

    ```
    User
    - E-Mail Address : userdemo@hotmail.com
    - password : userdemo
    ```
- มีรูปเตรียมไว้ให้เพิ่ม อยู่ในโฟลเดอร์ "picture test"
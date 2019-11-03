# stroll-around-the-world
- การติดตั้งระบบ
    - git clone https://github.com/maladaleewalan/stroll-around-the-world.git
    - เข้าไปในไฟล์ : cd stroll-around-the-world
    - composer install
    - สร้างไฟล์ .env ในไฟล์ .env copy จาก .env.example เปลี่ยนตรง APP_NAME, DB_DATABASE, DB_USERNAME, DB_PASSWORD
    ```
     APP_NAME="Stroll around the World"

     DB_DATABASE=strollaroundtheworld
     DB_USERNAME=userstroll
     DB_PASSWORD=stroll123
    ```
    (ตรง DB_DATABASE, DB_USERNAME, DB_PASSWORD สามารถเปลี่ยนได้ แต่ต้องตั้งให้ตรงกับที่ตั้งใน database ด้วย)
    - php artisan key:generate
    - คลิกขวาที่ laragon เลือก MySQL แล้วเลือก Start MySQL
    - คลิกปุ่ม Database กด open
    - สร้าง database คลิกขวาที่ปุ่ม Laragon เลือก Create new เลือก Database 
    - ตั้งชื่อว่า strollaroundtheworld เลือก collation เป็น utf8mb4_unicode_ci แล้วกด ok (หรือตั้งให้ตรงกับ DB_DATABASE ใน .env)
    - ตั้งค่าสิทธิของ user กดตรง icon คน2คน, กด Add, ใส่ User name, Password
    ```
     User name: userstroll
     Password: stroll123
     Repeat password: stroll123
    ```
    (หรือตั้งให้ตรงกับ DB_USERNAME, DB_PASSWORD ใน .env)
    - กด Add object แล้วเลือก database strollaroundtheworld กด OK
    - คลิกตรงช่อง Database: strollaroundtheworld กด Save ตามด้วย Close
    - ใน terminal : php artisan migrate
    - php artisan migrate:refresh --seed

- ข้อมูลที่เตรียมไว้ให้ สามารถ นำ email, password ไป login ได้เลย
    ```
    admin
    E-Mail Address : admin123@hotmail.com
    password : admin123
    ```
    มี user 2 ระดับ แต่ละระดับมีสิทธิการใช้งานต่างกัน 
    ```
    user ระดับ 2
    E-Mail Address : thanapass.p@hotmail.com
    password : Immmmmmm
    ```

    ```
    user ระดับ 1
    E-Mail Address : gam3542@hotmail.com
    password : gam3542
    ```
- มีรูปเตรียมไว้ให้เพิ่ม อยู่ในโฟลเดอร์ "picture test"
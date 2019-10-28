# stroll-around-the-world
- การติดตั้งระบบ
    - git clone https://github.com/maladaleewalan/stroll-around-the-world.git
    - เข้าไปในไฟล์ : cd stroll-around-the-world
    - สร้างไฟล์ .env
    ```
        APP_NAME="Stroll around the World"
        APP_ENV=local
        APP_KEY=base64:5k5ztF/cwBMFyEBi+o9O4ci3NwIE00evfop42u7OL/A=
        APP_DEBUG=true
        APP_URL=http://localhost

        LOG_CHANNEL=stack

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=strollaroundtheworld
        DB_USERNAME=userstroll
        DB_PASSWORD=stroll123

        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        QUEUE_CONNECTION=sync
        SESSION_DRIVER=file
        SESSION_LIFETIME=120

        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379

        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null

        AWS_ACCESS_KEY_ID=
        AWS_SECRET_ACCESS_KEY=
        AWS_DEFAULT_REGION=us-east-1
        AWS_BUCKET=

        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_APP_CLUSTER=mt1

        MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

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
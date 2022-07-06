## Tentang

ini adalah api data kota & kabupaten dari rajaongkir.com

## Install

- Clone aplikasi ini
    > https://github.com/fatkulumar/rajaongkir1.git
- Setting database di file .env
- Migrate database
    > php artisan migrate


## API
Gunakan aplikasi postman atau sejenis untuk mencoba aplikasi laravel tersebut
- Mendapatkan data kota berdasarkan ID  
    > http://127.0.0.1:8000/api/search/cities/{id}
- Mendapatkan data provinsi berdasarkan ID 
    > http://127.0.0.1:8000/api/search/provinces/{id}

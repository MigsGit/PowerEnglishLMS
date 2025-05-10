# Wise Education

## About the project
![](https://github.com/MigsGit/WiseEducation/blob/master/resources/content/wise_education_image.png)


## Built With

* [Laravel 10](https://laravel.com/docs/10.x/readme)
* [Linux v22](https://fridge.ubuntu.com/2023/08/11/ubuntu-22-04-3-lts-released/)
* [Docker v26.1.3](https://docs.docker.com/engine/install/ubuntu/)
* [Docker Compose v2.33.1](https://docs.docker.com/engine/install/ubuntu/)
* [Vue.js 3](https://vuejs.org/)
* [Pinia](https://pinia.vuejs.org/)
* [Bootstrap 5](https://startbootstrap.com/template/sb-admin)
* [SB Admin Template v.7](https://www.npmjs.com/package/startbootstrap-sb-admin/v/7.0.6)
* [DataTable](https://datatables.net/manual/vue)
* [Axios](https://github.com/axios/axios)
* [Font Awesome 5](https://fontawesome.com/)

## Installation

1. Clone the Project
2. Copy the .env.example then rename to .env
3. Follow the Laravel & Docker configuration below.

Laravel
```
composer update

npm update

php artisan key:generate

php artisan migrate --seed

npm run watch

```

Docker thru Makefile
```
make setup

```

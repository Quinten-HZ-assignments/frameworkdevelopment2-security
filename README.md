Link to application: http://young-cove-30705.herokuapp.com/
Instruction for the teacher on where to find the applied techniques

prevent snooping and session hijacking by:
- a session lifetime is 30 minutes maximum
- if you close the webpage the session is deleted automatically
- added this in the appserviceprovider.php 
![image](https://user-images.githubusercontent.com/70522000/121700490-3ec46a00-cad0-11eb-9178-a762317e48e8.png)
- added SESSION_SECURE_COOKIE = TRUE in Heroku config vars to set secure flag for cookies data when accessing content over HTTPS.: 
- heroku uses HTTPS by default

acces control that prevent IDOR with:

First of all added middleware that checks if the user is authenticated, if the user isn't it will redirect to the login page
![image](https://user-images.githubusercontent.com/70522000/121594403-53a3ed80-ca3d-11eb-9126-8a7008cfd35d.png)
![image](https://user-images.githubusercontent.com/70522000/121595046-2d328200-ca3e-11eb-8e8f-642b01839eec.png)

Besides authenticated users, you can also be an admin
So first I added the an admin colums to the users table
![image](https://user-images.githubusercontent.com/70522000/121595310-6ff45a00-ca3e-11eb-886c-b35a50ca1eaa.png)
![image](https://user-images.githubusercontent.com/70522000/121595654-c5c90200-ca3e-11eb-9fef-c87a18d493bc.png)

Then I defined a gate in the AuthServiceProvider.php called admin-acces which is true if the admin colums is true
![image](https://user-images.githubusercontent.com/70522000/121595482-9dd99e80-ca3e-11eb-925f-8796cff52cab.png)

Then in the AdminController I use authorize() to make sure it'll only show the admin index page if you are an admin
![image](https://user-images.githubusercontent.com/70522000/121596007-2f491080-ca3f-11eb-9113-f829e8393de7.png)

In the Dashboard blade I added an admin panel button to the navigation bar, but it only shows if you are an admin
login as admin account: hoeg0001@hz.nl;Admin12345!<br>
login as non-admin account: make one or hoeg0002@hz.nl;Admin12345!
![image](https://user-images.githubusercontent.com/70522000/121596401-ab435880-ca3f-11eb-9d7b-83254c50ed59.png)
vs
![image](https://user-images.githubusercontent.com/70522000/121596481-bd24fb80-ca3f-11eb-9ee9-749cfefbc852.png)

This is done in the Dashboard blade file like this:
![image](https://user-images.githubusercontent.com/70522000/121596596-eb0a4000-ca3f-11eb-9130-1aabec738a79.png)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

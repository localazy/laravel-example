## About Localazy's Example Project

The project and it's construction are detailed in our [article](https://localazy.com/blog/laravel-multilingual-i18n-php-localazy).
There are two versions of the project, the one hosted on GitHub was made to be compatible with PHPSandbox so we just changed the URL's in the `example.blade.php` file and the redirection in the `web.php` so the project's web page opens right away with PHPSandbox. The second version is made to work with Laravel's artisan server and is in detail in the link above.

You can try the project on PHPSandbox by clicking [here](https://phpsandbox.io/n/github-laravel-example-localazy-main).

### Running the project locally

To run the project locally, we have to download the project and change the following files:

- `web.php` located in `/routes`:

Delete the code
```
Route::get('/', function () {
    return redirect('/example/en');
});
```
and change it to
```
Route::get('/', function () {
    return view('welcome');
});
```

- `example.blade.php`located in `\resources\views`:

Just change the `href` URL's in 
```

<a href="/example/pt"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/255px-Flag_of_Portugal.svg.png" width="60" height="40" title="Portuguese Flag" ></a>
 <a href="/example/cs"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/1280px-Flag_of_the_Czech_Republic.svg.png" width="60" height="40" title="Czech Flag" ></a>
 <a href="/example/en"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="60" height="40" title="UK Flag" ></a>
 <a href="/example/es"><img src="https://www.countryflags.com/wp-content/uploads/spain-flag-png-large.png" width="60" height="40" title="Spanish Flag" ></a>

```
with 

```

 <a href="http://localhost:8000/example/pt"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/255px-Flag_of_Portugal.svg.png" width="60" height="40" title="Portuguese Flag" ></a>
 <a href="http://localhost:8000/example/cs"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/1280px-Flag_of_the_Czech_Republic.svg.png" width="60" height="40" title="Czech Flag" ></a>
 <a href="http://localhost:8000/example/en"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="60" height="40" title="UK Flag" ></a>
 <a href="http://localhost:8000/example/es"><img src="https://www.countryflags.com/wp-content/uploads/spain-flag-png-large.png" width="60" height="40" title="Spanish Flag" ></a>

```

Open your terminal in the root of the project and run `php artisan serve`.
When the server is running, go to `localhost:8000/example/en` and the project will run.

# laravel5-base
A laravel 5 scaffold for getting work done.

## Includes
* gulp for building js, scss and optimizing images.
* Livereload
* Jquery and Jquery UI
* Bootstrap
* Font Awesome
* Bower for dependency management
* Illuminate\View\ViewServiceProvider
* Illuminate\Html\HtmlServiceProvider
* Way\Generators\GeneratorsServiceProvider

## Getting Started
* git clone git@github.com:letsrtfm/laravel5-base.git
* cd into the created directory
* composer install
* bower install
* npm install
* gulp

## Configuration
* rm -rf .git
* git init
* find replace GitRepository in package.json with your git repo URL
* grep -rl 'AlienStream' ./ | xargs sed -i '' 's/AlienStream/Your Company Name/g'
* grep -rl 'Manager' ./ | xargs sed -i '' 's/Manager/Your Project Name/g'
* git remote add Your Git Repo
* git add -A
* git commit -m "Initial Commit"
* git push origin master
* change database engine in config/database and migrate if you are so inclined.


## Development
* php artisan serve just like always :D
* gulp watch
* use php artisan generate to create controllers, pivots, migrations or whatever else

## Notes
scss, js and images are all under resources, they will get auto built and concatinated so they should be included in all pages by default due to the layout.blade.php file

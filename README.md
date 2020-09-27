<h1 align="center">
  <br>
  <a href="http://mate-app.de">
      <img src="https://github.com/TobiasPrt/mate-app/blob/master/readmeicon.png" alt="mate" width="200">
  </a>
  <br>
  mate-app.de
  <br>
</h1>

<h4 align="center">Website for the official [mate app](https://mate-app.de).</h4>

<p align="center">
  <a href="https://codecov.io/gh/TobiasPrt/mate_website_">
    <img src="https://codecov.io/gh/TobiasPrt/mate_website/branch/master/graph/badge.svg" />
  </a>
  <a href="https://github.com/TobiasPrt/mate_website_/issues/">
    <img src="https://img.shields.io/github/issues/TobiasPrt/mate_website"
         alt="Issues">
  </a>
  <a href="https://github.com/TobiasPrt/mate_website_/graphs/contributors">
    <img src="https://img.shields.io/github/contributors/TobiasPrt/mate_website"
         alt="Contributors">
  </a>
  <a href="https://github.com/TobiasPrt/mate_website_/LICENSE.md">
    <img src="https://img.shields.io/badge/License-MIT-blue.svg"
         alt="License">
  </a>
  
  
</p>

<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#credits">Credits</a> •
  <a href="#license">License</a>
</p>

<!-- <h1 align="center">
    <a href="http://mate-app.de">
      <img src="https://tobiaspoertner.com/img/matepreview.jpg" alt="mate mockup" width="800">
  </a>
</h1> -->


## Key Features

* stellar landing page
* clean and high-quality design
* latest news about mate app
* contact form sends email to us
* imprint, about, privacy
* continuus integration and deployment via a github actions pipeline

## How To Use
To clone and run this application, you'll need [Git](https://git-scm.com) and [PHP](https://www.php.net/manual/en/install.php) installed on your computer. Then from your command line run:

```bash
# Clone this repository
$ git clone https://github.com/TobiasPrt/mate_website

# Go into the repository
$ cd mate_website

# Create bin directory for composer
$ mkdir bin

# Download, Verify, Install Composer
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php composer-setup.php --install-dir=bin --filename=composer
$ php -r "unlink('composer-setup.php');"

# Install dependencies with composer
$ bin/composer install

# Spin up local webserver
$ cd public && php -S localhost:8000
```

Open the page in your browser under [http://localhost:8000](http://localhost:8000).

## Credits

This website specifically uses the following open source packages:

- [PHPUnit](https://github.com/sebastianbergmann/phpunit)
- [PHPMailer](https://github.com/PHPMailer/PHPMailer)

## License

MIT

---

> [mate-app.de](https://mate-app.de) &nbsp;&middot;&nbsp;
> Instagram [@officialmateapp](https://www.instagram.com/officialmateapp/) &nbsp;&middot;&nbsp;
> Twitter [@officialmateapp](https://twitter.com/officialmateapp)

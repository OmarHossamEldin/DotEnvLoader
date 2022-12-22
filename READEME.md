# Dot Env Loader

## Install & Dependence

- php unit

## To run test

  ```text
  composer test
  ```

## Usage

```php
  $envLoader = new EnvLoader($this->path, $this->file);
  $data = $envLoader->get_data();
  // or
  $data = EnvLoader::load_data($this->path, $this->file);
````

## Directory structure

```tree
├───Samples
│   └───.env.example
├───src
│   ├───Exceptions
│   └───File
├───tests
│   └───Unit
```

### Tested Platform

- software

  ```text
  OS: Ubuntu - Windows 10
  ```

## License

> MIT

## Authors

- [Omar Hossam El-Din Kandil](https://www.linkedin.com/in/omar-hossameldin-kandil-74633a1bb/)

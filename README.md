# Laravel Calculator Application

A simple yet robust calculator application built with Laravel, featuring basic arithmetic operations with error handling and a clean user interface.

## Features

- Basic arithmetic operations
- Error handling
- User-friendly interface
- RESTful architecture

## Technical Stack

- PHP ^8.2
- Laravel ^12.0
- TailwindCSS ^4.0.0
- Vite ^6.0.11

## Installation

1. Clone the repository
```bash
git clone https://github.com/MeryemAkdim/laravel-calculator.git
```

2. Install PHP dependencies
```bash
composer install
```

3. Install Node.js dependencies
```bash
npm install
```

4. Copy the environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

## Development

Run the development server with these two commands in separate terminal windows:

```bash
# Terminal 1: Start Laravel server
php artisan serve
```

```bash
# Terminal 2: Start Vite development server
npm run dev
```

## Routes

- `GET /` - Home page
- `GET /calculator` - Calculator interface
- `POST /calculate` - Process calculation

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

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

## Technical Q&A

### 1. What is the role of queues and background processing in Laravel applications?
Queue in Laravel are a way to handle time-consuming tasks in the background so the app stays fast and responsive. Instead of making users wait for things like sending emails, processing payments, or updating reports, Laravel queues offload these tasks and run them separately. Laravel supports different queue drivers like Redis, Amazon SQS, and databases.

### 2. How would you configure and manage queues for processing time-consuming tasks?
First, I choose a queue driver—usually database for local development and Amazon SQS in production. Then, I create a job or event and dispatch it using dispatch() or Job::dispatch(). After that, I run php artisan queue:work to process the jobs. In production, I use Supervisor to keep queue workers running continuously.

### 3. What are the advantages of using queues compared to synchronous processing?
Using queues instead of synchronous processing has several benefits:
- Makes the app faster by moving time-consuming tasks to the background
- Keeps the main app responsive
- Prevents timeouts
- Better scalability with multiple workers processing jobs simultaneously
- Reduces load on the main app
- Automatic retry of failed tasks for improved reliability

### 4. Explain the execution lifecycle of a job class in Laravel context
In Laravel, when a job is dispatched, it is added to the queue. The queue worker (php artisan queue:work) processes the job by calling the handle() method, where the job's logic is executed.

The register() method in a service provider is used to bind services or classes into the container, and it runs once when the application starts. The boot() method is called after all services are registered and is used for tasks like setting up event listeners.

For job-related tasks, you can use the boot() method to listen for job events like failures, while register() is used to bind any necessary services for the job.

### 5. Best practices for processing large database records
The best way to process a large number of records using Eloquent is to use the chunk() method. This retrieves small batches of records at a time, making the process memory-efficient, faster, and preventing timeouts. Instead of loading all records into memory, it processes them in chunks, ensuring your app can handle large datasets without performance issues.

### 6. Most significant project experience
One of the most important projects I worked on was a sourcing platform that managed product importation and the entire business flow. My responsibility was to design and implement key backend features, focusing on optimizing database interactions and ensuring efficient data management. A major accomplishment was developing a robust system to handle large volumes of data, streamlining supplier and product management, and improving the overall user experience. I also worked on creating APIs to facilitate smooth integration with third-party systems, which played a crucial role in automating business processes and improving operational efficiency.

### 7. Experience with test automation
Yes, I work with test automation. I've been using PHPUnit for a while to write and execute tests, and I also have experience with Test-Driven Development.

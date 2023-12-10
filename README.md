# Livewire Datatable - Simple Datatable built with Livewire

## 1. About the Project

This is a demo project showcasing the power of Livewire for creating dynamic and interactive datatables.

### Key Features

- **Real-time updates:** The datatable updates in real-time when the underlying data changes, without requiring a page refresh.

- **Dynamic Searching:** Users can search through the datatable in real-time, with the table updating as they type their search query.

- **Sorting:** Users can sort the datatable by any column. Clicking on a column header will sort the table by that column.

- **Filtering:** Users can filter the datatable based on specific conditions, such as a user's role or status.

- **Pagination:** he datatable supports pagination. Users can choose how many rows they want to display per page.
  
## 2. Technologies Used

- **Laravel:** Laravel is a popular PHP framework that provides an elegant syntax and tools for building web applications.

- **Livewire:** Livewire is a full-stack framework for Laravel that simplifies building dynamic interfaces using the power of Laravel and the convenience of Livewire components.

- **Bootstrap:** A simple but powerful frontend toolkit providing already built components on the fly.

- **Alpine.js:** A lightweight javascript framework. Best paired with Livewire.

## 3. How to Set Up the Project

To set up the PostHub project, follow these steps:

1. **Clone the Repository:** Start by cloning the project repository from GitHub using the following command:

   ```shell
   https://github.com/irqd/livewire-datatable.git

2. **Navigate to the Project Directory:** Change your working directory to the project folder:

   ```shell
   cd datatable

3. **Install Dependencies:** Install Dependencies:

   ```shell
   composer install

4. **Copy the Environment File:** Make a copy of the example environment file and configure it with your database settings:

   ```shell
   cp .env.example .env

5. **Generate Application Key:** Generate Application Key:

   ```shell
   php artisan key:generate

6. **Database Setup:** Create a new database for your project and update the database connection   information in your .env file.

7. **Run Database Migrations:** Migrate your database to create the required tables:

   ```shell
   php artisan migrate
   
8. **Seed the database:** Datables is nothing without the precious data:

   ```shell
   php artisan db:seed

9. **Start the Development Server:** Run the development server to verify everything is working:

   ```shell
   php artisan serve

10. **Visit the Application:** Visit the application at http://localhost:8000

## Sample table:
![project](https://github.com/irqd/livewire-datatable/assets/61367853/5ce87731-8d98-4915-9c46-352ed07b288d)

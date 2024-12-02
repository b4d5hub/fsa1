# Expense Management Application

An efficient and user-friendly expense management system built using CodeIgniter. The application helps users manage their finances by tracking income and expenses, setting budgets, and viewing insightful analytics.

## Features

- **User Authentication**: Secure signup and login functionality.
- **Dashboard**: Overview of income, expenses, and key financial analytics.
- **Manage Budgets**: Set and track your monthly budget for better financial planning.
- **Expense Categories**: Organize expenses into various categories for clearer insights.
- **Track Expenses**: Add, view, and manage your expenses easily.
- **Analytics**: Visual representation of income and expenses trends.
- **Profile Management**: Edit and update user profile information.

## Installation

Follow these steps to set up the project on your local environment:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/b4d5hub/fsa1.git
   ```
2. **Navigate to Project Directory**:
   ```bash
   cd fsa1
   ```
3. **Set Up Database**:
   - Create a database and import the provided `.sql` file.
4. **Configure Environment**:
   - Copy `env` to `.env` and update the database credentials:
     ```plaintext
     database.default.hostname = localhost
     database.default.database = your_database_name
     database.default.username = your_username
     database.default.password = your_password
     ```
5. **Install Dependencies**:
   - Run `composer install` to install the necessary packages.
6. **Install Demo** (optional):
   - Run `php spark db:seed DatabaseSeeder` to generate demo data.
   ```plaintext
     Email: badreddine@ouajih.com
     Pass: 12345678
   ```
7. **Run the Project**:
   - Use XAMPP or another server setup to host the application.

## Usage

1. **Sign Up / Log In**:
   - Register a new account or log in using existing credentials.
2. **Dashboard**:
   - View a comprehensive summary of income and expenses.
3. **Manage Budget**:
   - Set a monthly budget and keep track of spending.
4. **Add Expenses**:
   - Record expenses and assign them to categories.
5. **Analytics**:
   - Analyze spending patterns and income trends with charts.
6. **Profile**:
   - Edit and update user details as needed.

## Technologies Used

- **Framework**: CodeIgniter
- **Languages**: PHP, HTML, CSS, JavaScript
- **Database**: MySQL
- **Additional Libraries**: Toastr for notifications, Chart.js for analytics charts

## Screenshots

_Add screenshots of your project interface to give users a preview._

## Contributing

Contributions are welcome! To contribute:

1. Fork the project.
2. Create your feature branch: `git checkout -b feature/YourFeature`.
3. Commit your changes: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/YourFeature`.
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact

For any inquiries or issues, please reach out:

- **Email**: badreddine@ouajih.com
- **GitHub**: [b4d5hub](https://github.com/b4d5hub)

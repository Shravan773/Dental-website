<h2 align="center">Danta Dentals - Dental Website</h2>

Danta Dentals is a fully responsive dental website, built to be compatible with all devices. It is developed using HTML, CSS, JavaScript, PHP, and SQL.

### Prerequisites

To run the website locally, ensure you have the following:

- XAMPP server
- Code Editor

**Setting up the database**

There are two databases used in the website:

1. `appointment_db`
2. `buy_db`

**Steps for creating the tables:**

1. Start the XAMPP server and enable Apache and MySQL.
2. Access PHPMyAdmin through the admin button of SQL.
3. Create two databases named as mentioned above.
4. For `appointment_db`, create a table named `appointment_form` with 6 columns:

   - id (Primary Key, Auto Increment)
   - first
   - second
   - email
   - number
   - date

5. For `buy_db`, create a table named `buy_form` with 13 columns:

   - id (Primary Key, Auto Increment)
   - name
   - email
   - address
   - city
   - state
   - code
   - plan
   - cardname
   - cardnumber
   - expmonth
   - expyear
   - cvv

### Running the Code

To run the website locally:

1. Save the website folder in the "htdocs" folder present in the XAMPP installation directory.
2. Open a browser and type the URL "localhost/foldername". <!-- Update foldername with the actual folder name where the website is saved -->

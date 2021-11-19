# COMP-6620-Final-Project
The final project for COMP 6620 User Interface Design and Evaluation.


## Tech stack

This project is written in PHP with MySQL. 

Setting up a development environment should be fairly simple:
- Clone the repo.
- Obtain "dbcreds.php" from the development team and place it into the web folder.
- Install PHP if needed. Any supported version should be OK.
- Install MySQL if needed, create the database "dgbrown_bjc", and restore it from the SQL file in the repo. *Alternatively you can use the prod database but that is bad practice.* 
- In the web folder, run ```php -S localhost:8000```
- Navigate to localhost:8000 in your browser and test the app.
- Make your contributions and push the code back to the repo.

Code will manually be pushed to the [production site](http://bjc.designbeforetime.com/) as needed.

If you need access to the production database:
- Download phpMyAdmin (I tested v5.1.1) and unzip it somewhere
- Obtain "config.inc.php" from the development team and place it into the main phpMyAdmin folder.
  - Alternatively, make your own using the credentials from the "dbcreds.php" file described above.
- In the main folder, run ```php -S localhost:9876``` (or use some other port number)
- Navigate to localhost:9876 in your browser. You should how have access to the production database. Don't break it.


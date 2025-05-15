# CRUD_PHP_XML_

A simple PHP-based CRUD (Create, Read, Update, Delete) application using XML files as the data storage mechanism. This project is styled with Bootstrap for a clean and responsive user interface.

## 🌟 Features

- Add new users with unique ID validation  
- Edit existing user details  
- Delete users from the XML file  
- Search users by first name, last name, or address  
- Modal-based forms using Bootstrap  
- Background styling with image support  
- Fully client-side (no database required)  

## 🗂 Project Structure

CRUD_PHP_XML_/
├── add.php
├── add_modal.php
├── bootstrap/
│ └── css/bootstrap.css
├── delete.php
├── edit.php
├── edit_delete_modal.php
├── files/
│ └── members.xml
├── index.php
├── jquery.min.js
├── background1.jpg 


## 🛠️ Technologies Used

- PHP  
- XML  
- Bootstrap (CSS Framework)  
- jQuery (for modal handling)  
- HTML/CSS  

## 🚀 Getting Started

1. Clone the repository:

```bash
git clone https://github.com/abdellahayoujil/CRUD_PHP_XML_.git
```

Move the project folder to your XAMPP/htdocs directory:

bash
Copier
Modifier
mv CRUD_PHP_XML_ /path-to-xampp/htdocs/
Start Apache using XAMPP control panel.

Visit the application in your browser:

bash
Copier
Modifier
http://localhost/CRUD_PHP_XML_/index.php



📝 Usage
Click "ajouter" to add a new user.

Use the search bar to filter users.

Click "Modifier" to edit a user’s info.

Click "Supprimer" to delete a user.

All data is stored in files/members.xml.

📄 Sample XML Structure
xml
Copier
Modifier
<users>
    <user>
        <id>1</id>
        <firstname>John</firstname>
        <lastname>Doe</lastname>
        <address>New York</address>
    </user>
</users>



🧑‍💻 Developed by @abdellahayoujil

# BolloyWood Hub 
Welcome to Bollywood Hub, an engaging platform designed to manage and explore your favorite movies and songs. Bollywood Hub allows users to browse songs and the movies associated with them, enhancing your media experience with personalized ratings and recommendations. Administrators have full CRUD (Create, Read, Update, Delete) capabilities, enabling them to efficiently manage the content and keep the database up-to-date. Built with Laravel, Bollywood Hub offers a seamless interface for both users and admins to interact with a rich collection of media.  


## Technologies Used
PHP, Laravel, MySQL, BootStrap, HTML, CSS

## Features
- CRUD Operations: Manage  songs through Create, Read, Update, and Delete functions.
- CRUD Operations: Manage  movies with Create, Read, Update, and Delete functionalities.- 
- The CREATE method for songs associates each song with a movie using movie_id, which serves as the foreign key linking to the movies table.
- Authentication is handled via Breeze, providing registration and login capabilities.
- Authorization: Every user can log in to the system but only the admin can do the CRUD
- Admin Dashboard: A dedicated panel for administrative data management.
- Public Views: Includes login and registration pages, a welcome page showcasing all songs, and a page for viewing individual song and a movie by its ID .
- Admin Views: Features a dashboard, along with functionalities for managing  songs (create, edit, view, and list) and movies (create, edit, and list).

## Database Schema:

 ### Songs Table
 - songId- int
 - songName:varchar
 - singer:varchar
 - songGenre:varchar
 - userRating:varchar
 - movie_id:int
 - releaseDate:date
 - imagePath:varchar
 - videoId:varchar
### Movies Table: 
- id:int
- movieName: varchar
- year: varchar
- genre:varchar
- overview: varchar
- director:varchar
- cast: varchar
- imagepath: varchar

## Screenshots Of the application
![Screenshot 2024-08-18 125707](https://github.com/user-attachments/assets/5e5d2df2-1fbc-497e-aa19-0db231639f2e)


![Screenshot 2024-08-18 125823](https://github.com/user-attachments/assets/22b122d3-fde9-4938-9d49-388e5a5b612d)


![Screenshot 2024-08-18 125926](https://github.com/user-attachments/assets/87e126b9-c79a-46be-8d51-d35a563b6f31)


![Screenshot 2024-08-18 130011](https://github.com/user-attachments/assets/262c286d-cbb2-4157-8f88-dcfed1c7660a)


![Screenshot 2024-08-18 130055](https://github.com/user-attachments/assets/75796e52-4b6b-455e-b8ad-83b8da4e475e)


![Screenshot 2024-08-18 130111](https://github.com/user-attachments/assets/de144dcc-98c9-40f1-93fc-d8e43bbef9ca)

![Screenshot 2024-08-18 130122](https://github.com/user-attachments/assets/640a2d95-6569-4a3b-8b7f-a80499edaec9)

![Screenshot 2024-08-18 130137](https://github.com/user-attachments/assets/2483f6f9-7a7c-4b25-b568-360db3583514)



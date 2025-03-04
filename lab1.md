# Homework Lab: Building a Laravel CRUD Application

## Objective

In this lab, you will create a Laravel application that includes the following:
- A Model with an associated Migration
- A Factory to generate dummy data
- A View to display data
- A Controller and Route to fetch and render data from the database

---

## Tasks

### 1. Create the Model and Migration
- Generate a `Post` model with a migration.
- Define the table structure in the migration file.
- Run the migration to create the `posts` table.

### 2. Create a Factory for Dummy Data
- Generate a factory for the `Post` model.
- Define the structure for dummy data.
- Call Seeder to generate sample data.

### 3. Create a View to Render Data
- Create a Blade template for displaying posts.
- Use Blade syntax to loop through and display the posts.

### 4. Create a Controller and Route to Render Data
- Generate a `PostController`.
- Define an `index` method to fetch and pass posts to the view.
- Create a route that maps to the `index` method.



- Table Name : posts ( select * from posts) => Model Post   $posts =  Post::all();
mysql : create table posts;     Post -  migrations 
create table posts;
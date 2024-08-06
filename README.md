# Supplyve Laravel Assessment

Imagine that you were hired to create an online tour booking system. Your job is to develop a full-stack application in Laravel that can manage the tours of that company.

Below you will find the technical definitions of this application.

## Instructions

-   Fork this repository
-   Develop your application
-   When you're done, make a Pull Request of your code here for us.

## Database schema

| Column Name | Data type | Constraints |
| ----------- | --------- | ----------- |
| id          | bigint    | PK          |
| destination | string    |             |
| start       | timestamp |             |
| end         | timestamp |             |
| price       | float     |             |
| created_at  | timestamp |             |
| updated_at  | timestamp |             |
| deleted_at  | timestamp |             |

## Pages/Components

### Index

-   Display table of all available tours
    -   Don't show tours that have been soft-deleted
-   Columns are Destination, Start, End, and Price
    -   Destination text should be clickable, and take you to the Show page for that tour
    -   Start and End should be displayed in a human-readable format
    -   Price should be displayed with a $ sign in front
-   Table should be filterable by Start, End, and Price
-   Table should be paginated to only show 10 tours at a time

### Show

-   Destinaton as a header at the top of the page
-   Editable fields for Start, End, and Price
-   Delete button (should use soft deletes)

### Seeders

-   Create a Seeder that uses a Factory to generate 20 example tours

## Comments

-   Front-end should be built with [Laravel Blade](https://laravel.com/docs/8.x/blade#main-content) and [Livewire](https://laravel-livewire.com/docs/2.x/quickstart). No need to do anything complex; basic functionality is adequate. The purpose is to demonstrate your familiarity with the framework.
-   The front end does not need to look pretty. All we are looking for is functional and easily usable interfaces with a reasonable layout.
-   You may use any pre-built plugins you want.
-   Part of this evaluation is seeing what kinds of questions you ask when you get stuck or when you need clarification. It's important to see how you work with us even if the final product is not built 100% independently to perfection!

## Extras

If you have time, here are some extra features you can include:

-   Create button on the Index page
    -   It takes you to the Show page, where you can enter a new Destination, Start, End, and Price
-   Search bar on the Index page
    -   Search by Destination

#### Good luck!

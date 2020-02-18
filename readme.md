# Larticles API

## Quick Start

- ######  Clone GitHub repo for this project locally
git clone https://github.com/AnassLAM21/Delivery-date-times-Problem 

###### - cd into your project
type cd projectName

###### - Install Composer Dependencies
composer install

###### - Create a copy of your .env file
cp .env.example .env

###### - Migrate the database
php artisan migrate

###### - Seed the database
php artisan db:seed

###### - Generate an app encryption key
php artisan key:generate


## Endpoints

### Add city
POST api/cities | body: name 

### Create delivery times
POST api/delivery-times | body: delivery_at

### Attach cities to delivery time
POST cities/{city_id}/delivery-times | body: delivery_time

### Excludes a delivery time (s) span on a certain date for a given city
POST api/dates/{date}/delivery-times | body: delivery_time - city
you can also send a array of delivery_times IDs or just a ID 

### Display the available delivery time spans on given day
GET api/cities/{city_id}/delivery-dates-times/{number_of_days} 



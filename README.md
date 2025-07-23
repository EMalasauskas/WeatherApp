This Laravel-based REST API provides weather-based product suggestions for any city in **Lithuania** by integrating with the official [LHMT weather API](https://api.meteo.lt/). The service analyzes the forecast for the next **3 days** and returns **2 matching products** per day based on the predicted weather condition.

---

##  Features

-  **Forecast-based suggestions**: 2 relevant items per day for the next 3 days
-  **Supports all Lithuanian cities**
-  **Uses LHMT API** to get real weather data
-  **Stores products in the database**
-  **Caches responses for 5 minutes**
-  **Returns JSON-formatted API responses**
-  Built following **REST API principles**
-  ChatGPT demo product data

---

##  Installation

1. Clone the repository:

    git clone https://github.com/EMalasauskas/WeatherApp.git
    cd weather-suggestions-api


2. Install dependencies:

    composer install

3. Set up environment:

    cp .env.example .env
    php artisan key:generate   

4. Configure your database in .env:

5. Run migrations and seed demo data:

    php artisan migrate --seed

6. Start the Laravel server:

    php artisan serve




##  API Endpoint
GET /api/suggestions?city={city}
Query Parameters:

city – (required) Name of a city in Lithuania (e.g. vilnius, kaunas, klaipeda)

##  API Endpoint

    heroku link: http://weatherappadeoweb-0a76448e10fb.herokuapp.com/api/products/recommended?city={city}
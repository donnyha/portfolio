<?php

class Beer extends Model
{
    protected $table_name = 'beer';
    protected $key = 'id';

    /**
     * Gets all beer
     *
     * @return  array 
     */
    public function allBeer():array
    {
        global $dbh;

        $query = "SELECT {$this->table_name}.*,
        breweries.name as brewery
        FROM {$this->table_name}
        JOIN breweries on beer.brewery_id = breweries.id
        WHERE deleted = 0
        ";

        $stmt = $dbh->query($query);

        $results = $stmt->fetchAll() ?? [];

        foreach($results as $key => $result) {
            $result = avgRating(intval($key) + 1);
            $results[$key]['avg_rating'] = intval(round($result));
        }
        
        return $results;
    }

    /**
     * Gets all beer by reviews
     *
     * @return  array 
     */
    public function allBeerByReviews():array
    {
        global $dbh;

        $query = "SELECT {$this->table_name}.*,
        breweries.name as brewery,
        reviews.title as title,
        reviews.description as review,
        reviews.star_num as rating
        FROM reviews
        JOIN beer on reviews.beer_id = beer.id        
        JOIN breweries on beer.brewery_id = breweries.id
        ";

        $stmt = $dbh->query($query);
        
        return $stmt->fetchAll() ?? [];
    }

    /**
     * Gets all info on a beer
     *
     * @param   int    $id  beer id number
     *
     * @return  array
     */
    public function oneBeer(int $id):array
    {
        global $dbh;

        $query = "SELECT {$this->table_name}.*,
        breweries.name as brewery
        FROM beer
        JOIN breweries on beer.brewery_id = breweries.id
        WHERE beer.id = :id
        ";

        $stmt = $dbh->prepare($query);

        $params = array(
            ':id' => $id
        );

        $stmt->execute($params);
        
        $result = $stmt->fetch() ?? [];

        // $reviews = allReviewsPerBeer(intval($id));
        // $result['reviews'] = $reviews;

        return $result;
    }

    /**
     * get beers by breweries
     *
     * @param   string  $slug 
     *
     * @return  array
     */
    public function allBeerByBreweries(string $slug):array
    {
        global $dbh;

        $query = "SELECT
        {$this->table_name}.*,
        breweries.name as brewery
        FROM beer
        JOIN breweries ON beer.brewery_id = breweries.id 
        WHERE beer.brewery_id = (SELECT id FROM breweries WHERE slug = :slug)
        AND deleted = 0
        ";

        $stmt = $dbh->prepare($query);

        $params = array(
            ':slug' => $slug
        );

        $stmt->execute($params);

        $results = $stmt->fetchAll() ?? [];

        foreach($results as $key => $result) {
            $result = avgRating(intval($key) + 1);
            $results[$key]['avg_rating'] = intval(round($result));
        }

        return $results; 
    }

    /**
     * function to search beer
     *
     * @param   string  $search  search term submitted by the user
     *
     * @return  array
     */
    public function searchBeer(string $search):array
    {
        global $dbh;

        $query = "SELECT
        {$this->table_name}.*,
        breweries.name as brewery
        FROM
        {$this->table_name}
        JOIN breweries on beer.brewery_id = breweries.id
        WHERE MATCH(beer.name, beer.description)
        AGAINST(:search IN NATURAL LANGUAGE MODE) 
        AND
        deleted = 0
        ";

        $stmt = $dbh->prepare($query);

        $params = array(
            ':search' => $search
        );

        $stmt->execute($params);

        $results = $stmt->fetchAll();

        foreach($results as $key => $result) {
            $result = avgRating(intval($key) + 1);
            $results[$key]['avg_rating'] = intval(round($result));
        }

        return $results;
    }

    /**
     * function to search beer as an admin user
     *
     * @param   string  $search  search term submitted by the admin user
     *
     * @return  array
     */
    public function searchBeerAdmin(string $search):array
    {
        global $dbh;

        $query = "SELECT
        {$this->table_name}.*,
        breweries.name as brewery
        FROM
        {$this->table_name}
        JOIN breweries on beer.brewery_id = breweries.id
        WHERE beer.name LIKE '$search' OR breweries.name LIKE '$search'
        AND
        deleted = 0
        ";

        $stmt = $dbh->prepare($query);

        $params = array(
            ':search' => $search
        );

        $stmt->execute($params);

        $results = $stmt->fetchAll();

        foreach($results as $key => $result) {
            $result = avgRating(intval($key) + 1);
            $results[$key]['avg_rating'] = intval(round($result));
        }

        return $results;
    }
}
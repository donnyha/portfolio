<?php

declare(strict_types=1);

/**
 * function to get all information on users
 *
 * @return  array
 */
function allUsers():array 
{
    
    // declare global dbh
    global $dbh;

    // query to get users
    $query = "SELECT
    users.*
    FROM
    users
    ";

    // prepare query
    $stmt = $dbh->query($query);

    // execute the query
    $users = $stmt->fetchAll();

    return $users ?? [];

}

/**
 * function to get all reivews
 *
 * @return  array
 */
function allReviews():array
{
    global $dbh;

    $query = "SELECT
    reviews.*,
    beer.image as image,
    beer.name as beer_name,
    users.username as username
    FROM
    reviews
    JOIN beer ON reviews.beer_id = beer.id
    JOIN users ON reviews.user_id = users.id
    WHERE
    reviews.deleted = 0
    ";

    $stmt = $dbh->query($query);

    $reviews = $stmt->fetchAll();

    return $reviews;
}

/**
 * function to get all reviews for one user
 *
 * @param   int    $id  user id
 * @return  array
 */
function oneReview(int $user_id):array
{
    // declare global dbh
    global $dbh;

    // query to get users
    $query = "SELECT 
    reviews.id,
    reviews.title,
    reviews.description,
    reviews.star_num,
    beer.name,
    beer.image
    FROM reviews
    JOIN beer ON beer.id = reviews.beer_id
    WHERE reviews.user_id = :user_id
    AND reviews.deleted = 0
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':user_id' => $user_id
    );
    
    $stmt->execute($params);

    $reviews = $stmt->fetchAll();

    return $reviews ?? [];
}

/**
 * function to get all reviews for one user
 *
 * @param   int    $id  user id
 * @return  array
 */
function allReviewsPerBeer(int $beer_id):array
{
    // declare global dbh
    global $dbh;

    // query to get users
    $query = "SELECT 
    reviews.id,
    reviews.title,
    reviews.description,
    reviews.star_num,
    reviews.deleted,
    beer.name,
    beer.image,
    beer.deleted
    FROM reviews
    JOIN beer on reviews.beer_id = beer.id
    WHERE reviews.beer_id = :beer_id
    AND reviews.deleted = 0
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':beer_id' => $beer_id
    );
    
    $stmt->execute($params);

    $reviews = $stmt->fetch();

    // dd($reviews);

    return $reviews ?? [];
}

/**
 * function to get all reviews based on review id
 *
 * @param   int    $id  id for review
 *
 * @return  array
 */
function review(int $id):array
{
    global $dbh;

    // query to get reviews
    $query = "SELECT
    *
    FROM
    reviews
    WHERE reviews.id = :id
    ";

    // prepare query
    $stmt = $dbh->prepare($query);

    // parameter 
    $params = array(
        ':id' => $id
    );

    // execute parameter
    $stmt->execute($params);
    
    $reviews = $stmt->fetch();

    return $reviews ?? [];
}

/**
 * function to all reviews for a beer
 *
 * @param   int    $beer_id  beer id
 *
 * @return  array
 */
function allReviewsByBeer(int $beer_id):array
{
    // declare global dbh
    global $dbh;

    // query to get users
    $query = "SELECT 
    reviews.title,
    reviews.description,
    reviews.star_num,
    beer.name,
    beer.image
    FROM reviews
    JOIN beer ON beer.id = reviews.beer_id
    WHERE reviews.beer_id = :beer_id
    AND reviews.deleted = 0
    ";

    $stmt = $dbh->prepare($query);
    $params = array(
        ':beer_id' => $beer_id
    );
    $stmt->execute($params);
    $reviews = $stmt->fetchAll();

    return $reviews ?? [];
}

/**
 * function to update review for a particular beer
 *
 * @param   array  $post  $_POST
 * @param   int    $id    review id
 *
 * @return  int
 */
function updateReview(array $post, int $id):int
{
    global $dbh;

    $query = "UPDATE reviews
    SET
    title = :title,
    description = :description,
    star_num = :star_num
    WHERE
    id = :id
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':title' => $post['title'],
        ':description' => $post['review'],
        ':star_num' => $post['rating'],
        ':id' => $id
    );

    $stmt->execute($params);
    
    return $stmt->rowCount();
}

/**
 * function to update a particular beer
 *
 * @param   array  $post  $_POST
 * @param   int    $id    beer id
 *
 * @return  int
 */
function updateBeer(array $post, int $id):int
{
    global $dbh;

    if(!empty($post['image'])) {
        $image = 'image = :image,';
    }
    else {
        $image = '';
    }

    $query = "UPDATE beer
    SET
    brewery_id = :brewery_id, 
    name = :name, 
    type = :type, 
    alcohol_percentage = :alcohol_percentage, 
    $image 
    description = :description, 
    gluten_free = :gluten_free,
    price = :price, 
    amount = :amount, 
    container_type = :container_type,
    flavour = :flavour,
    grain = :grain
    WHERE
    id = :id
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':brewery_id' => $post['brewery_id'], 
        ':name' => $post['name'], 
        ':type' => $post['type'], 
        ':alcohol_percentage' => $post['alcohol_percentage'],
        ':description' => $post['description'], 
        ':gluten_free' => $post['gluten_free'],
        ':price' => $post['price'], 
        ':amount' => $post['amount'], 
        ':container_type' => $post['container_type'],
        ':flavour' => $post['flavour'],
        ':grain' => $post['grain'],
        ':id' => $id
    );

    if(!empty($post[image])) {
        $params[':image'] = $post['image'];
    }

    $stmt->execute($params);
    
    return $stmt->rowCount();
}

/**
 * function to get all breweries
 *
 * @return  array
 */
function allBreweries():array
{
    global $dbh;
    
    $query = "SELECT 
    DISTINCT name, 
    slug,
    street,
    postal_code,
    open_time_mon,
    close_time_mon,
    open_time_tue,
    close_time_tue,
    open_time_wed,
    close_time_wed,
    open_time_thu,
    close_time_thu,
    open_time_fri,
    close_time_fri,
    open_time_sat,
    close_time_sat,
    open_time_sun,
    close_time_sun,
    phone_number
    FROM breweries
    ORDER BY name ASC
    ";

    $stmt = $dbh->query($query);

    return $stmt->fetchAll();
}

/**
 * function to get brewery id using beer id
 *
 * @param   int  $beer_id  beer id
 *
 * @return  int
 */
function getBreweryIDByBeer($beer_id):int
{
    global $dbh;

    $query = "SELECT
    brewery_id
    FROM
    beer
    WHERE id = :id
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':id' => $beer_id
    );

    $stmt->execute($params);

    return $id = intval($stmt->fetch());
}

/**
 * function used to insert new user data to the database
 *
 * @return  int
 */
function insertUser(array $post):int 
{
    
    global $dbh;

    // prepare query
    $query = "INSERT INTO
              users
              (
                  first_name,
                  last_name,
                  username,
                  street,
                  city,
                  postal_code,
                  province,
                  country,
                  phone,
                  email,
                  password
              )
              VALUES
              (
                  :first_name,
                  :last_name,
                  :username,
                  :street,
                  :city,
                  :postal_code,
                  :province,
                  :country,
                  :phone,
                  :email,
                  :password
              )
              ";
        
    // prepare the statement to be executed
    $stmt = $dbh->prepare($query);

    // use these values to fill in values in placeholders
    $params = array(
        ':first_name' => $post['first_name'],
        ':last_name' => $post['last_name'],
        ':username' => $post['username'],
        ':street' => $post['street'],
        ':city' => $post['city'],
        ':postal_code' => $post['postal_code'],
        ':province' => $post['province'],
        ':country' => $post['country'],
        ':phone' => $post['phone'],
        ':email' => $post['email'],
        ':password' => password_hash($post['password'], PASSWORD_DEFAULT)
    );

    // execute the statement and the data is inserted
    $stmt->execute($params);

    // return the id of the inserted data
    return intval($dbh->lastInsertId()) ?? 0;

}
/**
 * function used to insert enquiries to the database
 *
 * @return  int
 */
function insertEnquiry(array $post):int 
{
    
    global $dbh;

    // prepare query
    $query = "INSERT INTO
              enquiry
              (
                  first_name,
                  last_name,
                  email,
                  brewery_name,
                  brewery_url,
                  description
              )
              VALUES
              (
                  :first_name,
                  :last_name,
                  :email,
                  :brewery_name,
                  :brewery_url,
                  :description
              )
              ";
        
    // prepare the statement to be executed
    $stmt = $dbh->prepare($query);

    // use these values to fill in values in placeholders
    $params = array(
        ':first_name' => $post['first_name'],
        ':last_name' => $post['last_name'],
        ':email' => $post['email'],
        ':brewery_name' => $post['brewery_name'],
        ':brewery_url' => $post['brewery_url'],
        ':description' => $post['description']
    );

    // execute the statement and the data is inserted
    $stmt->execute($params);

    // return the id of the inserted data
    return intval($dbh->lastInsertId()) ?? 0;
}

/**
 * Function to insert review to reviews table
 *
 * @param   array  $post
 *
 * @return  int
 */
function addBeer(array $post):int
{
    global $dbh;

    $query = "INSERT INTO
    beer
    (
        brewery_id, 
        name, 
        type, 
        alcohol_percentage, 
        image, 
        description, 
        gluten_free,
        price, 
        amount, 
        container_type,
        flavour,
        grain
    )
    VALUES
    (
        :brewery_id, 
        :name, 
        :type, 
        :alcohol_percentage, 
        :image, 
        :description, 
        :gluten_free, 
        :price, 
        :amount, 
        :container_type,
        :flavour,
        :grain
    )
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':brewery_id' => $post['brewery_id'], 
        ':name' => $post['name'], 
        ':type' => $post['type'], 
        ':alcohol_percentage' => $post['alcohol_percentage'], 
        ':image' => $post['image'], 
        ':description' => $post['description'], 
        ':gluten_free' => $post['gluten_free'], 
        ':price' => $post['price'], 
        ':amount' => $post['amount'], 
        ':container_type' => $post['container_type'],
        ':flavour' => $post['flavour'],
        ':grain' => $post['grain']
    );

    $stmt->execute($params);

    // return the id of the inserted data
    return intval($dbh->lastInsertId()) ?? 0;
}

/**
 * Function to insert review to reviews table
 *
 * @param   array  $post
 *
 * @return  int
 */
function addReview(array $post, int $brewery_id):int
{
    global $dbh;

    $query = "INSERT INTO
    reviews
    (
        beer_id,
        brewery_id,
        user_id,
        title,
        description,
        star_num    
    )
    VALUES
    (
        :beer_id,
        :brewery_id,
        :user_id,
        :title,
        :description,
        :star_num
    )
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':beer_id' => $post['beer_id'],
        ':brewery_id' => $brewery_id,
        ':user_id' => $post['user_id'],
        ':title' => $post['title'],
        ':description' => $post['review'],
        ':star_num' => $post['rating']
    );

    $stmt->execute($params);

    // return the id of the inserted data
    return intval($dbh->lastInsertId()) ?? 0;
}

/**
 * function to delete a review
 *
 * @param   int  $id  review id
 *
 * @return  int
 */
function deleteReview(int $id):int
{
    global $dbh;

    $query = "UPDATE
    reviews
    SET deleted = 1
    WHERE id = :id
    ";

    $stmt = $dbh->prepare($query);

    $params = array(':id' => $id);

    $stmt->execute($params);

    return $stmt->rowCount();
}

/**
 * function to delete a beer
 *
 * @param   int  $id  beer id
 *
 * @return  int
 */
function deleteBeer(int $id):int
{
    global $dbh;

    $query = "UPDATE
    beer
    SET deleted = 1
    WHERE id = :id
    ";

    $stmt = $dbh->prepare($query);

    $params = array(':id' => $id);

    $stmt->execute($params);

    return $stmt->rowCount();
}

/**
 * funcion to get average rating for a beer
 *
 * @param   int  $beer_id  beer id
 *
 * @return  int  calculated average rating of a beer
 */
function avgRating(int $beer_id)
{
    global $dbh;

    $query = "SELECT
    AVG(star_num)
    FROM 
    reviews
    JOIN beer ON reviews.beer_id = beer.id
    WHERE
    beer.id = :id
    AND reviews.deleted = 0
    ";

    $stmt = $dbh->prepare($query);

    $params = array(
        ':id' => $beer_id
    );

    $stmt->execute($params);

    $result = $stmt->fetch();

    return $result['AVG(star_num)'];
}

/**
 * count of all reviews
 *
 * @return  array
 */
function countReviews():string
{
    global $dbh;

    $query = "SELECT
    count(reviews.id) as reviews
    FROM
    reviews
    WHERE
    deleted = 0
    ";

    $stmt = $dbh->query($query);

    $reviews = $stmt->fetch();

    return $reviews["reviews"] ?? '';
}

/**
 * function to get min, max and avg price of beer
 *
 * @return  array   [return description]
 */
function beerPrice():array
{
    global $dbh;

    $query = "SELECT
    min(beer.price) as min,
    max(beer.price) as max,
    format(avg(beer.price), 2) as avg
    FROM
    beer
    WHERE
    deleted = 0
    ";

    $stmt = $dbh->query($query);

    $price = $stmt->fetch();

    return $price ?? [];
}
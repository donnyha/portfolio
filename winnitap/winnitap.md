```sql
-- Creating table breweries
CREATE TABLE breweries (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
street VARCHAR(255) NOT NULL,
city VARCHAR(255) NOT NULL,
postal_code VARCHAR(255) NOT NULL,
province VARCHAR(255) NOT NULL,
country VARCHAR(255) NOT NULL,
open_time_mon INT,
close_time_mon INT,
open_time_tue INT,
close_time_tue INT,
open_time_wed INT,
close_time_wed INT,
open_time_thu INT,
close_time_thu INT,
open_time_fri INT,
close_time_fri INT,
open_time_sat INT,
close_time_sat INT,
open_time_sun INT,
close_time_sun INT,
image VARCHAR(255),
phone_number VARCHAR(255),
email VARCHAR(255),
slug VARCHAR(255),
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

-- Insert values
INSERT INTO
breweries
(id,
name,
street,
city,
postal_code,
province,
country,
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
image,
phone_number,
email,
slug
)
VALUES
-- 1. Trans Canada
(1,
'Trans Canada Brewing Co.', '1-1290 Kenaston Boulevard', 'Winnipeg', 'R3P 0R7', 'Manitoba', 'Canada',
null, -- mon
null,
null, -- tue
null,
1400, -- wed
2200,
1400, -- thur
2200,
1400, -- fri
2200,
1400, -- sat
2200,
1400, -- sun
1900,
'trans_canada.jpg', 2046662337, 'info@tcb.beer', 'trans_canada'
),

-- 2. Half Pints
(2,
'Half Pints Brewing', '550 Roseberry Street', 'Winnipeg', 'R3H 0T1', 'Manitoba', 'Canada',
1100, -- mon
1800,
1100, -- tue
1800,
1100, -- wed
1800,
1100, -- thur
1800,
1100, -- fri
1800,
1100, -- sat
1800,
1100, -- sun
1800,
'half_pints.jpg', 2048327468, 'info@halfpintsbrewing.com', 'half_pints'
),

-- 3. Kilter
(3,
'Kilter Brewing Co.', '450 Rue Deschambault', 'Winnipeg', 'R2H 0K1', 'Manitoba', 'Canada',
null, -- mon
null,
null, -- tue
null,
1200, -- wed
2000,
1200, -- thur
2000,
1200, -- fri
2000,
1200, -- sat
2000,
null, -- sun
null,
'kilter.jpg', null, 'hello@kilterbrewing.co', 'kilter'
),

-- 4. Lake of the Woods
(4,
'Little Brown Jug Brewing Co.', '336 William Avenue', 'Winnipeg', 'R3A 0H7', 'Manitoba', 'Canada',
null, -- mon
null,
1200, -- tue
1800,
1200, -- wed
1800,
1200, -- thur
2000,
1200, -- fri
2000,
1200, -- sat
2000,
null, -- sun
null,
'little_brown_jug.jpg', 2045000441, 'beer@littlebrownjug.ca', 'lbj'
),

-- 5. Fort Garry
(5,
'Fort Garry Brewing Co.', '130 Lowson Crescent', 'Winnipeg', 'R3P 2H8', 'Manitoba', 'Canada',
0900, -- mon
1700,
0900, -- tue
1700,
0900, -- wed
1700,
0900, -- thur
1700,
0900, -- fri
1800,
null, -- sat
null,
null, -- sun
null,
'fort_garry.jpg', 2044873678, 'info@fortgarry.com', 'fort_garry'
);

-- Update
-- UPDATE
-- breweries
-- SET
-- country = 'Canada'
-- WHERE
-- id = 1;

-- Create table beer
CREATE TABLE beer (
id INT NOT NULL AUTO_INCREMENT,
brewery_id INT NOT NULL,
name VARCHAR(255) NOT NULL,
type ENUM ('stout', 'IPA', 'amber ale', 'pale ale', 'specialty ale', 'kolsch', 'lager', 'pilsner', 'seltzer', 'radler', 'european', 'other'),
flavour VARCHAR(255),
grain VARCHAR(255),
alcohol_percentage DECIMAL (2,1),
image VARCHAR(255),
description TEXT,
gluten_free BOOLEAN,
price DECIMAL (5,2),
amount INT,
container_type ENUM ('can', 'bottle', 'growler', 'keg'),
avg_rating INT,
click_num INT,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id),
FOREIGN KEY (brewery_id) REFERENCES breweries(id)
);

-- ALTER TABLE beer MODIFY alcohol_percentage DECIMAL (2,1);

-- Insert values
INSERT INTO
beer
(brewery_id, name, type, flavour, grain, alcohol_percentage, image, description, gluten_free, price, amount, container_type, avg_rating, click_num)
VALUES
-- 1. Trans Canada
(1, 'Bluebeary Ale', 'specialty ale', 'fruity', 'wheat', 5.0, 'bluebeary.png', 'A wheat beer with added natural blueberry flavour. Subtle berry notes on the nose and palate, a well-balanced ale with a refreshing finish', 0, 2.74, 355, 'bottle', 3, 68),

(1, 'Lamp Lighter Amber Ale', 'amber ale', 'roasted', 'barley', 5.2, 'lamp_lighter.png', 'Easy drinking ale brewed using traditional UK malts to impart a deep red hue with notes of caramel, raisin and a hint of roasted chocolate', 0, 2.12, 355, 'can', 3, 78),

(1, 'Portager Bohemian Pilsner', 'pilsner', 'crisp', 'barley', 5.3, 'portager_bohemian.png', 'Brewed using Bohemian Pilsner malt and Saaz hops. A crisp, clean and refreshing lager with distinct hop aromas of floral and subtle spice', 0, 2.44, 355, 'bottle', 2, 30),

(1, 'Cold Brew Coffee Stout', 'stout', 'coffee', 'barley' 7.0, 'cold_brew_coffee.png', 'Bold coffee flavour is balanced with a chocolate-forward profile from the dark malts. A dark, expressive and full-bodied stout, to be enjoyed at any time of your day!', 0, 2.74, 355, 'can', 3, 80),

-- 2. Half Pints
(2, 'Stir Stick Stout', 'stout', 'robust', 'barley' 6.0, 'stir_stick.png', 'Robust with ruby highlights and a generous addition of locally roasted fair trade, organic Ethiopian Yirgacheffe coffee', 0, 4.09, 473, 'can', 3, 75),

(2, 'Little Scrapper IPA', 'IPA', 'grapefruit', 'barley', 6.0, 'little_scrapper.png', 'A firm, toasted malt presence forms the background for all these hops lending balance so it’s not just a one note symphony', 0, 3.95, 473, 'can', 3, 80),

(2, 'Bulldog Amber Ale', 'amber ale', 'nutty', 'barley', 5.4, 'bulldog_amber.png', 'British crystal malts give this beer its distinctly deep amber body and nutty aroma that persist throughout the glass', 0, 2.32, 341, 'bottle', 4, 72),

(2, 'St. James Pale Ale', 'pale ale', 'floral', 'barley', 4.8, 'st_james.png', 'St. James Pale Ale is a medium bodied blonde brew that’s soft on the palette with a malty finish', 0, 2.14, 341, 'bottle', 5,103),

-- 3. Kilter
(3, 'Juicii IPA', 'IPA', 'citrus', 'barley', 7.0, 'juicii.png', 'A hoppy, tropical, and juicy New England IPA (7%) double dry-hopped with El Dorado, Vic Secret, lupulin-enriched Mosaic & Citra', 0, 4.35, 473, 'can', 5, 140),

(3, 'Waves Juicy Pale Ale', 'pale ale', 'tropical', 'barley', 5.0, 'waves_juicy.jpeg', 'A tropical, breezy, and juicy New England Pale Ale (5%) dry-hopped with waves of El Dorado & Citra', 0, 4.09, 473, 'can', 5, 150),

(3, 'Fog Machine Cashmere Double IPA', 'IPA', 'hoppy', 'barley', 8.0, 'fog_machine.jpg', 'A super hoppy single-hop Double IPA brewed and double dry-hopped with 100% Cashmere!', 0, 4.89, 473, 'can', 4, 80),

(3, 'Throwback West Coast IPA', 'IPA', 'hoppy', 'barley', 7.0, 'throwback.jpeg', 'A dank & hoppy West Coast IPA (7%) brewed with Golden Promise malt and aggressively dry-hopped with Centennial, Cryo Simcoe, and Cryo Amarillo', 0, 4.59, 473, 'can', 4, 100),

-- 4. Little Brown Jug
(4, '1919 Belgian Pale Ale', 'pale ale', 'herbal', 'barley', 5.0, '1919.png', '1919 is an easy-drinking everyday Belgian Pale Ale', 0, 2.40, 473, 'can', 5, 93),

(4, 'Golden Ale', 'specialty ale', 'floral', 'barley', 6.5, 'golden_ale.png', 'A CRISP GOLDEN ALE IN OUR BELGIAN STYLE MADE WITH MANITOBA HONEY', 0, 2.40, 473, 'can', 5, 114),

(4, 'Summer Lager', 'lager', 'refreshing', 'barley', 5.0, 'summer_lager.png', 'A SUMMER LAGER WITH A REFRESHING OUTLOOK', 0, 2.40, 473, 'can', 2, 104),

(4, 'Belgian IPA', 'IPA', 'fruity', 'barley', 6.5, 'belgian_ipa.png', 'ENGINEERED TO SHOWCASE NEW WORLD HOPS IN OUR BELGIAN STYLE', 0, 2.40, 473, 'can', 5, 120),

-- 5. Fort Garry
(5, 'Lime Seltzer', 'seltzer', 'fruity', 'water', 5.0, 'lime_seltzer.png', 'Lime flavour Seltzer', 0, 3.59, 473, 'can', 2, 72),

(5, 'Cranberry Crush Radler', 'radler', 'fruity', 'barley', 3.5, 'cranberry_crush_radler.png', 'A beautiful pink-hued, effervescent radler, infused with tart cranberry juice', 0, 3.79, 473, 'can', 2, 88),

(5, 'Portage and Main IPA', 'IPA', 'west coast', 'barley', 6.5, 'portage_and_main.png', 'All aboard with this west coast-style IPA, featuring high-quality malted barley and whole west coast and Manitoba flower hops', 0, 3.99, 473, 'can', 3, 110),

(5, 'Northern Lite', 'other', 'light', 'barley', 4.0, 'northern_lite.png', 'Northern Lite is a clean, crisp beer which finishes dry. A perfect beach or cabin companion. Made using 100% barley we strive to create the best tasting light beer possible', 0, 2.98, 473, 'can', 3, 103);

-- Create table users
DROP TABLE IF EXISTS users;
CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT,
last_name VARCHAR(255) NOT NULL,
first_name VARCHAR(255) NOT NULL,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL UNIQUE,
street VARCHAR(255) NOT NULL,
city VARCHAR(255) NOT NULL,
postal_code VARCHAR(255) NOT NULL,
province VARCHAR(255) NOT NULL,
country VARCHAR(255) NOT NULL,
is_admin BOOLEAN NOT NULL DEFAULT FALSE,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

-- ALTER TABLE users MODIFY postal_code VARCHAR(255) NOT NULL;
-- ALTER TABLE users MODIFY email VARCHAR(255) NOT NULL UNIQUE;
-- ALTER TABLE users AUTO_INCREMENT = last number;

-- Insert value in users
INSERT INTO
users
(id, last_name, first_name, username, password, phone, email, street, city, postal_code, province, country)
VALUES
(1, 'Henry', 'Thierry', 'Emirates', 'Fassword', 1111111111, 'striker@example.com', '123 Arsenal Street', 'Winnipeg', 'R3B 2E9', 'Manitoba', 'Canada'),
(2, 'Pirlo', 'Andrea', 'OldLady', 'Iassword', 2222222222, 'regista@example.com', '234 Juventus Street', 'Winnipeg', 'R3B 2E8', 'Manitoba', 'Canada'),
(3, 'Carragher', 'Jamie', 'CenterBack', 'Lassword', 3333333333, 'kop@example.com', '345 Anfield Street', 'Winnipeg', 'R3B 2E7', 'Manitoba', 'Canada'),
(4, 'Neville', 'Gary', 'Fullback', 'Massword', 4444444444, 'red_devil@example.com', '456 Old Trafford Street', 'Winnipeg', 'R3B 2E6', 'Manitoba', 'Canada'),
(5, 'Busquets', 'Sergio', 'anchorman', 'Sassword', 5555555555, 'barcelona@example.com', '413 Camp Nou Street', 'Winnipeg', 'R3B 2E5', 'Manitoba', 'Canada');

-- Create table reviews
CREATE TABLE reviews (
id INT NOT NULL AUTO_INCREMENT,
beer_id INT NOT NULL,
user_id INT NOT NULL,
brewery_id INT NOT NULL,
title VARCHAR(255),
description VARCHAR(255),
star_num INT(5),
deleted BOOLEAN DEFAULT FALSE,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id),
FOREIGN KEY (beer_id) REFERENCES beer(id),
FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert values
INSERT INTO
reviews (beer_id, user_id, brewery_id, title, description, star_num)
VALUES

-- Trans Canada
(1, 1, 1, 'Interesting', 'Bluebeary Ale was one of the first craft beers I had ever tried. In my opinion, it is more of a summer beer as it is fruity yet refreshing. I prefer bottle over can, but I stole this from Shans beer fridge so can’t complain. Cheers', 3),

(2, 1, 1, 'Pleasant Surprise', 'Quite complex for an amber ale. Sweet malt forward... caramel with hints of chocolate, raisin and a nice biscuity malt profile. This is pretty damn good! Deep red hue and finishes smooth, begging me to take another mouthful.', 3),

(3, 1, 1, 'Good enough', 'It’s clean crisp and not as hoppy as a ipa which in my books is a good thing.', 2),

(4, 3, 1, 'Breath of Fresh air', 'Great chocolate stout. Not overpowering just richly infused.', 3),

-- Half Pints
(5, 5, 2, 'Smooth', 'Love the salty sweet flavor...smooth', 3),

(6, 4, 2, 'Awesome!', 'My fav local IPA.', 4),

(7, 2, 2, 'A good reliable amber', 'Light, short, sweet. Peanut, biscuit, a bit of raisins. Some mild hops in there.', 3),

(8, 1, 2, 'Great Pale Ale!', 'I can’t believe I’ve never checked this one in', 4),

-- Kilter
(9, 3, 3, 'A true crowd pleaser', 'A soft, tropical, and juicy New England IPA double dry-hopped with El Dorado, Vic Secret, lupulin-enriched Mosaic & Citra.', 5),

(10, 2, 3, 'Easy drinkin', 'I just love this beer, so fresh, juiced and hopped. This was canned in Feb and still a banger in April', 5),

(11, 5, 3, 'Another fog machine hit', '100% chance of fog on a beautiful sunny day. Nice creamy melon flavour, with the classic kilter tropical juicy flavour. Pine and lemon rounds it out.', 4),

(12, 1, 3, 'Refreshing!', 'Nice hop aroma, golden color and long lasting head. Creamy smooth slight hop bitter flavor and hints of pine finish.', 4),

-- Little Brown Jug
(13, 1, 4, 'Belgian Classic', 'Nice clean crisp and modestly sweet with a definite malt flavour', 5),

(14, 2, 4, 'Honey Taste!', 'I really enjoyed this brew! Great work! Loved the honey taste', 4),

(15, 3, 4, 'Citrusy, refreshing beer', 'Lagery with a little bright taste', 1),

(16, 4, 4, 'Nice hoppy and citrus', 'Smooth for a heavy ipa', 5),

-- Fort Garry
(17, 3, 5, 'Limey', 'Could be better', 2),

(18, 5, 5, 'Tastes like summer', 'Recommended by the savvy employee at the LC, and he did not disappoint! Great sour & sweet balance, with a delicious cranberry flavor!', 2),

(19, 3, 5, 'Taste of Winnipeg', 'Clean, light, non descript beer', 3),

(20, 5, 5, 'Clean, light, non descript beer', 'Nice warm up beer .. better choice then bud... $2 king can ....', 3);

-- Create table logs
CREATE TABLE log (
id INT NOT NULL AUTO_INCREMENT,
event VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

-- Create table enquiry
CREATE TABLE enquiry (
id INT NOT NULL AUTO_INCREMENT,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
brewery_name VARCHAR(255) NOT NULL,
brewery_url VARCHAR(255) NOT NULL,
description VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

-- SET foreign_key_checks = 0;
-- UPDATE ...
-- SET foreign_key_checks = 1;

-- sudo mysqldump capstone > winnitap.sql
```

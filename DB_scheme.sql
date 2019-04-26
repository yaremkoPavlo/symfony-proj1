CREATE TABLE `users`
(
  `id` int PRIMARY KEY,
  `full_name` varchar(255),
  `email` varchar(255) UNIQUE,
  `gender` boolean,
  `date_of_birth` varchar(255),
  `created_at` varchar(255)
);

CREATE TABLE `products`
(
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `price` int,
  `status` varchar(255),
  `created_at` varchar(255)
);

CREATE TABLE `carts`
(
  `id` int PRIMARY KEY,
  `user_id` int,
  `created_at` varchar(255)
);

CREATE TABLE `cart_products`
(
  `cart_id` int,
  `product_id` int,
  `quantity` int NOT NULL
);

CREATE TABLE `orders`
(
  `id` int PRIMARY KEY,
  `cart_id` int,
  `user_id` int UNIQUE NOT NULL,
  `status` varchar(255),
  `created_at` varchar(255) COMMENT 'When order created'
);

ALTER TABLE `carts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `cart_products` ADD FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

ALTER TABLE `cart_products` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `orders` ADD FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

ALTER TABLE `orders` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

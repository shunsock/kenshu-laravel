CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(80) NOT NULL,
    `email` VARCHAR(32) NOT NULL,
    `user_image_path` VARCHAR(256) NOT NULL,
    `password` VARCHAR(256) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP,
    PRIMARY KEY (`id`)
);

CREATE TABLE `post` (
    `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL,
    `thumbnail` VARCHAR(256) NOT NULL,
    `body` VARCHAR(9999) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE `image` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `post_id` INT NOT NULL,
     `path` VARCHAR(128) NOT NULL
);

CREATE TABLE `tag` (
   `tag_id` INT AUTO_INCREMENT NOT NULL,
   `post_id` INT NOT NULL,
   PRIMARY KEY (`tag_id`, `post_id`)
);

CREATE TABLE `tag_name` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL
);

ALTER TABLE `post` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `image` ADD FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

ALTER TABLE `tag` ADD FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

ALTER TABLE `tag` ADD FOREIGN KEY (`tag_id`) REFERENCES `tag_name` (`id`);


INSERT INTO "users" (name, email, user_image_path, password)
VALUES
    (
        'admin'
        , 'test-email@gmail.com'
        , 'https://avatars.githubusercontent.com/u/84004458?v=4'
        , 'pass'
    );
INSERT INTO "post" (title, user_id, thumbnail, body)
VALUES
    (
        'Balloon',
        1,
        'image/test_image_balloon.jpg',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
    )
    ,(
        'car',
        1,
        'image/test_image_car.jpg',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
    )
    ,(
        'Rose is a flower',
        1,
        'image/test_image_rose.jpg',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
    );

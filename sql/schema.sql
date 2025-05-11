-- =================================================================
-- MOCK USER DATA
-- =================================================================

INSERT INTO `book_users` (`name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('Alice Wonderland', 'alice@example.com', NOW(), '$2y$12$rmhoAyzZ3VTv1X05zJY.K.fPJblThDwkHNQhyS0Tgk9bQLFskXq.m', NULL, NOW(), NOW());
SET @alice_id = LAST_INSERT_ID(); -- Get the ID of the just-inserted Alice

INSERT INTO `book_users` (`name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('Bob The Builder', 'bob@example.com', NOW(), '$2y$12$HhkvCuGQx7FY00MnGFfcXOSnlykDS3cfJQTX1UabuLnC/DELMwLj6', NULL, NOW(), NOW());
SET @bob_id = LAST_INSERT_ID(); -- Get the ID of the just-inserted Bob

INSERT INTO `book_users` (`name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('Charlie Brown', 'charlie@example.com', NOW(), '$2y$12$23r2ig6wmPI7e/LqUHUnMePNJ2C407WuqS8V1K69CPqamB3LDEeci', NULL, NOW(), NOW());
SET @charlie_id = LAST_INSERT_ID(); -- Get the ID of the just-inserted Charlie

-- You can optionally select the IDs to verify them:
-- SELECT @alice_id, @bob_id, @charlie_id;

-- =================================================================
-- MOCK BOOK DATA
-- Now using the actual IDs retrieved above
-- =================================================================

-- Books for Alice
INSERT INTO `books` (`title`, `book_condition`, `price`, `user_id`, `created_by`) VALUES
('The Great Gatsby', '3', 10.99, @alice_id, @alice_id),
('To Kill a Mockingbird', '4', 15.50, @alice_id, @alice_id),
('Adventures in Wonderland', '2', 8.75, @alice_id, @alice_id);

-- Books for Bob
INSERT INTO `books` (`title`, `book_condition`, `price`, `user_id`, `created_by`) VALUES
('1984', '4', 7.25, @bob_id, @bob_id),
('Brave New World', '3', 9.00, @bob_id, @bob_id),
('Building for Dummies', '1', 19.99, @bob_id, @bob_id);

-- Books for Charlie
INSERT INTO `books` (`title`, `book_condition`, `price`, `user_id`, `created_by`) VALUES
('Pride and Prejudice', '3', 22.00, @charlie_id, @charlie_id),
('The Catcher in the Rye', '2', 12.75, @charlie_id, @charlie_id),
('Peanuts Collection', '4', 25.00, @charlie_id, @charlie_id);

-- More diverse books
INSERT INTO `books` (`title`, `book_condition`, `price`, `user_id`, `created_by`) VALUES
('Dune', '4', 18.50, @alice_id, @alice_id),
('The Hobbit', '3', 11.20, @bob_id, @bob_id),
('Moby Dick', '1', 5.99, @charlie_id, @charlie_id),
('War and Peace', '2', 14.30, @alice_id, @alice_id),
('The Lord of the Rings', '4', 29.99, @bob_id, @bob_id);
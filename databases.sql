CREATE TABLE IF NOT EXISTS `users` (
    `record_id` int(11) NOT NULL,
    `user_id` varchar(250) NOT NULL,
    `user_name` varchar(60) NOT NULL,
    `user_email` varchar(128) NOT NULL,
    `user_nickname` varchar(80) NOT NULL,
    `user_password` varchar(256) NOT NULL,
    `user_group` int(11) DEFAULT 1,
    `user_profile_picture` text DEFAULT NULL,
    `user_registred_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`record_id`);

--
-- Primary key pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

CREATE TABLE `users_pictures` (
    `record_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `user_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexy pro tabulku `users_pictures`
--
ALTER TABLE `users_pictures`
    ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT pro tabulku `users_pictures`
--
ALTER TABLE `users_pictures`
    MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
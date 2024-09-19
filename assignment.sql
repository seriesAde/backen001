INSERT INTO `users`(`id`, `email`, `user_name`, `password`, `role`) VALUES ('1','Adeshinaahmed60@gmai.com','Adeshina','asdfghjkl','9');
SELECT `id`, `email`, `user_name`, `password`, `role` FROM `users` WHERE 1;
UPDATE `users` SET `id`='1',`email`='whygee@gmail.com',`user_name`='Mr.ade',`password`='efghjk',`role`='8' WHERE `id` =0;
DELETE FROM `users` WHERE `id`=1;

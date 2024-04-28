select sender.profile_picture, sender.first_name, m.message,  recipient.first_name as sent_to from messages m
    inner join users as sender on m.user_id = u.user_id
    inner join users as recipient on m.to = u.user_id

select * from user_friends where user_id = 123;

SELECT DISTINCT u.*
FROM users u
         JOIN user_friends uf1 ON u.id = uf1.friend_id
         JOIN user_friends uf2 ON uf1.user_id = uf2.friend_id
WHERE uf2.user_id = 123 AND u.id != 123;

DELIMITER ;;

DROP PROCEDURE IF EXISTS `get_home_page_posts`;;
CREATE PROCEDURE `get_home_page_posts`()
BEGIN
select * from posts limit 10;
END;;

DROP PROCEDURE IF EXISTS `get_post_count_for_user`;;
CREATE PROCEDURE `get_post_count_for_user`(IN user_id INT,
                          OUT post_count BIGINT)
BEGIN
  SELECT count(posts.id) INTO post_count FROM posts WHERE posts.user_id = user_id;
END;;

DELIMITER ;

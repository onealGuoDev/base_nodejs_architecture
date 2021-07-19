<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private function temp()
    {
        DB::connection($this->mainDB)->table($this->table)->insert($this->data);
    }

    private $mainDB;
    private $tables;
    private $table;
    private $data;

    public function __construct()
    {
        $this->tables = (object)[];
        /**
         * Export to PHP Array plugin for PHPMyAdmin
         * @version 4.9.0.1
         */

        /**
         * Database `chat`
         */

        /* `chat`.`auth_actions` */
        $this->tables->{'auth_actions'} = array();

        /* `chat`.`auth_action_results` */
        $this->tables->{'auth_action_results'} = array(
            array('id' => '1', 'name' => 'success', 'content' => NULL),
            array('id' => '2', 'name' => 'reject', 'content' => NULL)
        );

        /* `chat`.`auth_action_types` */
        $this->tables->{'auth_action_types'} = array(
            array('id' => '1', 'name' => 'login', 'content' => NULL),
            array('id' => '2', 'name' => 'request', 'content' => NULL),
            array('id' => '3', 'name' => 'refresh', 'content' => NULL),
            array('id' => '4', 'name' => 'logout', 'content' => NULL)
        );

        /* `chat`.`auth_tokens` */
        $this->tables->{'auth_tokens'} = array();

        /* `chat`.`friends` */
        $this->tables->{'friends'} = array(
              array('id' => '1','from_user_id' => '1','to_user_id' => '2','status_id' => '1','created_at' => '2020-10-07 11:40:44','updated_at' => '2020-10-07 11:40:44'),
              array('id' => '2','from_user_id' => '1','to_user_id' => '3','status_id' => '1','created_at' => '2020-10-07 11:40:44','updated_at' => '2020-10-07 11:40:44'),
              array('id' => '3','from_user_id' => '2','to_user_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:40:44','updated_at' => '2020-10-07 11:40:44'),
              array('id' => '4','from_user_id' => '3','to_user_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:40:44','updated_at' => '2020-10-07 11:40:44')
        );

        /* `chat`.`media` */
        $this->tables->{'media'} = array(
              array('id' => '1','media_type_id' => '1','store_name' => '1600246652565.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652565.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '2','media_type_id' => '1','store_name' => '1600246652566.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652566.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '3','media_type_id' => '1','store_name' => '1600246652567.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652567.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '4','media_type_id' => '1','store_name' => '1600246652568.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652568.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '5','media_type_id' => '1','store_name' => '1600246652569.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652569.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '6','media_type_id' => '1','store_name' => '1600246652570.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652570.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '7','media_type_id' => '1','store_name' => '1600246652571.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652571.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '8','media_type_id' => '1','store_name' => '1600246652572.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652572.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '9','media_type_id' => '1','store_name' => '1600246652573.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652573.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '10','media_type_id' => '1','store_name' => '1600246652574.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652574.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '11','media_type_id' => '1','store_name' => '1600246652575.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652575.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '12','media_type_id' => '1','store_name' => '1600246652576.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652576.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '13','media_type_id' => '1','store_name' => '1600246652577.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652577.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '14','media_type_id' => '1','store_name' => '1600246652578.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652578.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41'),
              array('id' => '15','media_type_id' => '1','store_name' => '1600246652579.jpg','original_name' => 'empty.jpg','file_size' => '22134','path' => '1600246652579.jpg','status_id' => '1','created_at' => '2020-10-07 11:42:41','updated_at' => '2020-10-07 11:42:41')
              );

        /* `chat`.`media_type` */
        $this->tables->{'media_type'} = array(
                array('id' => '1','name' => '圖片','content' => NULL),
                array('id' => '2','name' => '影片','content' => NULL),
                array('id' => '3','name' => '聲音','content' => NULL)
        );

        /* `chat`.`role_types` */
        $this->tables->{'role_types'} = array(
            array('id' => '1', 'name' => 'user', 'content' => NULL),
            array('id' => '2', 'name' => 'staff', 'content' => NULL),
            array('id' => '3', 'name' => 'admin', 'content' => NULL),
        );

        /* `chat`.`room` */
        $this->tables->{'rooms'} = array(
            array('id' => '1','room_type_id' => '1','room_name' => NULL,'limit_number' => '2','sticker_media_id' => '1','room_key' => 'z5s3e9f5t44a2d','status_id' => '1','user_last_seen' => '[{"id":1,"time":"2020-10-05 10:00:00"},{"id":2,"time":"2020-10-05 10:05:00"}]','destruction_time' => '0', 'created_at' => '2020-10-07 11:26:22','updated_at' => '2020-10-07 11:26:22'),
            array('id' => '2','room_type_id' => '1','room_name' => NULL,'limit_number' => '2','sticker_media_id' => '1','room_key' => 'z5aae9f5t44a2d','status_id' => '1','user_last_seen' => '[{"id":1,"time":"2020-10-05 10:00:00"},{"id":3,"time":"2020-10-05 10:05:00"}]','destruction_time' => '0', 'created_at' => '2020-10-07 11:26:22','updated_at' => '2020-10-07 11:26:22'),
            array('id' => '3','room_type_id' => '2','room_name' => 'Tim Home','limit_number' => '10','sticker_media_id' => '1','room_key' => 'z5s3e8fdt44a2d','status_id' => '1','user_last_seen' => '[{"id":1,"time":"2020-10-05 10:00:00"},{"id":2,"time":"2020-10-05 10:08:00"},{"id":3,"time":"2020-10-05 10:05:00"}]', 'destruction_time' => '0','created_at' => '2020-10-07 11:26:22','updated_at' => '2020-10-07 11:26:22')
        );

        /* `chat`.`room_chat` */
        $this->tables->{'room_chats'} = array(
            array('id' => '1','pre_id' => '0','current_position' => '1','room_id' => '1','content' => '[{"date_time": "2020-11-21 04:11:03", "content": "9Rz7X3d/N3q16gqBYGp4EJHhVoOGt2R3Qrlx04iRsUZy3NgMOKZq/wpx6g66me+PVuT6ZaIccfXE8sZu/o0AN8UIm14m8NaZCzkOYVADjzQ=", "status_id": 1}, {"date_time": "2020-11-21 04:11:23", "content": "9Rz7X3d/N3q16gqBYGp4EJHhVoOGt2R3Qrlx04iRsUZy3NgMOKZq/wpx6g66me+Pu1baaTnTOI1uU4VqlBu9p4oVGt2D9ESh1jfk8cJZKeA=", "status_id": 1}]','status_id' => '1','date' => '2020-10-07','not_read' => '[]', 'created_at' => '2020-10-07 11:35:04','updated_at' => '2020-10-07 11:35:04'
            ),
            array('id' => '2','pre_id' => '0','current_position' => '1','room_id' => '2','content' => '[{"date_time": "2020-11-21 04:11:03", "content": "9Rz7X3d/N3q16gqBYGp4EJHhVoOGt2R3Qrlx04iRsUZy3NgMOKZq/wpx6g66me+PVuT6ZaIccfXE8sZu/o0AN8UIm14m8NaZCzkOYVADjzQ=", "status_id": 1}, {"date_time": "2020-11-21 04:11:23", "content": "9Rz7X3d/N3q16gqBYGp4EJHhVoOGt2R3Qrlx04iRsUZy3NgMOKZq/wpx6g66me+Pu1baaTnTOI1uU4VqlBu9p4oVGt2D9ESh1jfk8cJZKeA=", "status_id": 1}]','status_id' => '1','date' => '2020-10-07','not_read' => '[]', 'created_at' => '2020-10-07 11:35:04','updated_at' => '2020-10-07 11:35:04'

            ),
            array('id' => '3','pre_id' => '0','current_position' => '1','room_id' => '3','content' => '[{"date_time": "2020-11-21 04:11:03", "content": "9Rz7X3d/N3q16gqBYGp4EJHhVoOGt2R3Qrlx04iRsUZy3NgMOKZq/wpx6g66me+PVuT6ZaIccfXE8sZu/o0AN8UIm14m8NaZCzkOYVADjzQ=", "status_id": 1}, {"date_time": "2020-11-21 04:11:23", "content": "9Rz7X3d/N3q16gqBYGp4EJHhVoOGt2R3Qrlx04iRsUZy3NgMOKZq/wpx6g66me+Pu1baaTnTOI1uU4VqlBu9p4oVGt2D9ESh1jfk8cJZKeA=", "status_id": 1}]','status_id' => '1','date' => '2020-10-07','not_read' => '[]', 'created_at' => '2020-10-07 11:35:04','updated_at' => '2020-10-07 11:35:04')

            );

        /* `chat`.`room_type` */
        $this->tables->{'room_type'} = array(
            array('id' => '1','name' => '一般','content' => NULL),
            array('id' => '2','name' => '多人(無需審核)','content' => NULL),
            array('id' => '3','name' => '多人(需審核)','content' => NULL)
        );

        /* `chat`.`room_user_transation` */
        $this->tables->{'room_user_transation'} = array(
            array('id' => '1','room_id' => '1','user_id' => '1','owner' => '1','message_warn' =>'1', 'status_id' => '1','created_at' => '2020-10-07 11:29:58','updated_at' => '2020-10-07 11:29:58'),
            array('id' => '2','room_id' => '1','user_id' => '2','owner' => '0','message_warn' =>'1','status_id' => '1','created_at' => '2020-10-07 11:30:20','updated_at' => '2020-10-07 11:30:20'),
            array('id' => '3','room_id' => '2','user_id' => '1','owner' => '1','message_warn' =>'1','status_id' => '1','created_at' => '2020-10-07 11:30:46','updated_at' => '2020-10-07 11:30:46'),
            array('id' => '4','room_id' => '2','user_id' => '3','owner' => '0','message_warn' =>'1','status_id' => '1','created_at' => '2020-10-07 11:30:46','updated_at' => '2020-10-07 11:30:46'),
            array('id' => '7','room_id' => '3','user_id' => '1','owner' => '1','message_warn' =>'1','status_id' => '1','created_at' => '2020-10-07 11:33:52','updated_at' => '2020-10-07 11:33:52'),
            array('id' => '8','room_id' => '3','user_id' => '2','owner' => '0','message_warn' =>'1','status_id' => '1','created_at' => '2020-10-07 11:33:52','updated_at' => '2020-10-07 11:33:52'),
            array('id' => '9','room_id' => '3','user_id' => '3','owner' => '0','message_warn' =>'1','status_id' => '1','created_at' => '2020-10-07 11:33:52','updated_at' => '2020-10-07 11:33:52')
        );
        /* `chat`.`staffs` */
        $this->tables->{'staffs'} = array(
            array('id' => '1','role_type_id' => '3','name' => 'admin1','account' => 'admin1','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','status_id' => '1','created_at' => '2020-03-26 02:45:41','updated_at' => '2020-03-26 02:45:41'),
            array('id' => '2','role_type_id' => '2','name' => 'admin2','account' => 'admin2','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','status_id' => '1','created_at' => '2020-03-26 02:45:41','updated_at' => '2020-03-26 02:45:41')
        );


        /* `chat`.`statuses` */
        $this->tables->{'statuses'} = array(
            array('id' => '1','name' => '啟用','content' => NULL),
            array('id' => '2','name' => '停用','content' => NULL),
            array('id' => '3','name' => '未使用','content' => NULL),
            array('id' => '4','name' => '使用中','content' => NULL),
            array('id' => '5','name' => '已刪除','content' => NULL),
            array('id' => '6','name' => '拒絕','content' => NULL),
            array('id' => '7','name' => '邀請未回覆','content' => NULL),
            array('id' => '8','name' => '被邀請未回覆','content' => NULL),
            array('id' => '9','name' => '加入群組(審核中)','content' => NULL),
            array('id' => '10','name' => '被邀請加入群組','content' => NULL),
            array('id' => '11','name' => '加入群組(拒絕)','content' => NULL),

        );


        /* `chat`.`users` */
        $this->tables->{'users'} = array(
         array('id' => '1','account' => 'user1','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user1@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '2','account' => 'user2','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user2@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '3','account' => 'user3','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user3@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '4','account' => 'user4','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user4@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '5','account' => 'user5','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user5@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '6','account' => 'user6','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user6@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '7','account' => 'user7','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user7@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '8','account' => 'user8','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user8@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '9','account' => 'user9','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user9@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17'),
          array('id' => '10','account' => 'user10','password' => 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f','email' => 'user10@test.com','role_type_id' => '1','status_id' => '1','created_at' => '2020-10-07 11:16:17','updated_at' => '2020-10-07 11:16:17')
        );

        /* `chat`.`user_profile` */
        $this->tables->{'user_profiles'} = array(
          array('id' => '1','user_id' => '1','sticker_media_id' => '1','name' => 'user1','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '1','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '2','user_id' => '2','sticker_media_id' => '2','name' => 'user2','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '3','user_id' => '3','sticker_media_id' => '3','name' => 'user3','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '4','user_id' => '4','sticker_media_id' => '4','name' => 'user4','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '5','user_id' => '5','sticker_media_id' => '5','name' => 'user5','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '6','user_id' => '6','sticker_media_id' => '6','name' => 'user6','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '7','user_id' => '7','sticker_media_id' => '7','name' => 'user7','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '8','user_id' => '8','sticker_media_id' => '8','name' => 'user8','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '9','user_id' => '9','sticker_media_id' => '9','name' => 'user9','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51'),
          array('id' => '10','user_id' => '10','sticker_media_id' => '10','name' => 'user10','nick_name' => 'cay_nick','message' => 'ok','message_warn' => '1','message_warn_music_type' => '2','status_id' => '1','created_at' => '2020-10-07 11:17:51','updated_at' => '2020-10-07 11:17:51')
        );

        /* `chat`.`music_types` */
        $this->tables->{'music_types'} = array(
            array('id' => '1','name' => '無','content' => NULL),
            array('id' => '2','name' => '一般','content' => NULL),
            array('id' => '3','name' => '嘟嘟','content' => NULL)
        );


    }

    public function run()
    {
        $this->mainDB = 'mysql';

        foreach ($this->tables as $table => $data) {
            $this->table = $table;
            $this->data = $data;
            $this->temp();
        }

    }
}

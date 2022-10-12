<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
            'permissions' => '{"group_badge":"<svg xmlns=\\"http:\\/\\/www.w3.org\\/2000\\/svg\\" xmlns:xlink=\\"http:\\/\\/www.w3.org\\/1999\\/xlink\\" x=\\"0px\\" y=\\"0px\\" viewBox=\\"0 0 42 42\\" style=\\"enable-background:new 0 0 42 42;\\" xml:space=\\"preserve\\"><path style=\\"fill:#E64C3C;\\" d=\\"M42,21c0,11.598-9.402,21-21,21S0,32.598,0,21C0,12.623,4.905,5.391,12,2.021C14.728,0.725,17.779,0,21,0C32.598,0,42,9.402,42,21z\\"\\/><path style=\\"fill:#556080;\\" d=\\"M29.988,2.042c-14.467,24.91,3.568,32.991,5.789,33.873C39.618,32.109,42,26.834,42,21C42,12.623,37.083,5.413,29.988,2.042z\\"\\/><path style=\\"fill:#556080;\\" d=\\"M0,21c0,5.815,2.365,11.076,6.184,14.879L7,36c0,0,20.416-7.458,5-33.979C4.905,5.391,0,12.623,0,21z\\"\\/><ellipse transform=\\"matrix(0.7825 0.6227 -0.6227 0.7825 14.4055 -1.237)\\" style=\\"fill:#FEFEFE;\\" cx=\\"8.973\\" cy=\\"20\\" rx=\\"5.5\\" ry=\\"4\\"\\/><ellipse transform=\\"matrix(-0.7825 0.6227 -0.6227 -0.7825 71.2276 15.1178)\\" style=\\"fill:#FEFEFE;\\" cx=\\"32.973\\" cy=\\"20\\" rx=\\"5.5\\" ry=\\"4\\"\\/><\\/svg>","allow_offline":"1","option_feedback":"1","option_avatar":"1","option_max_info_chars":"300","option_stream":"1","option_hd_stream":"1","option_download":"1","option_download_speed":"100","option_download_resume":"1","artist_allow_upload":"1","artist_allow_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_allow_mood":["1","2"],"artist_mod":"1","artist_trusted_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_num_files_allow":"100","artist_day_edit_limit":"100","artist_files_upload_each_time":"10","artist_files_each_album":"15","artist_max_songs":"0","artist_max_albums":"0","user_max_playlists":"0","user_max_playlist_songs":"0","artist_allow_podcast":"1","artist_podcast_allow_categories":["1","2","3","4","5","6"],"artist_podcast_mod":"1","artist_podcast_trusted_categories":["1","2","3","4","5","6"],"artist_podcast_max_episodes":"5","artist_podcast_day_edit_limit":"0","artist_max_podcasts":"0","monetization_sale":"1","monetization_sale_cut":"60","monetization_song_min_price":"0.99","monetization_song_max_price":"9.99","monetization_album_min_price":"0.99","monetization_album_max_price":"9.99","monetization_streaming":"1","monetization_streaming_rate":"0.00783","monetization_paypal_min_withdraw":"50","monetization_bank_min_withdraw":"250","blog_allow_view_categories":["2","3","4","5","6","7"],"blog_prohibited_view_categories":["3","4","5","6","7"],"blog_allow_add_categories":["2","3","4","5","6","7"],"blog_allow_public_directly":"1","blog_allow_hide":"1","blog_allow_vote":"1","blog_allow_html":"1","blog_allow_public_home":"1","blog_allow_public_fixed":"1","blog_allow_upload_images":"1","blog_allow_upload_files":"1","blog_num_files_allow":"5","blog_day_edit_limit":"5","blog_upload_extensions":"5","blog_upload_size":"1024","blog_download_speed":"100","blog_flood":"60","blog_news_per_day":"5","comment_allow":"1","comment_url":"1","comment_edit":"1","option_comment_delete":"1","comment_day_limit_edit":"0","admin_access":"1","admin_settings":"1","admin_email":"1","admin_metatags":"1","admin_languages":"1","admin_roles":"1","admin_media_manager":"1","admin_sitemap":"1","admin_backup":"1","admin_api_tester":"1","admin_system_logs":"1","admin_dictionary":"1","admin_scheduled":"1","admin_earnings":"1","admin_subscriptions":"1","admin_banners":"1","admin_categories":"1","admin_posts":"1","admin_artist_claim":"1","admin_genres":"1","admin_moods":"1","admin_radio":"1","admin_channels":"1","admin_slideshow":"1","admin_playlists":"1","admin_artists":"1","admin_albums":"1","admin_songs":"1","admin_users":"1","admin_pages":"1","admin_comments":"1","admin_terminal":"1","group_name":"Administrator"}',
                'created_at' => '2019-07-24 17:00:00',
                'updated_at' => '2020-10-13 08:17:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Moderator',
                'permissions' => '{"group_badge":null,"allow_offline":"1","option_feedback":"1","option_avatar":"1","option_max_info_chars":"160","option_stream":"1","option_hd_stream":"1","option_download":"1","option_download_speed":"1000","option_download_resume":"1","artist_allow_upload":"1","artist_allow_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_allow_mood":["1","2","3","4","5"],"artist_mod":"1","artist_trusted_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_num_files_allow":"100","artist_day_edit_limit":"10","artist_files_upload_each_time":"10","artist_files_each_album":"15","artist_max_songs":"0","artist_max_albums":"0","user_max_playlists":"0","user_max_playlist_songs":"0","artist_allow_podcast":"1","artist_podcast_allow_categories":["1","2","3","4","5","6"],"artist_podcast_mod":"1","artist_podcast_trusted_categories":["1","2","3","4","5","6"],"artist_podcast_max_episodes":"50","artist_podcast_day_edit_limit":"0","artist_max_podcasts":"0","monetization_sale":"1","monetization_sale_cut":"60","monetization_song_min_price":"0.99","monetization_song_max_price":"9.99","monetization_album_min_price":"0.99","monetization_album_max_price":"9.99","monetization_streaming":"1","monetization_streaming_rate":"0.00783","monetization_paypal_min_withdraw":"50","monetization_bank_min_withdraw":"250","blog_allow_view_categories":["2","3","4","5","6","7"],"blog_allow_add_categories":["2","3","4","5","6","7"],"blog_allow_public_directly":"1","blog_trust_categories":["2","3","4","5","6","7"],"blog_allow_hide":"1","blog_allow_vote":"1","blog_allow_html":"1","blog_allow_public_home":"1","blog_allow_public_fixed":"1","blog_allow_upload_images":"1","blog_allow_upload_files":"1","blog_num_files_allow":"5","blog_day_edit_limit":"5","blog_upload_extensions":"5","blog_upload_size":"1024","blog_download":"1","blog_download_speed":"100","blog_flood":"60","blog_news_per_day":"5","comment_allow":"1","comment_url":"1","comment_edit":"1","option_comment_delete":"1","comment_day_limit_edit":"0","admin_access":"1","admin_categories":"1","admin_posts":"1","admin_artist_claim":"1","admin_genres":"1","admin_moods":"1","admin_radio":"1","admin_channels":"1","admin_slideshow":"1","admin_playlists":"1","admin_artists":"1","admin_albums":"1","admin_songs":"1","admin_users":"1","admin_pages":"1","admin_comments":"1","group_name":"Moderator"}',
                'created_at' => NULL,
                'updated_at' => '2020-10-13 08:17:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Anywhere Subscription',
                'permissions' => '{"group_badge":null,"option_feedback":"1","option_avatar":"1","option_max_info_chars":"180","option_stream":"1","option_hd_stream":"1","option_download":"1","option_download_hd":"1","option_download_speed":"0","option_download_resume":"1","artist_allow_upload":"1","artist_allow_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_allow_mood":["1","2","3","4","5"],"artist_mod":"1","artist_trusted_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_num_files_allow":"100","artist_day_edit_limit":"10","artist_files_upload_each_time":"10","artist_files_each_album":"15","artist_max_songs":"0","artist_max_albums":"0","user_max_playlists":"0","user_max_playlist_songs":"0","artist_allow_podcast":"1","artist_podcast_allow_categories":["1","2","3","4","5","6"],"artist_podcast_mod":"1","artist_podcast_trusted_categories":["1","2","3","4","5","6"],"artist_podcast_max_episodes":"50","artist_podcast_day_edit_limit":"0","artist_max_podcasts":"0","monetization_sale":"1","monetization_sale_cut":"60","monetization_song_min_price":"0.99","monetization_song_max_price":"9.99","monetization_album_min_price":"0.99","monetization_album_max_price":"9.99","monetization_streaming":"1","monetization_streaming_rate":"0.00783","monetization_paypal_min_withdraw":"50","monetization_bank_min_withdraw":"250","blog_allow_view_categories":["2","3","4","5","6","7"],"blog_allow_add_categories":["2","3","4","5","6","7"],"blog_allow_public_directly":"1","blog_trust_categories":["2","3","4","5","6","7"],"blog_allow_hide":"1","blog_allow_vote":"1","blog_allow_html":"1","blog_allow_public_home":"1","blog_allow_public_fixed":"1","blog_allow_upload_images":"1","blog_allow_upload_files":"1","blog_num_files_allow":"5","blog_day_edit_limit":"5","blog_upload_extensions":"5","blog_upload_size":"1024","blog_download":"1","blog_download_speed":"100","blog_flood":"60","blog_news_per_day":"5","comment_allow":"1","comment_url":"1","comment_edit":"1","option_comment_delete":"1","comment_day_limit_edit":"0","group_name":"Anywhere Subscription"}',
                'created_at' => '2019-07-24 17:00:00',
                'updated_at' => '2020-10-13 08:16:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Plus Subscription',
                'permissions' => '{"group_badge":null,"option_feedback":"1","option_avatar":"1","option_max_info_chars":"180","option_stream":"1","option_hd_stream":"1","option_download":"1","option_download_hd":"1","option_download_speed":"3000","option_download_resume":"1","artist_allow_upload":"1","artist_allow_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_allow_mood":["1","2","3","4","5"],"artist_mod":"1","artist_trusted_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_num_files_allow":"100","artist_day_edit_limit":"10","artist_files_upload_each_time":"10","artist_files_each_album":"15","artist_max_songs":"0","artist_max_albums":"0","user_max_playlists":"0","user_max_playlist_songs":"0","artist_allow_podcast":"1","artist_podcast_allow_categories":["1","2","3","4","5","6"],"artist_podcast_mod":"1","artist_podcast_trusted_categories":["1","2","3","4","5","6"],"artist_podcast_max_episodes":"50","artist_podcast_day_edit_limit":"0","artist_max_podcasts":"0","monetization_sale":"1","monetization_sale_cut":"60","monetization_song_min_price":"0.99","monetization_song_max_price":"9.99","monetization_album_min_price":"0.99","monetization_album_max_price":"9.99","monetization_streaming":"1","monetization_streaming_rate":"0.00783","monetization_paypal_min_withdraw":"50","monetization_bank_min_withdraw":"250","blog_allow_view_categories":["2","3","4","5","6","7"],"blog_allow_add_categories":["2","3","4","5","6","7"],"blog_allow_public_directly":"1","blog_trust_categories":["2","3","4","5","6","7"],"blog_allow_hide":"1","blog_allow_vote":"1","blog_allow_html":"1","blog_allow_public_home":"1","blog_allow_public_fixed":"1","blog_allow_upload_images":"1","blog_allow_upload_files":"1","blog_num_files_allow":"5","blog_day_edit_limit":"5","blog_upload_extensions":"5","blog_upload_size":"1024","blog_download":"1","blog_download_speed":"100","blog_flood":"60","blog_news_per_day":"5","comment_allow":"1","comment_url":"1","comment_edit":"1","option_comment_delete":"1","comment_day_limit_edit":"0","group_name":"Plus Subscription"}',
                'created_at' => '2019-07-24 17:00:00',
                'updated_at' => '2020-10-13 08:16:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Member',
                'permissions' => '{"group_badge":null,"ad_support":"1","option_feedback":"1","option_avatar":"1","option_max_info_chars":"180","option_stream":"1","option_download_speed":"200","artist_allow_upload":"1","artist_allow_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_allow_mood":["1","2","3","4","5"],"artist_mod":"1","artist_trusted_genre":["7","6","2","4","8","9","10","11","12","13","14","16","18"],"artist_num_files_allow":"100","artist_day_edit_limit":"10","artist_files_upload_each_time":"10","artist_files_each_album":"15","artist_max_songs":"0","artist_max_albums":"0","user_max_playlists":"0","user_max_playlist_songs":"0","artist_podcast_max_episodes":null,"artist_podcast_day_edit_limit":null,"artist_max_podcasts":null,"monetization_sale":"1","monetization_sale_cut":"60","monetization_song_min_price":"0.99","monetization_song_max_price":"9.99","monetization_album_min_price":"0.99","monetization_album_max_price":"9.99","monetization_streaming":"1","monetization_streaming_rate":"0.00783","monetization_paypal_min_withdraw":"50","monetization_bank_min_withdraw":"250","blog_allow_view_categories":["2","3","4","5","6","7"],"blog_allow_add_categories":["2","3","4","5","6","7"],"blog_allow_public_directly":"0","blog_allow_hide":"1","blog_allow_vote":"1","blog_allow_html":"1","blog_allow_public_home":"1","blog_allow_public_fixed":"1","blog_allow_upload_images":"1","blog_allow_upload_files":"1","blog_num_files_allow":"5","blog_day_edit_limit":"5","blog_upload_extensions":"5","blog_upload_size":"1024","blog_download":"1","blog_download_speed":"100","blog_flood":"60","blog_news_per_day":"5","comment_allow":"1","comment_url":"1","comment_day_limit_edit":"5","group_name":"Member"}',
                'created_at' => '2019-07-24 17:00:00',
                'updated_at' => '2020-10-13 08:15:22',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Guest',
                'permissions' => '{"ad_support":"1","option_stream":"1","option_download_speed":"200","artist_num_files_allow":null,"artist_day_edit_limit":null,"artist_files_upload_each_time":null,"artist_files_each_album":null,"artist_max_songs":null,"artist_max_albums":null,"user_max_playlists":null,"user_max_playlist_songs":null,"artist_podcast_max_episodes":null,"artist_podcast_day_edit_limit":null,"artist_max_podcasts":null,"monetization_sale_cut":null,"monetization_song_min_price":null,"monetization_song_max_price":null,"monetization_album_min_price":null,"monetization_album_max_price":null,"monetization_streaming_rate":null,"monetization_paypal_min_withdraw":null,"monetization_bank_min_withdraw":null,"blog_allow_view_categories":["3","5"],"blog_prohibited_view_categories":["4","5"],"blog_allow_add_categories":["2","3","4","5","6","7"],"blog_allow_public_directly":"1","blog_trust_categories":["4"],"blog_allow_vote":"0","blog_allow_html":"0","blog_allow_public_home":"0","blog_allow_public_fixed":"0","blog_allow_upload_images":"0","blog_allow_upload_files":"0","blog_num_files_allow":"5","blog_day_edit_limit":"5","blog_upload_extensions":"5","blog_upload_size":"1024","blog_download_speed":"100","blog_flood":"300","blog_news_per_day":"5","comment_day_limit_edit":"0","group_name":"Guest"}',
                'created_at' => '2019-07-24 17:00:00',
                'updated_at' => '2020-10-13 08:14:31',
            ),
        ));
        
        
    }
}
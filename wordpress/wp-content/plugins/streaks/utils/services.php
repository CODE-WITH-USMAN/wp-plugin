<?php
class Services {
    private function create_preprocessing_tables() {
        global $wpdb;
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    
        $table_name = $wpdb->prefix . 'user_interests';
        $charset_collate = $wpdb->get_charset_collate();
    
        $sql = "CREATE TABLE $table_name (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            name VARCHAR(100) NOT NULL,
            slug VARCHAR(100) NOT NULL,
            PRIMARY KEY (id)
        ) $charset_collate;";
    
        dbDelta($sql);
    }
    

    private function insert_default_interests() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'user_interests';
    
        // Check if table already has data
        $count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
        if ($count > 0) {
            return; // Prevent duplicate insertion
        }
    
        $interests = [
            'Prayers', 'Gym', 'Coding', 'Cheat Meal', 'No Sugar', 'Streaks',
            'Meditation', 'Reading', 'Running', 'Cycling', 'Yoga', 'Fasting',
            'Healthy Eating', 'Studying', 'Learning Languages', 'Writing', 'Journaling',
            'Cold Showers', 'Sleep Early', 'Wake Up Early', 'Water Intake', 'Stretching',
            'Pushups', 'Walk', 'No Smoking', 'No Alcohol', 'Drawing', 'Painting',
            'Singing', 'Dancing', 'Music Practice', 'Time with Family', 'No Junk Food',
            'Meal Prep', 'Budgeting', 'No Phone After 10PM', 'Learning Quran',
            'Reciting Quran', 'Volunteer Work', 'Content Creation', 'Blogging',
            'Skill Practice', 'Saving Money', 'Gratitude Practice', 'Daily Planning',
            'Goal Review', 'Positive Affirmations', 'Mindfulness', 'Self-Reflection',
            'Digital Detox'
        ];
    
        foreach ($interests as $name) {
            $slug = sanitize_title_with_dashes($name); // Converts to safe slug
            $wpdb->insert($table_name, [
                'name' => $name,
                'slug' => $slug
            ]);
        }
    }
    

    public function create_user_data_table() {
        global $wpdb;
    
        $table_name = $wpdb->prefix . 'user_data';
        $charset_collate = $wpdb->get_charset_collate();
    
        $sql = "CREATE TABLE $table_name (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            username VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            gender VARCHAR(10) NOT NULL,
            age INT(3) NOT NULL,
            weight FLOAT NOT NULL,
            phone_number VARCHAR(20) NOT NULL,
            prayers BOOLEAN DEFAULT 0,
            gym BOOLEAN DEFAULT 0,
            coding BOOLEAN DEFAULT 0,
            cheat_meal BOOLEAN DEFAULT 0,
            no_sugar BOOLEAN DEFAULT 0,
            streaks BOOLEAN DEFAULT 0,
            meditation BOOLEAN DEFAULT 0,
            reading BOOLEAN DEFAULT 0,
            running BOOLEAN DEFAULT 0,
            cycling BOOLEAN DEFAULT 0,
            yoga BOOLEAN DEFAULT 0,
            fasting BOOLEAN DEFAULT 0,
            healthy_eating BOOLEAN DEFAULT 0,
            studying BOOLEAN DEFAULT 0,
            learning_languages BOOLEAN DEFAULT 0,
            writing BOOLEAN DEFAULT 0,
            journaling BOOLEAN DEFAULT 0,
            cold_showers BOOLEAN DEFAULT 0,
            sleep_early BOOLEAN DEFAULT 0,
            wake_up_early BOOLEAN DEFAULT 0,
            water_intake BOOLEAN DEFAULT 0,
            stretching BOOLEAN DEFAULT 0,
            pushups BOOLEAN DEFAULT 0,
            walk BOOLEAN DEFAULT 0,
            no_smoking BOOLEAN DEFAULT 0,
            no_alcohol BOOLEAN DEFAULT 0,
            drawing BOOLEAN DEFAULT 0,
            painting BOOLEAN DEFAULT 0,
            singing BOOLEAN DEFAULT 0,
            dancing BOOLEAN DEFAULT 0,
            music_practice BOOLEAN DEFAULT 0,
            time_with_family BOOLEAN DEFAULT 0,
            no_junk_food BOOLEAN DEFAULT 0,
            meal_prep BOOLEAN DEFAULT 0,
            budgeting BOOLEAN DEFAULT 0,
            no_phone_after_10pm BOOLEAN DEFAULT 0,
            learning_quran BOOLEAN DEFAULT 0,
            reciting_quran BOOLEAN DEFAULT 0,
            volunteer_work BOOLEAN DEFAULT 0,
            content_creation BOOLEAN DEFAULT 0,
            blogging BOOLEAN DEFAULT 0,
            skill_practice BOOLEAN DEFAULT 0,
            saving_money BOOLEAN DEFAULT 0,
            gratitude_practice BOOLEAN DEFAULT 0,
            daily_planning BOOLEAN DEFAULT 0,
            goal_review BOOLEAN DEFAULT 0,
            positive_affirmations BOOLEAN DEFAULT 0,
            mindfulness BOOLEAN DEFAULT 0,
            self_reflection BOOLEAN DEFAULT 0,
            digital_detox BOOLEAN DEFAULT 0,
            PRIMARY KEY (id),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) $charset_collate;";
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
    
    

    // Public method to run setup
    public function run_migrations() {
        $this->create_preprocessing_tables();
        $this->insert_default_interests();
        $this->create_user_data_table();
    }

    public function drop_tables() {
        global $wpdb;
        $table_name1 = $wpdb->prefix . 'user_interests';
        $table_name2 = $wpdb->prefix . 'user_data';
        $wpdb->query("DROP TABLE IF EXISTS $table_name1");
        $wpdb->query("DROP TABLE IF EXISTS $table_name2");
    }



    public function check_user_data_and_redirect() {
        global $wpdb;
    
        $table_name = $wpdb->prefix . 'user_data'; // Make sure this table exists
    
        $row_count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
    
        if ($row_count > 0) {
            // wp_redirect(home_url('/dashboard'));
            exit;
        } else {
            include_once plugin_dir_path(__FILE__) . '../pages/info_form.php';
            exit;
        }
    }
}
?>

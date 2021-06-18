<?php

class m0002_add_password {
    public function up() {
        $db  = \algorasoft\garden\Application::$app->db;
        $SQL = "ALTER TABLE `users` ADD COLUMN `password` VARCHAR(255) NOT NULL;";
        $db->pdo->exec($SQL);
    }
    public function down() {
        $db  = \algorasoft\garden\Application::$app->db;
        $SQL = "ALTER TABLE `users` DROP COLUMN `password`;";
        $db->pdo->exec($SQL);
    }
}
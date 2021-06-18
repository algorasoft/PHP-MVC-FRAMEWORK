<?php

class m0001_initial {
    public function up() {
        $db  = \algorasoft\garden\Application::$app->db;
        $SQL = "CREATE TABLE `users` (
            `id` int(11) NOT NULL,
            `email` varchar(255) NOT NULL,
            `firstname` varchar(255) NOT NULL,
            `lastname` varchar(255) NOT NULL,
            `status` tinyint(4) NOT NULL,
            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
          ALTER TABLE `users`
            ADD PRIMARY KEY (`id`);
          ALTER TABLE `users`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
          COMMIT;";
        $db->pdo->exec($SQL);
    }

    public function down() {
        $db  = \algorasoft\garden\Application::$app->db;
        $SQL = "DROP TABLE `users`;";
        $db->pdo->exec($SQL);
    }
}
<?php
include_once __DIR__.'/../models/Statistique.php';

class StatistiqueController extends Statistique
{
   
    public function countRows() {
        $tables = array('article', 'category', 'admin');
        $result = array();
        $articleCount = 0;
        $categoryCount = 0;
        $adminCount = 0;

        try {
            foreach ($tables as $table) {
                $count = $this->count($table,'*')->fetchColumn();
                if ($table == 'article') {
                    $articleCount = $count;
                } elseif ($table == 'category') {
                    $categoryCount = $count;
                } elseif ($table == 'admin') {
                    $adminCount = $count;
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        return array('article' => $articleCount, 'category' => $categoryCount, 'admin' => $adminCount);
    }

}
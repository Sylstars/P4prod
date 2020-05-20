<?php

namespace App\src\DAO;

class ArticleDAO extends DAO
{
    public function getArticles()
    {
        
        $sql = 'SELECT id, title, content, author, createdAt FROM articles ORDER BY id DESC';
        return $this->createQuery($sql);
    }

    public function getArticle($articleId)
    {

        $sql='SELECT id,title,content,author,createdAt FROM articles WHERE id=?';
        return $this->createQuery($sql,[$articleId]);

    }
}
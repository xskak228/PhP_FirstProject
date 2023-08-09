<?php

class User
{
    public $email;
    public $password;
    public $username;

    public function __construct($email, $password, $username)
    {
       $this->email = $email;
       $this->password = $password;
       $this->username = $username;
    }

    # не буду учитывать "предыдуший email и ник"
    public function ChangeEmail($newEmail) {$this->email = $newEmail;}
    public function ChangeUserName($newUserName) {$this->username = $newUserName;}

}

class News
{
    public $content;
    public $title;
    public $author;
    public $category;
    public $comments = [];

    public function __construct($title, $content, $category, $author)
    {
        # точно не уверен, так ли это делать надо
        if (($author instanceof User) === true) {
            $this->title = $title;
            $this->content = $content;
            $this->category = $category;
            $this->author = $author;
            return true;
        } else {
            return false;
        }

    }

    public function AddComment($comment) {$this->comments[] = $comment;}
    public function EditingNews($newTitle, $newContent, $newCategory, $author)
    {
        $this->title = $newTitle;
        $this->content = $newContent;
        $this->category = $newCategory;
        $this->author = $author;
    }
}

class Comments
{
    public $content;
    public $author;

    public function __construct($content, $author)
    {
        $this->content = $content;
        $this->author = $author;
    }
}

class Guest {
    # елси бы я разробатывал гостя, то добавил бы id у него
    # не знаю, хорошая практика или нет...
    public $userId;

    public function __construct($userId) {$this->userId = $userId;}

}

$user = new User("test@test.ru", "1234567890", "testname");
# $user->ChangeUserName("NewNick");
# $user->ChangeEmail("new@new.ru");
#
$guest = new Guest("1234567890"); # и это id генерится по своим правилам
#
$news = new News("Test", "123", "test", $user);
# $news->EditingNews("Test2", "321", "test2", $user);
# # есть сомнения в правильности изменения, в плане, "$user"
#
# $comment = new Comments("123123", $user);
#
# $news->AddComment($comment);